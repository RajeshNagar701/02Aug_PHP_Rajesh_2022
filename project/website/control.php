<?php

include_once('model.php');  // step 1  load mopdel 

class control extends model // step 2 extends model
{
	
	function __construct()
	{
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
			$customer_arr=$this->select('customer');
			print_r($customer_arr);
			include_once('about.php');
			break;
			
			case '/service':
			
			include_once('service.php');
			break;
			
			case '/car':
			$car_arr=$this->select('car');
			include_once('car.php');
			break;
			
			case '/detail':
			include_once('detail.php');
			break;
			
			case '/booking':
			include_once('booking.php');
			break;
			
			case '/team':
			include_once('team.php');
			break;
			
			case '/testimonial':
			include_once('testimonial.php');
			break;
			
			case '/contact':
			
			include_once('contact.php');
			break;
			
			case '/login':
			include_once('login.php');
			break;
			
			case '/register':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$gen=$_REQUEST['gen'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);
				
				echo $file=$_FILES['file']['name'];  // get only input type="file"
				$path='img/upload/'.$file;   // PATH
				$tmp_file=$_FILES['file']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
				
				$data=array("name"=>$name,"email"=>$email,"unm"=>$unm,"pass"=>$pass,"gen"=>$gen,"lag"=>$lag,"file"=>$file);
				
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
			
			case '/logout':
			
			break;
			
		}
	}
	
}
$obj=new control;

?>