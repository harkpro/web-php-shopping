<?php

class topic extends Database
{
	
	function __construct()
	{
		parent::__construct();
	$this->table = $this->TableName('topic');
}
	
function topic_list($page=true)
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
function all()
{
	$sql="SELECT * FROM $this->table";
	return $this->QueryCount($sql);
}
	function topic_name($id)
	{
		$sql="SELECT *FROM $this->table WHERE id='$id'";
		$row=$this->QueryOne($sql);
		if($row!=null)
		{
			return $row['name'];
		}
		return "Untopic";

	}
function topic_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$id'";
	return $this->QueryOne($sql);
}
function list_topic11($ma)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$ma'";
	return $this->QueryAll($sql);
}

function topic_update($data,$id)
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
function topic_delete($id)
{
	$sql="DELETE  FROM $this->table 
	WHERE id='$id'";
	$this->QueryNoResult($sql);
}

function topic_insert($data)
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
redirect('index.php?option=topic');
}


function topic_exits_slug($slug,$id=null)
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