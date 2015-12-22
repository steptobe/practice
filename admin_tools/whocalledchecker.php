<?php 
header("Content-type: text/html; charset=utf-8");
echo '<link rel="stylesheet" href="/admin_tools/css/bootstrap.css" />';
echo '<link rel="stylesheet" href="/admin_tools/css/main.css" />';
echo '<script src="/admin_tools/js/jquery-1.11.2.min.js"></script>';
echo '<script src="/admin_tools/js/bootstrap.js"></script>';
echo '<script src="/admin_tools/js/app.js"></script>';
require('includes/header.php');
$set = false;
?>
<div class="container-fluid">
	<div class="row">
<?php require('includes/aside.php');?>
	    <div class="right_aside col-xs-12"> 
		     <h3>WhoCalled 评论管理</h3>
		     <form action="" method="get" class="form-inline" id="form">
		       <div class="form-group">
		         <label class="control-label" id="id">当前网站: 
		         <?php		         
echo $set ? '' : $_GET['select'];
?>
		         </label>
			     <select class="form-control" name="select" id="select">
			          <option>切换网站</option>
					  <option value="whocalledchecker.com">whocalledchecker.com</option>
					  <option value="whocalledchecker.co.uk">whocalledchecker.co.uk</option>
					</select>
			   </div>	     
				<!-- <div class="btn-group">
				  <button type="button" class="btn  btn-default">Action</button>
				  <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">whocalledchecker.com</a></li>
				    <li><a href="#">whocalledchecker.co.uk</a></li>
				  </ul>
				</div> -->
			</form>
			<div class="">
				<h3>Messages</h3>
			    <table class="table table-bordered table-hover table-striped">
			    <thead>
			        <tr>
			            <th class="text-center">ID</th>
			            <th class="text-center">Name</th>
			            <th class="text-center">Content</th>
			            <th class="text-center">IP</th>
			            <th class="text-center" width="140px">Created</th>
			        </tr>
			    </thead>
			    <tbody>
			        	<?php require('includes/function.php'); ?>
			        	<?php connect_sql("whocalledchecker");show("comments");?>
			       
			    </tbody>
			    </table>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(e) {
    $("#select").change(function()
	{
		$("#form").submit();
        $("#id").val("$_GET['select']");
	})
});
</script>