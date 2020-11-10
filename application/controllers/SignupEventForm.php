<?php

class SignupEventForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));

      $this->load->library('form_validation');
      $this->form_validation->set_rules('fname', 'First Name', 'required|min_length[1]|max_length[12]');
      $this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[1]|max_length[12]');
      $this->form_validation->set_rules('email', 'Email', 'valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('signup_event');
      }
      else
      {
         #$this->load->view('formsuccess');
         $this->load->view('signup_event');
    	$this->load->helper('url');
		$this->load->model('Common_model');
		$this->Common_model->eventinsert();
		echo "Record Succesfully Updated";
		}
        }
      }
?>