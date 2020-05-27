<?php

class Auth extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('user');
	}

function user_auth_check($username)
{
	$sql="SELECT * FROM $this->table 
	WHERE status='1' 
	AND access='0' 
	AND (username='$username' or email='$username')";
	if($this->QueryCount($sql))
	{
		return $this->QueryOne($sql);
	}
	return false;
}

function user_auth_guard($username,$password)
{
$sql="SELECT * FROM $this->table 
	WHERE (username='$username' or email='$username')
	and password='$password' and status='1' and access='0'";
	if($this->QueryCount($sql))
	{
		return $this->QueryOne($sql);
	}
	return false;
}

//close class
}
?>
