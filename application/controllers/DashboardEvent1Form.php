<?php

class DashboardEvent1Form extends CI_Controller {

function __Construct(){
            parent::__Construct ();
            $this->load->database(); // load database
            $this->load->model('Common_model'); // load model 
         }

   function index()
   {
      $this->load->database();
           $this->load->helper(array('form', 'url'));
            $this->load->model('Common_model');
           $this->data['posts'] = $this->Common_model->conference();
           $this->load->view('dashboardevent1', $this->data); 
          
           if(isset ($_POST['addEventButton'])){
              $this->Common_model->updateconference();
              $this->load->view('dashboardevent1');
            
           }
         }
       }
?>