<?php

include_once('../website/model.php');  // step 1  load mopdel 

class control extends model // step 2 extends model
{
	
	function __construct()
	{
		session_start();
		model::__construct(); // step 3 call model __construct();
		
		$path=$_SERVER['PATH_INFO'];// http://localhost/students/02Aug_PHP_Rajesh/project/website/control.php
		
		switch($path)
		{
		
			case '/admin':
			if(isset($_REQUEST['admin_login']))
			{
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass);
				
				$where=array("unm"=>$unm,"pass"=>$enc_pass);
				
				$run=$this->select_where('admin',$where);
				$chk=$run->num_rows; // all cond true or false by rows
				
				if($chk==1) // 1 means true
				{
					$fetch=$run->fetch_object(); //
					$aid=$fetch->aid;						
					$name=$fetch->unm;	
					
					$_SESSION['aid']=$aid;
					$_SESSION['admin']=$name;
					
					echo "<script> alert('Login Success'); 
					window.location='dashboard';
					</script>";	
				}
				else
				{
					echo "<script> alert('Login Failed'); 
					</script>";
				}
			}
				
			include_once('index.php');
			break;
			
			case '/admin_logout':
			unset($_SESSION['aid']);
			unset($_SESSION['admin']);
			echo "<script> alert('Logout Success'); 
			window.location='admin';
			</script>";
					
			break;
			
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_categories':
			include_once('add_categories.php');
			break;
			
			case '/manage_categories':
			include_once('manage_categories.php');
			break;
			
			case '/add_employee':
			include_once('add_employee.php');
			break;
			
			case '/manage_employee':
			include_once('manage_employee.php');
			break;
			
			case '/manage_user':
			$fetch=$this->select('customer');
			include_once('manage_user.php');
			break;
			
			
			case '/delete':
			
			if(isset($_REQUEST['deluid']))
			{
				$uid=$_REQUEST['deluid'];
				$where=array("uid"=>$uid);
				
				// if img delete
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$file=$fetch->file;
				
				
				$run=$this->delete_where('customer',$where);
				if($run)
				{
					unlink('../website/img/upload/'.$file);
					echo "<script> alert('Delete Success'); 
					window.location='manage_user';
					</script>";
				}					
			}
			
			if(isset($_REQUEST['deleid']))
			{
				$eid=$_REQUEST['delueid'];
				$where=array("eid"=>$eid);
				$run=$this->delete_where('employee',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_employee';
					</script>";
				}	
			}
			break;
			
			
			
			case '/adminlogout':
			
			break;
			
		}
	}
	
}
$obj=new control;

?>