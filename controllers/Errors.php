<?php
class Errors extends CI_Controller{
    public function notFound(){
      $this->load->view("head_view");
      $this->load->view("errors/404");

      $this->load->view("footer_view");
    }
}
 ?>
