<?php
class slider extends Database
{
	function __construct()
	{
		parent::__construct();
	}
	function slider_list($position='slideshow')
	{
		$sql="SELECT * FROM latnt_slider WHERE  position='$position' AND status='1' ORDER BY orders ASC  ";
		//cau query can them [ORDER BY slider_order ASC]
		//sap xep theo thu tu.[bay gio chua dung toi]
		return $this->QueryAll($sql);
	}
}
	

  ?>