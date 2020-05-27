<?php 
$category=loadModel('category');
$listcat1=$category->category_parentid(0);
$html_listcategory='';
foreach($listcat1 as $c1)
{
	$listcat2=$category->category_parentid($c1['id']);
	if(count($listcat2))
	{
		$html_listcategory.='<li class="list-group-item"><a >'.$c1['name'].'</a>';
			$html_listcategory.='<ul>';
			foreach($listcat2 as $c2)
			{
				$listcat3=$category->category_parentid($c2['id']);
				if(count($listcat3))
				{
					$html_listcategory.='<li><a >'.$c2['name'].'</a>';
					$html_listcategory.='<ul>';
					foreach($listcat3 as $c3)
					{
						$html_listcategory.='<li><a ">'.$c3['name'].'</a></li>';
					}
					$html_listcategory.='</ul>';
					$html_listcategory.='</li>';
				}
				else
				{
					$html_listcategory.='<li><a ">'.'<li>'.$c2['name'].'</a></li>';
				}
			}
		
			$html_listcategory.='</ul>';
		$html_listcategory.='</li>';
	}
	else
	{
		$html_listcategory.='<li class="list-group-item"><a >'.$c1['name'].'</a>';
	}

}
?>
<ul class="list-group ">
	<?php echo $html_listcategory; ?>
</ul>
	<style type="text/css">
		
ul li a{
	text-decoration: none;
	color: black;
}
ul li{

	list-style: none;
}
a:hover{
    color: red;
    text-decoration: none;
}


	</style>	




	