<?php

class EventsIndividualForm extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('Common_model');
}

   function index()
	{	
		$this->load->library('session');
		$this->load->model('Common_model');
		$this->Common_model->DeleteEventIndividual();
		$this->load->helper('url');
		$this->load->view('eventsindividual');
		
	}

	function add(){
      $this->load->library('session');
      $this->load->helper('url');
    $id=$_POST['editButton'];
    echo $id;
    }

  }
?>