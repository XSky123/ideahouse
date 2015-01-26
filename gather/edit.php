<?php 
	include_once("../conn.php"); 
	$id=$_GET['id'];
	$sql="SELECT * FROM gather_content WHERE id=".$id;
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="XSky123" >
	<title>编辑 - 集·锦 | 拼接那些美丽的碎片</title>
	<link href="  ../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery-1.11.2.min.js"></script><!-- JQuery -->
	<script src="dashboard.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("#site").val(<?php  echo "'".$row['site']."'";?>);
			$("#addr").val(<?php  echo "'".$row['addr']."'";?>);
			$("input[name='is_recommend']").get(<?php  echo 1-$row['is_recommend'];?>).checked=true;
			checkRadio();
			$("#recommendation").val(<?php  echo "'".$row['recommendation']."'";?>);
			$("#type1").val(<?php  echo "'".$row['type1']."'";?>);
			$("#type2").val(<?php  echo "'".$row['type2']."'";?>);
		}); 
	</script>
	<style type="text/css">

	</style>
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php include_once("navibar.php") ?>
<div class="container">
	<form class="form-horizontal" role="form" method="post" action="add.php">
	<div class="form-group">
		<label for="site" class="col-sm-1 control-label">网站名称</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="site" name="site" placeholder="晓天的灵感屋">
		</div>
	</div>
	<div class="form-group">
		<label for="addr" class="col-sm-1 control-label">网址</label>
		<div class="col-sm-3">
			<input type="text" class="form-control" id="addr"  name="addr"placeholder="http://xsky123.com">
		</div>
	</div>
	<div class="form-group">
		<label for="is_recommend1" class="col-sm-1 control-label">推荐</label>
		<div class="radio col-sm-4">
			<label>
				<input type="radio" name="is_recommend" id="is_recommend1" value=1>
				是
			</label>
			<label>
				<input type="radio" name="is_recommend" id="is_recommend2" value=0 checked>
				否
			</label>
		</div>
	</div>
	<div class="form-group" id="tuijianyu">
		<label for="recommendation" class="col-sm-1 control-label">推荐语</label>
		<div class="col-sm-3">
			<textarea class="form-control"  id="recommendation" name="recommendation" placeholder="捕捉刹那间的灵感,分享生活的故事" rows="3"></textarea>
		</div>
	</div>
	<!-- <div class="form-group">
		<label for="recommendtime" class="col-sm-1 control-label">推荐期限</label>
		<div class="col-sm-1">
			<input type="text" class="form-control" id="recommendtime"  name="recommendtime" placeholder="天数">
		</div>
	</div> -->
	<div class="form-group">
		<label for="type1" class="col-sm-1 control-label">类别</label>
		<div class="col-sm-2">
			<select class="form-control" id="type1" name="type1">
				<option value=1>精选</option>
				<option value=2>开发工具</option>
				<option value=3>资源</option>
				<option value=-1>☆资源 - 福利</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="type2" class="col-sm-1 control-label">子类</label>
		<div class="col-sm-2">
			<select class="form-control" id="type2" name="type2">
			</select>
		</div>
		<div class="col-sm-1">
			<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#add_type2">添加</button>

		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">确认</button>
		</div>
	</div>
	</form>
</div>
	<footer>
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2014 XSky123 &middot; <a href="../index.php">晓天的灵感屋</a></p>
	</footer>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>