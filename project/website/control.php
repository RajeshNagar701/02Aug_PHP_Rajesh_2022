<?php
class control
{
	
	function __construct()
	{
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
			include_once('contact.php');
			break;
			
			case '/logout':
			
			break;
			
		}
	}
	
}
$obj=new control;

?>