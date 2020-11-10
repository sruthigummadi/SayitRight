<?php

class DashboardEvent2Form extends CI_Controller {

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
           $this->data['posts'] = $this->Common_model->event();
           $this->load->view('dashboardbevent2', $this->data); 
           
           if(isset ($_POST['addConferenceButton'])){
              $this->Common_model->updateevent();
              $this->load->view('eventsevent');
            
           }
         }
       }
?>