<?php
	include_once("../conn.php"); 
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
	<script type="text/javascript"  src="index.js"></script>
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
		<div class="col-md-8">
			<h2>优站精选 <small>精巧·精致·精彩</small></h2>
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
					?>
						<tr>
							<td width="85%">
								<h4><?php echo $row['site']; ?> <small><?php echo $row['recommendation']; ?></small></h4>
							</td>
							<td width="15%">
								<h5><em><small><?php echo $row['addr']; ?></small></em></h5>
							</td>
						</tr>
					<?php 
						}
					}
					 ?>
					</table>
					<table class="table table-striped  table-hover">
						<?php 
						$currentType=0;
						foreach ($data[1] as $key => $row) {
							if (!$row['is_recommend']){
								if($row['type2']!=$currentType){
									echo "<tr>";
									$currentType=$row['type2'];
						?>
									<td width="10%">
										<button class="btn btn-primary" type="button">
											<?php echo $typeName[$row['type2']]; ?> <span class="badge">+</span>
										</button>
									</td>
							<?php 
								}
							 ?>
									<td width="15%" align="center">
										<h4><a href=<?php echo $row['addr']; ?>><?php echo $row['site']; ?></a></h4>
									</td>
							<?php
								if($row['type2']!=$currentType){
									echo "</tr>";
									
								}
							}
						}
						?>
					</table>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="dev">
					<table class="table  table-hover  table-stripedr table-condensed no-bottom-margin" >
					<?php foreach ($data[2] as $key => $row) {
						if ($row['is_recommend']){
					?>
						<tr>
							<td width="85%">
								<h4><?php echo $row['site']; ?> <small><?php echo $row['recommendation']; ?></small></h4>
							</td>
							<td width="15%">
								<h5><em><small><?php echo $row['addr']; ?></small></em></h5>
							</td>
						</tr>
					<?php 
						}
					}
					 ?>
					</table>
					<table class="table table-striped  table-hover">
						<?php 
						$currentType=0;
						foreach ($data[2] as $key => $row) {
							if (!$row['is_recommend']){
								if($row['type2']!=$currentType){
									echo "<tr>";
									$currentType=$row['type2'];
						?>
									<td width="10%">
										<button class="btn btn-primary" type="button">
											<?php echo $typeName[$row['type2']]; ?> <span class="badge">+</span>
										</button>
									</td>
							<?php 
								}
							 ?>
									<td>
										<h4><a href=<?php echo $row['addr']; ?>><?php echo $row['site']; ?></a></h4>
									</td>
							<?php
								if($row['type2']!=$currentType){
									echo "</tr>";
									
								}
							}
						}
						?>
					</table>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="res">
					<table class="table  table-hover  table-stripedr table-condensed no-bottom-margin" >
					<?php foreach ($data[3] as $key => $row) {
						if ($row['is_recommend']){
					?>
						<tr>
							<td width="85%">
								<h4><?php echo $row['site']; ?> <small><?php echo $row['recommendation']; ?></small></h4>
							</td>
							<td width="15%">
								<h5><em><small><?php echo $row['addr']; ?></small></em></h5>
							</td>
						</tr>
					<?php 
						}
					}
					 ?>
					</table>
					<table class="table table-striped  table-hover">
						<?php 
						$currentType=0;
						foreach ($data[3] as $key => $row) {
							if (!$row['is_recommend']){
								if($row['type2']!=$currentType){
									echo "<tr>";
									$currentType=$row['type2'];
						?>
									<td width="10%">
										<button class="btn btn-primary" type="button">
											<?php echo $typeName[$row['type2']]; ?> <span class="badge">+</span>
										</button>
									</td>
						<?php 
								}
						 ?>
									<td>
										<h4><a href=<?php echo $row['addr']; ?>><?php echo $row['site']; ?></a></h4>
									</td>
						<?php
								if($row['type2']!=$currentType){
									echo "</tr>";
								}
							}
						}
						?>
					</table>
					<div class="text-center"><button type="button" class="btn btn-success surprise" id="surprise">Click for a surprise!</button></div>
					<div class="text-center"><button type="button" class="btn btn-warning surprise hx" id="hidethat">Hide That.</button></div>
					
					<div class="alert alert-danger hx" role="alert" id="hxwarning"><strong>Warning!</strong>
						<span>
							<!-- This site contains sexually explicit adult materials intended for individuals 18 years of age or older. To those whom may concern, block this website with parental controls. -->
							以下可能出现you know的内容.如果你还很纯洁,请速速远离!
						</span>
						<a href="#" class="alert-link">Agree</a>
						<a href="#" class="alert-link">Disagree</a>
					</div>
					<table class="table table-striped  table-hover no-bottom-margin hx" id="youkonwthat">
						<tr >
							<td>
								<button class="btn btn-warning" type="button">
									Type <span class="badge">10</span>
								</button>
							</td>
							<td>
								<h5><a href="#">My Site 1</a></h5>
							</td>
							<td>
								<h5><a href="#">My Site 1</a></h5>
							</td>
							<td>
								<h5><a href="#">My Site 1</a></h5>
							</td>
							<td>
								<h5><a href="#">My Site 1</a></h5>
							</td>
							<td>
								<h5><a href="#">My Site 1</a></h5>
							</td>
							<td>
								<h5><a href="#">My Site 1</a></h5>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include_once("footer.php") ?>
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