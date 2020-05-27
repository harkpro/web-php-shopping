<?php

class user extends Database
{
	
	function __construct()
	{
		parent::__construct();
	$this->table = $this->TableName('user');
}
	
function list_user($page=true)
{
if($page==true)
	{
		$sql="SELECT * FROM $this->table 
	WHERE status!='0' AND access='0' order by updated_at desc
	";
	}
	else 
	{
		$sql="SELECT * FROM $this->table 
	WHERE status='0' AND access='0' order by updated_at desc
	";
	}
	return $this->QueryAll($sql);
}
function list_user_admin($page=true)
{

		$sql="SELECT * FROM $this->table 
	WHERE status!='0' AND access!='0' order by updated_at desc
	";
	return $this->QueryAll($sql);
}
function user_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE user_id='$id'";
	return $this->QueryOne($sql);
}
function all()
{
	$sql="SELECT * FROM $this->table";
	return $this->QueryCount($sql);
}
function list_user11($ma)
{
	$sql="SELECT * FROM $this->table 
	WHERE user_id='$ma'";
	return $this->QueryAll($sql);
}

function user_update($data,$id)
{

		$strset='';
		foreach ($data as $f => $v)
		{
			$strset.=$f."='$v', ";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE user_id='$id'";
			$this->QueryNoResult($sql);
}
function user_delete($id)
{
	$sql="DELETE  FROM $this->table 
	WHERE user_id='$id'";
	$this->QueryNoResult($sql);
}

function user_insert($data)
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
redirect('index.php?option=user');
}

function user_exits_username1($username,$id=0)
{
	if($id==0)
		{
			$sql="SELECT * FROM $this->table 
			WHERE 	username='$username' AND access='0'";
		}
		else
		{
		$sql="SELECT * FROM $this->table 
			WHERE username='$username' AND user_id!='$id' AND access='0'";
		}
	
	if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
}
function user_exits_slug($username,$id=null)
{
	if($id==null)
		{
			$sql="SELECT * FROM $this->table 
			WHERE username='$username'";
		}
		else
		{
			$sql="SELECT * FROM $this->table 
			WHERE username='$username' and user_id!='$id'";
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