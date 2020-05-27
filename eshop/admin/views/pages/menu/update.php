<?php 
$id=$_REQUEST['id'];
$menu= loadModel('menu');
$row=$menu->menu_rowid($id);
$list_cat = $menu->menu_list('index');
$str_catid='';
foreach ($list_cat as $cat)
{	
	if($cat['id']==$row['parentid'])
	{
		$str_catid.='<option selected value="'.$cat['id'].'">'.$cat['name'].'</option>';
	}

	else 
	{
		$str_catid.='<option value="'.$cat['id'].'">Con Của ['.$cat['name'].']</option>';
	}
}
?>

<?php require_once 'views/header.php'; ?>
<section class=" clearfix maincontent py-2">
	<form name="form1" method="post" action="index.php?option=menu&cat=insert" enctype="multipart/form-data" >
		<div class="container" >
			<div class="card" >
			<div class="card-header" >
			<div class="row" >
			<div class="col-md-5" >
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0 m-0 bg-none">
					<li class="breadcrumb-item">
						<a href="" title="">Dashboard</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" title="">Advertising menus</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a +href="" title="">Update menus</a>
					</li>

				</ol>
			</nav>
		</div>
		<div class="col-md-6 text-right" >	
		<button class="btn btn-sm btn-success" name="CAPNHAT"  type="submit">
		 Save [Update]	</button> 
		<a class="btn btn-sm btn-danger" href="index.php" >Exit</a>
		</div>
		</div>
		</div>
		<div class="card-block p-3">
			<div class="row">
				<div class="col-md-8">
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
					<fieldset class="form-group" >
						<table>Name Menu</table>
						<input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Tên Sản Phẩm" required>
					</fieldset>
					<fieldset class="form-group" >
						<table>Menu link</table>
						<textarea name="link" class="form-control" rows="2" ><?php echo $row['link'] ?></textarea>
					</fieldset>
					</div>
					<div class="col-md-3 ">
					<fieldset class="form-group" >
						<table>Category Type</table>
						<select name="parentid"  class="form-control" required>
						<option  value="0">[ Cấp Cha ]</option>					
						<?php echo $str_catid ?>
						</select>
					</fieldset>
				</div>
			
			</div>			
		</div>	
		</div>
		</div>
	</form>
</section>
<?php require_once 'views/footer.php';  ?>