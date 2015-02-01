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
	if($isLogin&&$uPermission==3){
		$sql="SELECT * FROM gather_content";
		$sql2="SELECT * FROM gather_type2";
		$typename="精选";
		$typeid=$_GET["type"];
		switch ($typeid)
		{
			case 1:
				$typename="精选";
				$sql.=" WHERE type1='1'";
				break;
			case 2:
				$typename="开发工具";
				$sql.=" WHERE type1='2'";
				break;
			case 3:
				$typename="资源";
				$sql.=" WHERE type1='3'";
				break;
			case 'X':
				$typename="资源 - 福利";
				$sql.=" WHERE type1='888'";
				break;
		}
		$result = mysql_query($sql);
		$result2=mysql_query($sql2);
		$type2name=array();
		while($row = mysql_fetch_array($result2))
		{
			$type2name[$row['id']]=$row['name'];
		}
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
	<title>管理中心 - 集·锦 | 拼接那些美丽的碎片</title>
	<link href="  ../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery-1.11.2.min.js"></script><!-- JQuery -->
	<?php if($isLogin&&$uPermission==3) {?>
	<script type="text/javascript"  src="dashboard.js"></script>
	<?php } ?>
	<script type="text/javascript">
		function Delete(id){
			var check=confirm("删除后无法恢复，确认吗？");
			if(check==true){
				window.location.href("del.php?id="+id); 
			}
		}
	</script>
	<style type="text/css">
	small a{
		color:#000;
	}
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
<div class="container">
	<div class="jumbotron">
		<h1>管理中心</h1>
		<p>世界的背后是什么样子...</p>
	</div>
</div>
<?php if(!$isLogin){ ?>
<div class="container">
	<div class="row">
		<div class="alert alert-danger h4" role="alert">
		        <strong>错误!</strong>您还没有<a href="login.php">登录</a> 或者权限不足！<a href="index.php" class="btn btn-primary btn-sm" role="button">返回首页&raquo;</a>
		</div>
	</div>
</div>
<?php include_once("footer.php");
return 0;
} ?>
<div class="container">
	<div class="row">
		<div class="btn-group">
			<h4>分类
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<?php echo $typename ?><span class="caret"></span>
			</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="dashboard.php?type=1">精选</a></li>
			<li><a href="dashboard.php?type=2">开发工具</a></li>
			<li><a href="dashboard.php?type=3">资源</a></li>
		<li class="divider"></li>
		<li><a href="dashboard.php?type=X" id="typeX"><small>资源 - 福利</small></a></li>
		</ul>
		</h4>
		</div>
		<table class="table table-striped table-condensed table-hover ">
			<thead>
				<th width="4%">编号</th>
				<th width="7%">小类</th>
				<th width="10%">网站</th>
				<th width="18%">网址</th>
				<th width="12%">添加时间</th>
				<th width="5%">推荐</th>			
				<!-- <th width="5%">期限</th> -->
				<th width="25%">推荐语</th>
				<th width="3%">编辑</th>
				<th width="3%">删除</th>
			</thead>
			<?php
			while($row = mysql_fetch_array($result))
			{
			?>
			<tr>
				<td ><?php echo $row['id']; ?></td>
				<td><?php echo $type2name[$row['type2']]; ?></td>
				<td><?php echo $row['site']; ?></td>
				<td><a href="<?php echo $row['addr']; ?>"><?php echo $row['addr']; ?></a></td>
				<td><?php echo $row['add_time']; ?></td>
				<td><?php if($row['is_recommend'])echo"是";else echo"否"; ?></td>
				<!-- <td><?php echo $row['recommend_time']; ?></td> -->
				<td><?php echo $row['recommendation']; ?></td>
				<td>
					<?php echo "<a href=edit.php?id=".$row['id'].">"; ?><button type="button" class="btn btn-primary btn-sm">编辑</button></a>
				</td>
				<td>
					<button type="button" class="btn btn-danger btn-sm" onclick="Delete(<?php echo $row['id'] ?>)">删除</button>
				</td>
			</tr>
			<?php 
			}
			 ?>
		</table>
	</div>
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
				<option value=888>☆资源 - 福利</option>
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
	<?php include_once("footer.php") ?>
</div>
<div class="modal fade" id="add_type2">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">添加子类</h4>
	  </div>
	  <div class="modal-body">
		  <div class="col-sm-3">
				<select class="form-control" name="choose_type1" id="choose_type1">
					<option value=1>精选</option>
					<option value=2>开发工具</option>
					<option value=3>资源</option>
					<option value=888>☆资源 - 福利</option>
				</select>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="type2Name"  name="type2Name"placeholder="子类名">
		</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">完成</button>
		<button type="button" class="btn btn-success" id="addType2">添加</button>
	  </div>
	</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>