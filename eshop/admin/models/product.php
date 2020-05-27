<?php

class product extends Database
{
	
	function __construct()
	{
		parent::__construct();
	$this->table = $this->TableName('product');
}
	
function product_list($page=true)
{
if($page==true)
	{
		$sql="SELECT * FROM $this->table 
	WHERE status!='0' order by created_at desc
	";
	}
	else 
	{
		$sql="SELECT * FROM $this->table 
	WHERE status='0' order by created_at desc
	";
	}
	return $this->QueryAll($sql);
}

function product_list1()
{

		$sql="SELECT * FROM $this->table 
	WHERE status!='0' order by number ASC
	";
	return $this->QueryAll($sql);
}
function all()
{
	$sql="SELECT * FROM latnt_product";
	return $this->QueryCount($sql);
}
function product_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$id'";
	return $this->QueryOne($sql);
}
function list_product11($ma)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$ma'";
	return $this->QueryAll($sql);
}

function product_update($data,$id)
{

		$strset='';
		foreach ($data as $f => $v)
		{
			$strset.=$f."='$v', ";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE id='$id'";
			$this->QueryNoResult($sql);
}
function product_delete($id)
{
	$sql="DELETE  FROM $this->table 
	WHERE id='$id'";
	$this->QueryNoResult($sql);
}

function product_insert($data)
{
	$strf='';
	$strv='';
		foreach ($data as $f => $v)
		{
			$strf.=$f.', ';
			$strv.="'".$v."',";
		}
		$strf=rtrim(rtrim($strf),',');
		$strv=rtrim(rtrim($strv),',');
	$sql="INSERT INTO $this->table ($strf) VALUES ($strv)";
	$this->QueryNoResult($sql);
	set_flash('thongbao',' Lưu Thành công');
redirect('index.php?option=product');
}


function product_exits_slug($slug,$id=null)
{
	if($id==null)
		{
			$sql="SELECT * FROM $this->table 
			WHERE slug='$slug'";
		}
		else
		{
			$sql="SELECT * FROM $this->table 
			WHERE slug='$slug' and id!='$id'";
		}
	
	if($this->queryCount($sql)!=0)
		{
			return FALSE;
		}
		return TRUE;
}
//close class
}
	
?>