<?php
class product extends Database
{
	function __construct()
	{
		parent::__construct();//chay cua database
	}
	function product_home_lastnew($limit=12)
	{
		$sql="SELECT * FROM latnt_product WHERE status='1' order by created_at DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function product_list($limit=20)
	{
		$sql="SELECT * FROM latnt_product WHERE status='1' ORDER BY RAND() DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
	function product_rowslug($slug)
	{
		$sql="SELECT * FROM latnt_product WHERE status='1' AND slug='$slug'";
		return $this->QueryOne($sql);
	}

	
	function product_rowid($id)
	{
		$sql="SELECT * FROM latnt_product WHERE status='1' AND id='$id'";
		return $this->QueryOne($sql);
	}
function list_product11($idd)
{
	$sql="SELECT * FROM latnt_product 
	WHERE id='$idd'";
	return $this->QueryAll($sql);
}

	function product_orther($list_catid,$id,$limit)
	{
		$strin=implode(',',$list_catid);
		$sql="SELECT * FROM latnt_product WHERE status='1' AND catid IN($strin) AND id!='$id' ORDER BY created_at DESC LIMIT $limit";
		return $this->QueryAll($sql);
	}
function Product_all($first,$limit)
	{
			
		$sql="SELECT * FROM latnt_product WHERE status='1'  ORDER BY created_at DESC LIMIT $first,$limit";
		return $this->QueryAll($sql);
	}
	function product_all_count()
	{
	
		$sql="SELECT * FROM latnt_product WHERE status='1' ";
		return $this->QueryCount($sql);
	}


	function Product_all_catid($list_catid,$first,$limit)
	{
		$strin=implode(',',$list_catid);
		$sql="SELECT * FROM latnt_product WHERE status='1' AND catid IN($strin)  ORDER BY created_at DESC LIMIT $first,$limit";
		return $this->QueryAll($sql);
	}
	function product_all_count_catid($list_catid)
	{
		$strin=implode(',',$list_catid);
		$sql="SELECT * FROM latnt_product WHERE status='1' AND catid IN($strin) ";
		return $this->QueryCount($sql);
	}

	function product_search($keyword)
	{

		$sql="SELECT * FROM latnt_product WHERE status='1' AND name LIKE '%$keyword%'  ORDER BY created_at DESC ";
		return $this->QueryAll($sql);

	}

		//close classs
}


  ?>