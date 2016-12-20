
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic_ctrl extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('Topic_model');


	}

	public function index()
	{
			$this->_head();
			$this->load->view('main_view');
      $this->load->view('footer_view');
	}



  public function get($id)
	{
			$this->_head();
			$topic=$this->Topic_model->get($id);
			$this->load->helper(array('url','korea'));
      $this->load->view('get_view',array('topic'=>$topic));
      $this->load->view('footer_view');
  }

	public function add(){
		$this->_head();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','제목','required');
		$this->form_validation->set_rules('description','내용','required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('add_view');
		}
		else
		{
				$topic_id=$this->Topic_model->add($this->input->post('title'),$this->input->post('description'));
				$this->load->helper('url');
				redirect('/Topic_ctrl/get/'.$topic_id);
				
		}

		$this->load->view('footer_view');
	}
	function _head(){
		$topics=$this->Topic_model->gets();
		$this->load->view('head_view');
		$this->load->view('topic_list_view',array('topics'=>$topics ));


	}
}
?>
