<?php

class LoginForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));

      $this->load->library('form_validation');

      $this->form_validation->set_rules('user_type', 'Select the Type of User', 'required');
      $this->form_validation->set_rules('userName', 'Email', 'required');
      $this->form_validation->set_rules('pwd', 'Password', 'required');

      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('login');
      }
      else
      {
         #$this->load->view('formsuccess');
        // $this->load->view('iniciar_sesion');
      $this->load->helper('url');
    $this->load->model('Common_model');
    $this->Common_model->logincheck();
    //echo "new rows succesfully updated";
    }
        }
      }
?>