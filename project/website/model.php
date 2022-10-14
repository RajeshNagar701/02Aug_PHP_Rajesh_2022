<?php
class model
{
	public $conn="";
	function __construct()
	{						//   server     username  passs db_name
		$this->conn=new Mysqli('localhost','root','','pharmacy'); 
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
}
$obj=new model;

?>