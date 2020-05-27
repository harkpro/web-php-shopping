<?php

class feedback extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('feedback');
		}

	function list_feedback($page=true)
	{

		$sql="SELECT * FROM $this->table 
		WHERE status='1' ";
		return $this->QueryAll($sql);
	}
	function all()
{
	$sql="SELECT * FROM $this->table";
	return $this->QueryCount($sql);
}
		function list_feedback_trash($page=true)
	{

		$sql="SELECT * FROM $this->table 
		WHERE status='0' ";
		return $this->QueryAll($sql);
	}
	function feedback_update($data,$id)
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
function feedback_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$id'";
	return $this->QueryOne($sql);
}
function feedback_delete($id)
{
	$sql="DELETE  FROM $this->table 
	WHERE id='$id'";
	$this->QueryNoResult($sql);
}

	
}