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
			include_once('manage_user.php');
			break;
			
			
			case '/adminlogout':
			
			break;
			
		}
	}
	
}
$obj=new control;

?>