<?php

class Common_model extends CI_Model
{
function continsert()
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
$this->db->query("INSERT INTO contactus(fname,lname,phone,comments)VALUES('$fname','$lname','$phone','$comments')");
}

function individualinsert()
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$work=$_POST['work'];
$school=$_POST['school'];
$email=$_POST['email'];
$password=$_POST['password']; 
$user_type = "individual";
$this->db->query("INSERT INTO individual(fname,lname,work,school,email,password,user_type) VALUES ('$fname','$lname','$work','$school','$email','$password','$user_type')");
}

function eventinsert()
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password']; 
$user_type = "event";
$this->db->query("INSERT INTO event(fname,lname,email,password,user_type) VALUES ('$fname','$lname','$email','$password','$user_type')");
}

function businessinsert()
{
$type_of_business=$_POST['type_of_business'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password']; 
$user_type = "business";
$this->db->query("INSERT INTO business (type_of_business,lname,email,password,user_type) VALUES ('$type_of_business','$lname','$email','$password','$user_type')");
}

function homeinsert()
{
$email=$_POST['email'];
$this->db->query("INSERT INTO home (email) VALUES ('$email')");
}

function logincheck()
{
$uname = $_POST['userName'];
$pass = $_POST['pwd'];
$type = $_POST['user_type'];
$this->load->library('session');
$this->session->set_userdata('ut',$type);
$this->load->helper('form');

if($type  == 'individual')
{
	$query = $this->db->query("SELECT * FROM individual WHERE email='".$uname."' AND password='".$pass."'");
}
elseif($type  == 'business')
{
	$query = $this->db->query("SELECT * FROM business WHERE email='".$uname."' AND password='".$pass."'");
}
elseif ($type  == 'event')
{
	$query = $this->db->query("SELECT * FROM event WHERE email='".$uname."' AND password='".$pass."'");
}
if($query->result_array()!=null)
{
 foreach ($query->result_array() as $row)
{
        if($row['email']== $_POST['userName'] && $type == 'individual')
        {      
  	      		$this->session->set_userdata('usrNam',$_POST['userName']);
        		redirect('DashboardIndividualForm');         
        }
        elseif($row['email']== $_POST['userName'] && $type == 'event')
        {      
  	      		$this->session->set_userdata('usrNam',$_POST['userName']);
        		redirect('DashboardEventForm');         
        }
        elseif($row['email']== $_POST['userName'] && $type == 'business')
        {      
  	      		$this->session->set_userdata('usrNam',$_POST['userName']);
        		redirect('DashboardBusinessForm');         
        }
        else
        {
        	echo "Invalid login details";
        }       
}
}
else
{
	echo "Invalid details";
}

}

function SettingFetch(){
	$this->load->library('session');
	$usrNam=$this->session->userdata('usrNam');
	$ut=$this->session->userdata('ut');
	echo $usrNam;
	echo $ut;
    if($ut=="individual")
	{
		$this->db->select("fname,lname,email,work,password"); 
		$this->db->from('individual');
		$query = $this->db->get();
		foreach($query->result() as $row)
		{
		  	if($row->email==$usrNam){
				return $row;
			}
		}
   }		      
   else if($ut=="business")
   {
		$this->db->select("lname,email,password,type_of_business"); 
		$this->db->from('business');
		$query = $this->db->get();
		foreach($query->result() as $row){
		 	if($row->email==$usrNam){
				return $row;
		    }
		}
	}
	else if($ut=="event")
	{
		$this->db->select("fname,lname,email,password"); 
		$this->db->from('event');
		$query = $this->db->get();
		foreach($query->result() as $row){
		  	if($row->email==$usrNam){
		  		return $row;
		    }
		}
	}		  
}

function ProductFetch()
{
	$this->load->library('session');
	$usrNam=$this->session->userdata('usrNam');
	$ut=$this->session->userdata('ut');
	$this->db->select("pid,pimg,pprice,pdes"); 
	$this->db->from('product');
	$query = $this->db->get();
	return $query;
}

function setproductid()
{	
	$price=$_POST['submit'];
	$this->session->set_userdata('pid',$price);
	header("location:\WDM_project5\index.php\MyBuyfromus");  
}

function OpenCart()  
{
	$this->load->library('session');
	echo $this->session->userdata('usrNam');
	echo $this->session->userdata('pid');
	echo $this->session->userdata('ut');
	return $this->db->query("select * from product where pid=".$this->session->userdata('pid'));
}

function ProductInsert()
{

	$f1 = $_POST['email'];
	$f2 = $_POST['fname'];
	$f3 = $_POST['lname'];
	$f4 = $_POST['address'];
	$f5 = $_POST['apartment'];
	$f6 = $_POST['city'];
	$f7 = $_POST['language'];
	$f8 = $_POST['zip'];
	$f9 = $this->session->userdata('pid');
	$f10 = $_POST['quantity'];
	$f11 = $this->session->userdata('usrNam');
	echo $this->session->userdata('usrNam');
	$this->db->query("INSERT INTO orderdetails(email,fname,lname,address,apartment,city,language,zip,pid,quantity,user_email) 
		              VALUES('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11')");
	header("location:".base_url()."index.php/ProductListForm");  

}

function Detail()  
{
	$this->load->library('session');
	echo $this->session->userdata('usrNam');
}

function AddEventData(){

	$f1 = $_POST['conferencename'];
	$f2 = $_POST['description'];
	$f3 = $_POST['date'];
	$f4 = $_POST['sede'];

	$this->db->query("INSERT INTO events(conferences,description,date,sede)VALUES('$f1','$f2','$f3','$f4')");
}

function AddConferenceData(){

	$f1 = $_POST['conferencename'];
	$f2 = $_POST['description'];
	$f3 = $_POST['date'];
	$f4 = $_POST['sede'];

	$this->db->query("INSERT INTO conference(conferences,description,date,sede)VALUES('$f1','$f2','$f3','$f4')");
}

function businessc()
{		
	$result = $this->db->query('select * from conference');
	return $result;
}

function businesse()
{		
	$result = $this->db->query('select * from events');
	return $result;
}

function mycbusiness()
{		
	$result = $this->db->query('select * from myconference');
	return $result;
}

function myebusiness()
{		
	$result = $this->db->query('select * from myevent');
	return $result;
}

function DeleteConference()
{
	if(isset($_POST['delete']) && trim($_POST['delete']!=''))
	{
		$beid=$_POST['delete'];
		$this->db->query("delete from conference where event_id=$beid");
	}
	else if(isset($_POST['edit']) && trim($_POST['edit']!=''))
	{
		$Ueid=$_POST['edit'];
		$this->session->set_userdata('eventId',$Ueid);
		redirect('DashboardBusiness1Form');
	}
	elseif(isset($_POST['add']) && trim($_POST['add']!=''))
	{
		$beid=$_POST['add'];
		$events = $this->Common_model->businessc();
    	foreach($events->result_array() as $row)
    	{
		$f1 = $row['conferences'];
		$f2 = $row['description'];
		$f3 = $row['date'];
		$f4 = $row['sede'];
		$this->load->library('session');
		$f5=$this->session->userdata('usrNam');
		$this->db->query("INSERT INTO myconference(conferences,description,date,sede,user_email)
			              VALUES('$f1','$f2','$f3','$f4','$f5')");
	}
}	
}

function DeleteConferenceIndividual()
{
	if(isset($_POST['add']) && trim($_POST['add']!=''))
	{
		$beid=$_POST['add'];
		$events = $this->Common_model->businessc();
    	foreach($events->result_array() as $row)
    	{
		$f1 = $row['conferences'];
		$f2 = $row['description'];
		$f3 = $row['date'];
		$f4 = $row['sede'];
		$this->load->library('session');
		$f5=$this->session->userdata('usrNam');
		$this->db->query("INSERT INTO myconference(conferences,description,date,sede,user_email)
			              VALUES('$f1','$f2','$f3','$f4','$f5')");
	}
}	
}

function DeleteEvent()
{
	if(isset($_POST['delete']) && trim($_POST['delete']!=''))
	{
		$beid=$_POST['delete'];
		$this->db->query("delete from events where event_id=$beid");
	}
	else if(isset($_POST['edit']) && trim($_POST['edit']!=''))
	{
		$Ueid=$_POST['edit'];
		$this->session->set_userdata('eventId',$Ueid);
		redirect('DashboardBusiness2Form');
	}
	elseif(isset($_POST['add']) && trim($_POST['add']!=''))
	{
		$beid=$_POST['add'];
		$events = $this->Common_model->businesse();
    	foreach($events->result_array() as $row)
    	{
		$f1 = $row['conferences'];
		$f2 = $row['description'];
		$f3 = $row['date'];
		$f4 = $row['sede'];
		$this->load->library('session');
		$f5=$this->session->userdata('usrNam');
		$this->db->query("INSERT INTO myevent(conferences,description,date,sede,user_email)
			              VALUES('$f1','$f2','$f3','$f4','$f5')");
	}
}	
}

function DeleteEventIndividual()
{
	if(isset($_POST['add']) && trim($_POST['add']!=''))
	{
		$beid=$_POST['add'];
		$events = $this->Common_model->businesse();
    	foreach($events->result_array() as $row)
    	{
		$f1 = $row['conferences'];
		$f2 = $row['description'];
		$f3 = $row['date'];
		$f4 = $row['sede'];
		$this->load->library('session');
		$f5=$this->session->userdata('usrNam');
		$this->db->query("INSERT INTO myevent(conferences,description,date,sede,user_email)
			              VALUES('$f1','$f2','$f3','$f4','$f5')");
	}
}	
}

function deletemyconference()
{
	if(isset($_POST['delete']) && trim($_POST['delete']!=''))
	{
		$beid=$_POST['delete'];
		$this->db->query("delete from myconference where conferences='$beid'");
	}	
}

function deletemyevent()
{
	if(isset($_POST['delete']) && trim($_POST['delete']!=''))
	{
		$beid=$_POST['delete'];
		$this->db->query("delete from myevent where conferences='$beid'");
	}	
}

function event()
	{
    	$this->load->library('session');
			  $id=$this->session->userdata('eventId');
			  echo $id;
            $res = $this->db->query("select * from events where event_id='".$id."' ;");
            foreach($res->result() as $row)
            {
						  	if($row->event_id==$id)
						  	{
						  		return $row;
						  	}
						  	}

    }

function updateevent()
	{
		$eid=$this->session->userdata('eventId');
		$conferences = $_POST['conferences'];
		$description = $_POST['description'];
		$date = $_POST['date'];
		$sede= $_POST['sede'];
         
        $this->db->query("UPDATE events SET conferences='".$conferences."',description='".$description."', date='".$date."',sede='".$sede."' WHERE event_id='".$eid."';");	
	}

function conference()
	{
    	$this->load->library('session');
			  $id=$this->session->userdata('eventId');
			  echo $id;
            $res = $this->db->query("select * from conference where event_id='".$id."' ;");
            foreach($res->result() as $row)
            {
						  	if($row->event_id==$id)
						  	{
						  		return $row;
						  	}
						  	}

    }

function updateconference()
	{
		$eid=$this->session->userdata('eventId');
		$conferences = $_POST['conferences'];
		$description = $_POST['description'];
		$date = $_POST['date'];
		$sede= $_POST['sede'];
         
        $this->db->query("UPDATE conference SET conferences='".$conferences."',description='".$description."', date='".$date."',sede='".$sede."' WHERE event_id='".$eid."';");	
	}


}
?>