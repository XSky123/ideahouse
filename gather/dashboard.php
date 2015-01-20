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
	<style type="text/css">
	.no-bottom-margin{margin-bottom: 0;}	
	.surprise{margin-bottom: 10px;}
	</style>
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<a class="navbar-brand" href="#">集·锦</a>
	<p class="navbar-text"><a href="http://www.xsky123.com">晓天的灵感屋</a> 旗下网站</p>
	<p class="navbar-text navbar-right" ><a href="index.php" class="navbar-link">返回首页</a></p>
</nav>
<div class="container">
	<div class="jumbotron">
		<h1>管理中心</h1>
		<!-- <p>拼接那些美丽的碎片</p> -->
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="btn-group">
			<h4>分类
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				请选择<span class="caret"></span>
			</button>
		<ul class="dropdown-menu" role="menu">
		<li><a href="#">精选</a></li>
		<li><a href="#">开发工具</a></li>
		<li><a href="#">资源</a></li>
		<li class="divider"></li>
		<li><a href="#"><small>资源 - 福利</small></a></li>
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
				<th width="5%">期限</th>
				<th width="25%">推荐语</th>
				<th width="3%">编辑</th>
				<th width="3%">删除</th>
			</thead>
			<tr>
				<td >1</td>
				<td>按时打算</td>
				<td>萨达算得上是</td>
				<td>www.www.www</td>
				<td>2015-1-1 11:11L11</td>
				<td><strong>是</strong>/<small>否</small></td>
				<td>永久</td>
				<td>瓦多少快递加阿里上框架的垃圾是打蜡</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">编辑</button>
				</td>
				<td>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">删除</button>
				</td>
			</tr>
			<tr>
				<td>1</td>
				<td>1</td>
				<td>萨达算得上是</td>
				<td>www.www.www</td>
				<td>2015-1-1 11:11L11</td>
				<td><strong>是</strong>/<small>否</small></td>
				<td>永久</td>
				<td>瓦多少快递加阿里上框架的垃圾是打蜡</td>
			</tr>
		</table>


<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			  </div>
			  <div class="modal-body">
				...
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<footer>
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2014 XSky123 &middot; <a href="../index.php">晓天的灵感屋</a></p>
	</footer>
</div>
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>