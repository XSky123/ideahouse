<?php
	include_once("../conn.php"); 
	session_start();
	$isLogin=0;
	$uID=$_SESSION['u_id'];
	$uName="";
	$uPermission=0;
	if($uID!=""){
		$isLogin=1;
		$sql_getinfo="SELECT * FROM user WHERE user_id='$uID'";
		$result3=mysql_query($sql_getinfo);
		$row=mysql_fetch_array($result3);
		$uName=$row['username'];
		$uPermission=$row['permission'];
	}
	$sql="SELECT * FROM gather_content ORDER BY type2";
	$sql2="SELECT * FROM gather_type2";
	$result = mysql_query($sql);
	$result2 = mysql_query($sql2);
	$data[1]=array();
	$data[2]=array();
	$data[3]=array();
	$data[888]=array();
	$typeName=array();
	while($row=mysql_fetch_array($result)){
		switch ($row['type1']){
			case 1:
				array_push($data[1],$row);
				break;
			case 2:
				array_push($data[2],$row);
				break;
			case 3:
				array_push($data[3],$row);
				break;
			case 888:
				array_push($data[888],$row);
				break;
		}
	}
	while($row=mysql_fetch_array($result2)){
		$typeName[$row['id']]=$row['name'];
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="XSky123" >
	<title>集·锦 | 拼接那些美丽的碎片</title>
	<link href="  ../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery-1.11.2.min.js"></script><!-- JQuery -->
	<!-- <script type="text/javascript"  src="index.js"></script> -->
	<style type="text/css">
	.no-bottom-margin{margin-bottom: 0;}	
	.surprise{margin-bottom: 10px;}
	.jumbotron{
		background: url(../image/gather.jpg) no-repeat  0;
		background-size:cover;
	}
	.jumbotron h1,p{
		color:#000;
	}
	.tab-content a,
	.tab-content a:hover{
		color:inherit;
	}
	</style>
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php include_once("navibar.php") ?>
<div class="container">
	<div class="jumbotron">
		<h1>集·锦</h1>
		<p>拼接那些美丽的碎片</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<h2>优站精选 <small>精巧·精致·精彩</small></h2>
	</div>
	<div class="row">
		<div class="col-md-8">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#recommend" role="tab" data-toggle="tab">精选</a></li>
				<li role="presentation"><a href="#dev" role="tab" data-toggle="tab">开发工具</a></li>
				<li role="presentation"><a href="#res" role="tab" data-toggle="tab">资源搜索</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="recommend">
					<table class="table  table-hover  table-stripedr table-condensed no-bottom-margin" >
					<?php foreach ($data[1] as $key => $row) {
						if ($row['is_recommend']){
							include("showlink.php");
						}
					}
					 ?>
					</table>
					<table class="table table-striped  table-hover">
						<?php 
						$currentType=0;
						foreach ($data[1] as $key => $row) {
							include("showlink2.php");
						}
						?>
					</table>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="dev">
					<table class="table  table-hover  table-stripedr table-condensed no-bottom-margin" >
					<?php foreach ($data[2] as $key => $row) {
						if ($row['is_recommend']){
							include("showlink.php");
						}
					}
					 ?>
					</table>
					<table class="table table-striped  table-hover">
						<?php 
						$currentType=0;
						foreach ($data[2] as $key => $row) {
							include("showlink2.php");
						}
						?>
					</table>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="res">
					<table class="table  table-hover  table-stripedr table-condensed no-bottom-margin" >
					<?php foreach ($data[3] as $key => $row) {
						if ($row['is_recommend']){
							include("showlink.php");
						}
					}
					 ?>
					</table>
					<table class="table table-striped  table-hover">
						<?php 
						$currentType=0;
						foreach ($data[3] as $key => $row) {
							if (!$row['is_recommend']){
								include("showlink2.php");
							}
						}
						?>
					</table>
<!-- 					<div class="text-center"><button type="button" class="btn btn-success surprise" id="surprise">Surprise!</button></div>
					<div class="text-center"><button type="button" class="btn btn-warning surprise" id="hidethat">Hide That.</button></div>
					<div class="alert alert-warning" role="alert"><strong>Sorry</strong> 本部分尚未完工，敬请期待！</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
						<h3 class="panel-title">邀请码</h3>
						</div>
						<div class="panel-body form-horizontal">
							<div class="alert alert-info" role="alert"><strong>提示：</strong>以下内容仅对部分用户开放！</div>
							<div class="form-group">
								<label for="invitationcode" class="col-sm-2 control-label">邀请码</label>
								<div class="col-sm-5">
									<input type="email" class="form-control" id="invitationcode" placeholder="邀请码">
								</div>
							</div>
						</div>
					</div>
					<div class="alert alert-danger" role="alert" id="hxwarning"><strong>Warning!</strong>
						<span>
							This site contains sexually explicit adult materials intended for individuals 18 years of age or older. To those whom may concern, block this website with parental controls.
							以下可能出现you know的内容.如果你还很纯洁,请速速远离!
						</span>
						<a href="#" class="alert-link">Agree</a>
						<a href="#" class="alert-link">Disagree</a>
					</div> -->
					<?php if($isLogin){?>
					<table class="table table-striped  table-hover no-bottom-margin" id="youknowthat">
						<?php 
						$currentType=0;
						foreach ($data[888] as $key => $row) {
							include("showlink2.php");
						}
						?>
					</table>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">箴言</div>
				<div class="panel-body">
					<h4>也许我们喜欢的不是幸福，而是追求幸福的过程</h4>
					<p class="text-right">——白岩松</p>
				</div>
			</div>
		</div>
	</div>
	<?php include_once("footer.php") ?>

</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>