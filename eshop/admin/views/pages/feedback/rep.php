<?php 
$id=$_REQUEST['id'];
$feedback= loadModel('feedback');
$row=$feedback->feedback_rowid($id);
?>
<?php require_once 'views/header.php';
    ?>
<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0 m-0 bg-none">
					<li class="breadcrumb-item">
						<a href="" title="">Dashboard</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" title="">Advertising topics</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a href="" title="">Update topics</a>
					</li>

				</ol>
			</nav>
    <section class=" clearfix maincontent py-2">
	<form name="form1" method="post"  enctype="multipart/form-data" >
		<div class="container" >
			<div class="card" >
			<div class="card-header" >
			<div class="row" >
			<div class="col-md-5" >
			
		</div>
		<div class="col-md-6 text-right" >	
		
		<a class="btn btn-sm btn-danger" href="index.php" >Exit</a>
		</div>
		</div>
		</div>
		<div class="card-block p-3">
			<div class="row">
				<div class="col-md-9">
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<fieldset class="form-group" >
						<table>Name </table>
					<input name="name" value="<?php echo $row['fullname']  ?>" class="form-control"  required></<input type="text">
						<table>Title </table>
					<input name="name" class="form-control"  required></<input type="text">		<table>Detail </table>
					<input name="name" class="form-control"  required></<input type="text">	
			</div>
			</div>	
				<button class="btn btn-sm btn-danger" name=""  type="submit">
		 Confirm Change 	</button> 		
		</div>	
		</div>
		</div>
	</form>
</section>