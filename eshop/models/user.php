<?php 
class User extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('user');
	}
function user_insert($mydata)
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


function user_exits_username($username,$id=0)
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
function check_user()
	{
		$sql="SELECT * FROM latnt_user WHERE status='1' AND access='0'";
		return $this->QueryAll($sql);
	}

function list_user_cuss($id)
	{
		$sql="SELECT * FROM latnt_user WHERE status='1' AND access='0' AND user_id = '$id'";
		return $this->QueryOne($sql);
	}
//close class
}

