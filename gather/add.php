<?php 
	include_once("../conn.php"); 
	$site=$_POST['site'];
	$addr=$_POST['addr'];
	$type1=$_POST['type1'];
	$type2=$_POST['type2'];
	$add_time=date('Y-m-d H:i:s');
	$is_recommend=$_POST['is_recommend'];

	$sql="INSERT INTO gather_content (type1,type2,site,addr,is_recommend,add_time) VALUES ('$type1','$type2','$site','$addr','$is_recommend','$add_time')";
	if($is_recommend){
		$recommendation=$_POST['recommendation'];
		$sql="INSERT INTO gather_content (type1,type2,site,addr,is_recommend,add_time,recommendation) VALUES ('$type1','$type2','$site','$addr','$is_recommend','$add_time','$recommendation')";
	}
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
	<title>添加 - 集·锦 | 拼接那些美丽的碎片</title>
	<link href="  ../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery-1.11.2.min.js"></script><!-- JQuery -->
	<script type="text/javascript">
    		setTimeout("self.location='dashboard.php'", 3000);
	</script><!-- 自动关闭页面-->
	<style type="text/css">
		#success{display:<?php if(!$result){echo "none";}?>;}
		#failed{display:<?php if($result){echo "none";}?>;}
	</style>
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php include_once("navibar.php") ?>
<div class="container">
	<div class="alert alert-success" id="success" role="alert">
		<strong>温馨提示:</strong>提交成功!
	</div>
	<div class="alert alert-danger" id="failed" role="alert">
		<strong>错误:</strong>很抱歉,提交失败!请重试
	</div>
	<p>如果3秒后没有跳转,请点击<a href="dashboard.php" class="btn btn-primary btn-lg" role="button">返回&raquo;</a></p>
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