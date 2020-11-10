<?php

class DashboardConferenceEventForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('conferencename', 'Conference', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');
      $this->form_validation->set_rules('date', 'Date', 'required');
      $this->form_validation->set_rules('sede', 'Sede', 'required');

      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('dashboardconferenceevent');
      }
      else
      {
         #$this->load->view('formsuccess');
         //$this->load->view('contacto');
    	  $this->load->helper('url');
		  $this->load->model('Common_model');
		  $this->Common_model->AddConferenceData();
		  echo "New Rows Succesfully Updated";
		  $this->load->view('dashboardevent');
		  }
    }
  }
?>