<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inde extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        
     
        // load form and url helpers
        $this->load->helper(array('form', 'url'));
         
        // load form_validation library
        $this->load->library('form_validation');
 
	}
	public function index()
	{
		$this->load->view('ind');
	}
	public function about()
	{$this->load->helper('url');
		$this->load->view('about');

	}

	public function clientlogin()
	{
		$this->load->helper('url');
		$this->load->view('clientlogin');
	}

    public function service()
	{   
		
		$this->form_validation->set_rules('first','First Name','required|alpha');
		$this->form_validation->set_rules('last','Last Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->load->view('servicemain');
	}

	public function client()
	{
		$this->load->helper('url');
		$this->load->view('regi');

	}

	public function contact()
	{
		$this->load->helper('url');
		$this->load->view('contact');
	}

	public function login()
	{
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function business()
	{
		$this->load->helper('url');
		$this->load->view('businesslogin');
	}

    public function insert()
    {
    	$this->load->helper('url');
    	$this->load->helper(array('form', 'url'));
         
        // load form_validation library
       
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


		$this->form_validation->set_rules('first', '* First Name', 'required|alpha',array('required' =>"* First Name is Required",'alpha'=>"* only letters"));

		$this->form_validation->set_rules('last', '* Last Name', 'required|alpha',array('required' =>"* Last Name is Required",'alpha'=>"* only letters"));


		$this->form_validation->set_rules('email', 'email', 'required|valid_email', array('required'=>"* Email is Required"));


		$this->form_validation->set_rules('phone', 'phone', 'required', array('required' =>"* Phone is Required"));

if ($this->form_validation->run() == FALSE) {
$this->load->view('regi');
} else {
        $this->load->helper('url');
		$this->load->model('Common_model');
		$this->Common_model->inse();

		echo "new rows succesfully updated";
		
    }}

    public function servinsert()
    {
    	 $this->load->helper('url');
    	$this->load->helper(array('form', 'url'));
         
        // load form_validation library
       
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


		$this->form_validation->set_rules('first', '* First Name', 'required|alpha',array('required' =>"* First Name is Required",'alpha'=>"* only letters"));

		$this->form_validation->set_rules('last', '* Last Name', 'required|alpha',array('required' =>"* Last Name is Required",'alpha'=>"* only letters"));


		$this->form_validation->set_rules('email', 'email', 'required|valid_email', array('required'=>"* Email is Required"));


		$this->form_validation->set_rules('phone', 'phone', 'required', array('required' =>"* Phone is Required"));

if ($this->form_validation->run() == FALSE) {
$this->load->view('servicemain');
} else {
        $this->load->helper('url');
		$this->load->model('Common_model');
		$this->Common_model->servinse();
		echo "new rows succesfully updated";
		
    }}

     public function coninsert()
    {    $this->load->helper('url');
    	$this->load->helper(array('form', 'url'));
         
        // load form_validation library
       
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


		$this->form_validation->set_rules('first', '* First Name', 'required|alpha',array('required' =>"* First Name is Required",'alpha'=>"* only letters"));

		$this->form_validation->set_rules('last', '* Last Name', 'required|alpha',array('required' =>"* Last Name is Required",'alpha'=>"* only letters"));


		$this->form_validation->set_rules('email', 'email', 'required|valid_email', array('required'=>"* Email is Required"));


		$this->form_validation->set_rules('phone', 'phone', 'required', array('required' =>"* Phone is Required"));

		$this->form_validation->set_rules('comments', 'comments', 'required', array('required' =>"* Comments are Required"));

if ($this->form_validation->run() == FALSE) {
$this->load->view('contact');
    	$this->load->helper('url');
		$this->load->model('Common_model');
		$this->Common_model->continsert();
		echo "new rows succesfully updated";
		
    }}

     public function logi()
    {   
    	  $this->load->helper('url');
    	$this->load->helper(array('form', 'url'));
         
        // load form_validation library
       
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


		

		$this->form_validation->set_rules('email', 'email', 'required|valid_email', array('required'=>"* Email is Required"));


		$this->form_validation->set_rules('pwd', 'pwd', 'required', array('required' =>"* Password is Required"));

		
       

    	$this->load->helper('url');
		$this->load->model('Common_model');
		$this->Common_model->log();

		
    
}


	
	
}
?>
