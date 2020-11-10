<?php

class MyEventsEventForm extends CI_Controller {

   function index()
	{	
		$this->load->library('session');
		$this->load->model('Common_model');
		$this->Common_model->deletemyevent();
		$this->load->helper('url');
		$this->load->view('myeventsevent');
		
	}

  }
?>