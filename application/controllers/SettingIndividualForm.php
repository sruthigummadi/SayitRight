<?php

class SettingIndividualForm extends CI_Controller {

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
           $this->data['posts'] = $this->Common_model->SettingFetch(); 
           $this->load->view('settingindividual', $this->data); 
           //$this->load->view('perfil', $this->data); 
           /*if(isset ($_POST['update_Button1'])){
              $this->Common_model->updateprofile();*/
            //$this->load->view('perfil', $this->data);
              #$this->load->view('perfiluser');
           }

  }
?>