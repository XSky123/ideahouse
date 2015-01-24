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
	<script type="text/javascript"  src="index.js"></script>
	<style type="text/css">
	.no-bottom-margin{margin-bottom: 0;}	
	.surprise{margin-bottom: 10px;}
	small a{
		color:#000;
	}
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
				<td><strong>是</strong>/<small><a href="">否</a></small></td>
				<td>永久</td>
				<td>瓦多少快递加阿里上框架的垃圾是打蜡</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">编辑</button>
				</td>
				<td>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">删除</button>
				</td>
			</tr>
		</table>
	</div>
	<form class="form-horizontal" role="form">
	<div class="form-group">
		<label for="sitename" class="col-sm-1 control-label">网站名称</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="sitename" name="sitename" placeholder="晓天的灵感屋">
		</div>
	</div>
	<div class="form-group">
		<label for="input_addr" class="col-sm-1 control-label">网址</label>
		<div class="col-sm-3">
			<input type="text" class="form-control" id="input_addr"  name="input_addr"placeholder="http://xsky123.com">
		</div>
	</div>
	<div class="form-group">
		<label for="is_recommend" class="col-sm-1 control-label">推荐</label>
		<div class="radio col-sm-4" id="is_recommend">
			<label>
				<input type="radio" name="is_recommend" id="is_recommend1" value="true">
				是
			</label>
			<label>
				<input type="radio" name="is_recommend" id="is_recommend2" value="false" checked>
				否
			</label>
		</div>
	</div>
	<div class="form-group">
		<label for="recommendation" class="col-sm-1 control-label">推荐语</label>
		<div class="col-sm-3">
			<textarea class="form-control"  id="recommendation" name="recommendation" placeholder="捕捉刹那间的灵感,分享生活的故事" rows="3"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="recommendtime" class="col-sm-1 control-label">推荐期限</label>
		<div class="col-sm-1">
			<input type="text" class="form-control" id="recommendtime"  name="recommendtime" placeholder="天数">
		</div>
	</div>
	<div class="form-group">
		<label for="recommendtime" class="col-sm-1 control-label">类别</label>
		<div class="col-sm-2">
			<select class="form-control">
				<option value="Best">精选</option>
				<option value="Dev">开发工具</option>
				<option value="Res">资源</option>
				<option value="Fuli">☆资源 - 福利</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="recommendtime" class="col-sm-1 control-label">子类</label>
		<div class="col-sm-2">
			<select class="form-control">
				<option value="Best">精选</option>
				<option value="Dev">开发工具</option>
				<option value="Res">资源</option>
				<option value="Fuli">☆资源 - 福利</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">确认</button>
		</div>
	</div>
	</form>
	<footer>
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2014 XSky123 &middot; <a href="../index.php">晓天的灵感屋</a></p>
	</footer>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>