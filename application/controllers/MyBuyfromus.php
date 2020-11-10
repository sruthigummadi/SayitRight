<?php

class MyBuyfromus extends CI_Controller {

   function index()
   {
      $this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Common_model');
		$this->load->view('checkout');

   }

  }
?>