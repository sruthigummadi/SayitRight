<?php

class DashboardEventForm extends CI_Controller {

   function index()
   {
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->load->view('dashboardevent');
    }
  }
?>