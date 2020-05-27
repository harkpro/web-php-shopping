<?php 
$id=$_REQUEST['id'];
$feedback= loadModel('feedback');
$row=$feedback->feedback_rowid($id);
?>
<?php require_once 'views/header.php';?>

<div class="container pt-5">
	<div class="row ">
		<div class="col  col-md-12 border bg-light"> <p class="title_buy">feedback Detail</p> </div>	

	</div>
	<div class="row">
		<div class="   border   col col-md-12 pt-5 "> 
			<table >
			<tbody>
				<tr class="border-top">
					<td  class="pb-3 " style="font-weight: bold;">ID</td>
					<td class="pb-3 pl-5">0<?php echo $row['id']; ?></td>
				</tr>
				<tr class="border-top">
					<td class="pb-3" style="font-weight: bold;">Full name:</td>
					<td class="pb-3 pl-5"><h6><?php echo $row['fullname']  ?></td>
				</tr>
				<tr class="border-top">
					<td class="pb-3" style=" font-weight: bold;">Phone Number:</td>
					<td class="pb-3 pl-5"><?php echo $row['phone']  ?></td>
				</tr>
				<tr class="border-top" >
					<td class="pb-3" style=" font-weight: bold;">email: </td>
					<td class="pb-3 pl-5"><?php echo $row['email']  ?></td>
				</tr>
				<tr class="border-top" >
					<td class="pb-3" style=" font-weight: bold;">Title: </td>
					<td class="pb-3 pl-5" style="font-weight: bold;"><?php echo $row['title']  ?></td>
				</tr>
				</tr>
				<tr class="border-top" >
					<td class="pb-3" style=" font-weight: bold;">Detail: </td>
					<td class="pb-3 pl-5"><?php echo $row['detail']  ?></td>
				</tr>
			</tbody></table>
		</div>
	</div>
</div>

<style type="text/css">
	
p.title_buy {
    font-size: 18px;
    font-weight: bold;
    padding-top: 15px;

    color: black;
    
}
.table1 {
	width:100%;
	margin-bottom:18px;
}
.table1 th, .table1 td {
	padding:8px;
	line-height:18px;
	text-align:left;
	vertical-align:top;
	bfeedback-top:1px solid #ddd;
	text-align: center;
}

a{
	text-decoration: none;
}
ul li{
	list-style: none;
}
</style>