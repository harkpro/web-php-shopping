<?php
class Category extends Database 
{
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('Category');
	}
function category_parentid($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE status='1' AND parentid='$parentid' ORDER BY orders ASC";
		return $this->QueryAll($sql);
	}
	function all()
{
	$sql="SELECT * FROM $this->table";
	return $this->QueryCount($sql);
}
	function category_name($id)
	{
		$sql="SELECT *FROM $this->table WHERE id='$id'";
		$row=$this->QueryOne($sql);
		if($row!==null)
		{
			return $row['name'];
		}
		return "Uncategory";
	}
	    function category_list_Order_PID($pid) {
        $sql = "SELECT * FROM $this->table WHERE parentid = '$pid' AND status = '1'";
        return $this->QueryAll($sql);
    }

	function category_list($page='index')
		{
		if($page=='index')
			{
				$sql="SELECT * FROM $this->table 
			WHERE status!='0' order by status desc
			";
			}
			else 
			{
				$sql="SELECT * FROM $this->table 
			WHERE status='0' order by status desc
			";
			}
			return $this->QueryAll($sql);
		}
		function category_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$id'";
	return $this->QueryOne($sql);
}

function category_update($data,$id)
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
function category_delete($id)
{
	$sql="DELETE  FROM $this->table 
	WHERE id='$id'";
	$this->QueryNoResult($sql);
}
function category_exits_slug($slug,$id=null)
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
function category_insert($data)
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
redirect('index.php?option=category');
}
	//close class
}
 ?>
