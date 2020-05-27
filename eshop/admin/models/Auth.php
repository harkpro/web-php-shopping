<?php

class Auth extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('user');
	}

function auth_check($username)
{
	if(filter_var($username, FILTER_VALIDATE_EMAIL))
	{
		$sql="SELECT * FROM $this->table WHERE status='1' AND access!='0' 
	AND  email='$username'";
	}
	else
	{
	$sql="SELECT * FROM $this->table WHERE status='1' AND access!='0' 
	AND  username='$username'";
	}


	if($this->QueryCount($sql))
	{
		return $this->QueryOne($sql);
	}
	return false;
}

function auth_guard($username,$password)
{
		if(filter_var($username, FILTER_VALIDATE_EMAIL))
			{
				$sql="SELECT * FROM $this->table WHERE  email='$username' AND password='$password' AND status='1' AND access='1'";
			}
			else{
					$sql="SELECT * FROM $this->table WHERE  username='$username' AND password='$password' AND status='1' AND access='1'";
			}

	if($this->QueryCount($sql))
	{
		return $this->QueryOne($sql);
	}
	return false;
}

//close class
}
?>
