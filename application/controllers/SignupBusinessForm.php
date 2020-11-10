<?php

class SignupBusinessForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('type_of_business', 'Type of Business:', 'required');
      $this->form_validation->set_rules('lname', 'Last Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('signup_business');
      }
      else
      {
         #$this->load->view('formsuccess');
      $this->load->view('signup_business');
    	$this->load->helper('url');
		$this->load->model('Common_model');
		$this->Common_model->businessinsert();
		echo "Record Succesfully Updated";
		}
        }
      }
?>