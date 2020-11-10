<?php

class MyConferencesEventForm extends CI_Controller {

   function index()
	{	
		$this->load->library('session');
		$this->load->model('Common_model');
		$this->Common_model->deletemyconference();
		$this->load->helper('url');
		$this->load->view('myconferencesevent');
		
	}

  }
?>