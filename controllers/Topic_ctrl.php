<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic_ctrl extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('topic_model');


	}

	public function index()
	{

			$topics=$this->topic_model->gets();
			$this->load->view('head_view');
			$this->load->view('main_view');
		  $this->load->view('topic_list_view',array('topics'=>$topics ));
      $this->load->view('footer_view');
	}



  public function get($id){
		
			$topics=$this->topic_model->gets();
			$topic=$this->topic_model->get($id);
      $this->load->view('head_view');
			$this->load->view('topic_list_view',array('topics'=>$topics ));
      $this->load->view('get_view',array('topic'=>$topic));
      $this->load->view('footer_view');
  }
}
?>
