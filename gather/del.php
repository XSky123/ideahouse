<?php 
	include_once("../conn.php"); 
	$id=$_GET['id'];
	$isError=0;
	if($id<=0){
		$isError=1;
	}
	$sql="DELETE FROM gather_content WHERE id=".$id;
	$result = mysql_query($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="XSky123" >
	<title>删除 - 集·锦 | 拼接那些美丽的碎片</title>
	<link href="  ../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery-1.11.2.min.js"></script><!-- JQuery -->
	<script src="dashboard.js"></script>
	<style type="text/css">
	.jumbotron{
		background: url(../image/gather.jpg) no-repeat  0;
		background-size:cover;
	}
	.jumbotron h1,p{
		color:#000;
	}
	</style>
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php include_once("navibar.php") ?>
<?php if(!$isError){?>
	<div class="container">
		<div class="alert alert-success" id="success" role="alert">
			<strong>温馨提示:</strong>提交成功!
		</div>
	<p>如果3秒后没有跳转,请点击<a href="dashboard.php" class="btn btn-primary btn-lg" role="button">返回&raquo;</a></p>
	</div>
<?php }else{ ?>
	<div class="container">
			<div class="jumbotron">
				<h1>出错了！</h1>
				<p><a class="btn btn-primary btn-lg" href="index.php" role="button">返回首页</a></p>
			</div>
	</div>
<?php } ?>
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