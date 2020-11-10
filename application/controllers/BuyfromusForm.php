<?php

class BuyfromusForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->model('Common_model');
      $this->load->view('buyfromus');

   }

  }
?>