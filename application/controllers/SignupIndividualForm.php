<?php

class SignupIndividualForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));

      $this->load->library('form_validation');
     
      $this->form_validation->set_rules('fname', 'First Name', 'required|min_length[1]|max_length[12]');
      $this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[1]|max_length[12]');
      $this->form_validation->set_rules('work', 'Work', 'required');
      $this->form_validation->set_rules('school', 'School', 'required');
      $this->form_validation->set_rules('email', 'Email', 'valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('school', 'School', 'required');

      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('signup_individual');
      }
      else
      {
         #$this->load->view('formsuccess');
         $this->load->view('signup_individual');
    	$this->load->helper('url');
		$this->load->model('Common_model');
		$this->Common_model->individualinsert();
		echo "Record Succesfully Updated";
		}
        }
      }
?>