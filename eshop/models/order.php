<?php

class order extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('orders');
		}
function order_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$id'";
	return $this->QueryOne($sql);
}
function order_insert($mydata)
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
	return $this->QueryNoResult($sql,true);
}
function maxID()
{
	$sql="SELECT  * FROM $this->table WHERE status='2' ORDER BY id DESC ";
		return $this->QueryOne($sql);
}

//close clas
}
?>