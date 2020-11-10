<?php

class ConferencesIndividualForm extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('Common_model');
}

   function index()
	{	
		$this->load->library('session');
		$this->load->model('Common_model');
		$this->Common_model->DeleteConferenceIndividual();
		$this->load->helper('url');
		$this->load->view('conferencesindividual');
		
	}

	function add(){
      $this->load->library('session');
      $this->load->helper('url');
    $id=$_POST['editButton'];
    echo $id;
    }

  }
?>