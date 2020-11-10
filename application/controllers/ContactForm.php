<?php

class ContactForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));

      $this->load->library('form_validation');

      
      $this->form_validation->set_rules('fname', 'First Name', 'required|min_length[1]|max_length[12]');
      $this->form_validation->set_rules('lname', 'Last Name', 'required');
      $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]');
      $this->form_validation->set_rules('comments', 'Comments', 'required');

      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('contactus');
      }
      else
      {
         #$this->load->view('formsuccess');
         $this->load->view('contactus');
    	$this->load->helper('url');
		$this->load->model('Common_model');
		$this->Common_model->continsert();
		echo "Record Succesfully Updated";
		}
        }
      }
?>