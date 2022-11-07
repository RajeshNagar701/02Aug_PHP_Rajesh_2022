<?php

include_once('model.php');  // step 1  load mopdel 

class control extends model // step 2 extends model
{
	
	function __construct()
	{
		session_start();
		model::__construct(); // step 3 call model __construct();
		
		$path=$_SERVER['PATH_INFO'];// http://localhost/students/02Aug_PHP_Rajesh/project/website/control.php
		
		switch($path)
		{
			case '/':
			include_once('index.php');
			break;
			
			case '/index':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/service':
			
			include_once('service.php');
			break;
			
			case '/car':
			include_once('car.php');
			break;
			
			case '/detail':
			include_once('detail.php');
			break;
			
			case '/booking':
			include_once('booking.php');
			break;
			
			case '/profile':
			$where=array('uid'=>$_SESSION['uid']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;
			
			
			case '/editprofile':
			if(isset($_REQUEST['btnuid']))
			{
				$uid=$_REQUEST['btnuid'];
				$where=array('uid'=>$uid);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$unm=$_REQUEST['unm'];
					$gen=$_REQUEST['gen'];
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(",",$lag_arr);
					
					
					
					$file=$_FILES['file']['name'];  // get only input type="file"
					$path='img/upload/'.$file;   // PATH
					$tmp_file=$_FILES['file']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
					
					if($_FILES['file']['size']>0)
					{
						$data=array("name"=>$name,"email"=>$email,"unm"=>$unm,"gen"=>$gen,"lag"=>$lag,"file"=>$file);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							unlink('img/upload/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					else
					{
						$data=array("name"=>$name,"email"=>$email,"unm"=>$unm,"gen"=>$gen,"lag"=>$lag);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					
				}
				
			}
			include_once('editprofile.php');
			break;
		
			
			
			case '/testimonial':
			include_once('testimonial.php');
			break;
			
			case '/contact':
			
			include_once('contact.php');
			break;
			
			
			case '/register':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass);
				$gen=$_REQUEST['gen'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);
				
				echo $file=$_FILES['file']['name'];  // get only input type="file"
				$path='img/upload/'.$file;   // PATH
				$tmp_file=$_FILES['file']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
				
				$data=array("name"=>$name,"email"=>$email,"unm"=>$unm,"pass"=>$enc_pass,"gen"=>$gen,"lag"=>$lag,"file"=>$file);
				
				$res=$this->insert('customer',$data);
				if($res)
				{
					echo "<script> alert('register Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}
			include_once('register.php');
			break;
			
			
			case '/login':
			if(isset($_REQUEST['login']))
			{
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass);
				
				$where=array("unm"=>$unm,"pass"=>$enc_pass,"status"=>"Unblock");
				
				$run=$this->select_where('customer',$where);
				$chk=$run->num_rows; // all cond true or false by rows
				
				if($chk==1) // 1 means true
				{
					
					$fetch=$run->fetch_object(); //
					$uid=$fetch->uid;						
					$name=$fetch->name;	
					
					$_SESSION['uid']=$uid;
					$_SESSION['name']=$name;
					$_SESSION['user']=$unm;
					
					echo "<script> alert('Login Success'); 
					window.location='index';
					</script>";	
				}
				else
				{
					echo "<script> alert('Login Failed'); 
					</script>";
				}
				
			}
			include_once('login.php');
			break;
			
			
			
			case '/logout':
			unset($_SESSION['name']);
			unset($_SESSION['uid']);
			unset($_SESSION['user']);
			echo "<script> alert('Logout Success'); 
			window.location='index';
			</script>";
					
			break;
			
		}
	}
	
}
$obj=new control;

?>