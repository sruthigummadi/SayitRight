<?php

class HomeForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('email', 'Email', 'valid_email');

      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('home');
      }
      else
      {
         #$this->load->view('formsuccess');
      $this->load->view('home');
    	$this->load->helper('url');
      $this->load->model('Common_model');
      $this->Common_model->homeinsert();
      echo "Succesfully Subscribed";
		}
        }
      }
?>