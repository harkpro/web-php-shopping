<?php

class order extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('orders');
		}

	function list_order($page)
	{
	echo "";
	if($page==true)
	{

		$sql="SELECT * FROM latnt_orders
	WHERE status='0' order by created_date desc";
	}
	else 
	{	

		$sql="SELECT * FROM latnt_orders
	WHERE status!='0' order by created_date desc";
	}
	return $this->QueryAll($sql);
	
}
function all()
{
	$sql="SELECT * FROM latnt_orders";
	return $this->QueryCount($sql);
}
function ist_order($page=true)
{
if($page==true)
	{
		$sql="SELECT * FROM latnt_orders
	WHERE status!='0' order by created_date desc
	";
	}
	else 
	{
		$sql="SELECT * FROM latnt_orders
	WHERE status='0' order by created_date desc
	";
	}
	return $this->QueryAll($sql);
}

function order_update($data,$id)
{
		$strset='';
		foreach ($data as $f => $v)
		{
			$strset.=$f."='$v', ";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE latnt_orders SET $strset WHERE id='$id'";
		$this->QueryNoResult($sql);
}
function order_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$id'";
	return $this->QueryOne($sql);
}
	//close class
}
function order_insert1($mydata)
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


function order_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$id'";
	return $this->QueryOne($sql);
}

?>