<?php  
 class Database extends config
 {
 	function __construct()
 	{
 		$this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
 		mysqli_set_charset($this->conn,"utf8");
 	}

 	function TableName($name) //product
 	{
 		return $this->dbprefix.$name;
 	}
 	function QueryOne($sql)
 	{
 		$result=mysqli_query($this->conn,$sql);
 		$row=mysqli_fetch_assoc($result);
 		return $row;
 	}
 	function QueryAll($sql)
 	{
 		$result=mysqli_query($this->conn, $sql);
 		$a=array();
 		while($row=mysqli_fetch_assoc($result))
 		{
 			$a[]=$row;
 		}
 		return $a;
 	}

 	function QueryNoResult($sql,$isert = false)
 	{
 		mysqli_query($this->conn,$sql);
 		if ($isert) {
 			return mysqli_insert_id($this->conn);
 		}
 	}

 	function getLastId() 
 	{
        return $this->conn->lastInsertId();
    }

 	function QueryCount($sql)
 	{
 		$result = mysqli_query($this->conn,$sql);
 		$count=mysqli_num_rows($result);
 		return $count;
 	}
 }

  ?>




