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
	
	function insert($tbl,$data)
	{
		//$data=array("name"=>$name,"email"=>$email,"unm"=>$unm,"pass"=>$pass,"gen"=>$gen,"lag"=>$lag,"file"=>$file)
		
		$array_key=array_keys($data);
		$col=implode(",",$array_key);
		
		$array_values=array_values($data);
		$val=implode("','",$array_values);
		
		$ins="insert into $tbl($col) values ('$val')";
		$run=$this->conn->query($ins);
		return $run;
	}
	
	
}
$obj=new model;

?>