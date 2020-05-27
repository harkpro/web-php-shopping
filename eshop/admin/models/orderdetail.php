<?php

class orderdetail extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('ordersdetail');
		}
	function orderdetail($id){

		$sql="SELECT * FROM $this->table 
	WHERE orderid='$id'";
	return $this->QueryAll($sql);
	}


	function orderdetail_insert($mydata)
{
	$strf='';
	$strv='';
		foreach ($mydata as $k => $v)
		{
			$strf.=$k.', ';
			$strv.="'".$v."',";
		}
		$strf=rtrim(rtrim($strf),',');
		$strv=rtrim(rtrim($strv),',');
	$sql="INSERT INTO $this->table ($strf) VALUES ($strv)";
	$this->QueryNoResult($sql);
}

//close class
//
}
?>