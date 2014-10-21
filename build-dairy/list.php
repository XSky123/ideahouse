<?php 
include_once("../conn.php"); 
//查询准备
//WARNING 单引号 in SQL will use 键盘1左面那个【`】
$sql_getinfo="SELECT * FROM `build-dairy` ORDER BY `date` DESC,`project-name` ASC ,`version` DESC ,`dairy-type` ASC ,`dairy-id` DESC ";//,`project-name` ASC ,`version` DESC ,`dairy-type` ASC ,`dairy-id` DESC "
$sql_getproj="SELECT DISTINCT  `project-name` FROM `build-dairy` ORDER BY `date` DESC";
$get_info=mysql_query($sql_getinfo,$q);
$get_proj=mysql_query($sql_getproj,$q);
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="XSky123" >
    <title>版本日志 - Build Dairy - 晓天的灵感屋 - XSky‘s IdeaHouse </title>

    <!-- Bootstrap core CSS -->
    <link href="  ../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="container-fluid" id="all">
     <!-- Title -->
	  <div class="page-header">
					<h1>
						更新日志 <small>记录我们的成长</small>
					</h1>
		</div>
		<!-- End of title -->
		<!-- Top(Latest&Memu)-->
		<h2 class="text-left">
					列表 <small>完整信息</small>
		</h2>
		<div class="row-fluid" id="top">
		   <!-- Latest-->	   
				<div class="col-xs-6" id="table_latest">
					<table class="table table-hover table-condensed table-striped">
						<thead>
							<tr>
								<th width="8%">类别</th>
								<th width="10%">项目</th>
								<th width="8%">版本</th>
								<th width="40%">内容</th>
								<th width="15%">日期</th>
							</tr>
						</thead>
						<tbody>
						<?php
						/*if (!$get_info) {
						    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
						    exit;
						}
						
						if (mysql_num_rows($get_info) == 0) {
						    echo "No rows found, nothing to print so am exiting";
						    exit;
						}*/
							while($row = mysql_fetch_assoc($get_info)){ 
								if (($row["dairy-type"])==0)
									echo '<tr class="success">';
								else 
									echo '<tr class="warning">';
							 ?>
								<td>
									<?php if($row["dairy-type"]==0) echo "更新";elseif( $row["dairy-type"]) echo "修正";else echo"展望"; ?>
								</td>
								<td>
									<?php echo $row['project-name']; ?>
								</td>
								<td>
									<?php echo $row['version']; ?>
								</td>
								<td>
									<?php echo $row['content']; ?>
								</td>
								<td>
									<?php echo $row['date']; ?>
								</td>
							</tr>
							<?php
						}?>
						</tbody>
					</table>
					</div>
					<!-- Table栅栏结束 -->
			</div>
			<!-- Navibar -->
			<div class="col-xs-3" id="navi">
				<ul class="nav nav-pills nav-stacked" role="tablist">
				 <li role="presentation"><a href="#">返回首页 Back Home</a></li>
	           <li role="presentation"><a href="index.php">时光旅行 Time Traveller</a></li>
	           <li role="presentation"><a href="#">详细构想 Details</a></li>
	           <li role="presentation" ><a href="#">未来展望 About Future</a></li>
	           <li role="presentation" class="active"><a href="#">列表 List</a></li>
	        </ul>
				</form>
			</div>
		</div>
		<!--End of top -->
		<div class="row-fluid" id="bottom">
<!--
		  <div class="col-xs-8" id="add_login">
		  		    <div class="page-header">
		            <h3>登陆 Login</h3>		    
				    </div>
					  <form class="form-horizontal" role="form">
						  <div class="form-group">
						    <label class="control-label col-xs-2" for="login_username">用户名</label>
						    <div class="col-xs-4"><input type="text" class="form-control" id="login_username" placeholder="Username"></div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-xs-2" for="login_pass">密码</label>
						    <div class="col-xs-4"><input type="password" class="form-control" id="login_pass" placeholder="Password"></div>
						  </div>
					<div class="text-right col-xs-6">
					   <button type="submit" class="btn btn-primary">登陆</button>
               </div>		
						</form>
		  </div>
-->
		  <div class="col-xs-8" id="addit">
		    <div class="page-header">
            <h3>添加新记录 Add</h3>		    
		    </div>
<!--	       
	        <form>
	          <div class="form-group col-xs-6">
				   <label for="input_note">每日随想</label>
				   <textarea class="form-control" name="input-note" rows="3"></textarea>
				   <div class="text-right">
					   <button type="submit" class="btn btn-primary">保存</button>
					   <button type="button" class="btn btn-danger">重填</button>
               </div>				  
				  </div>
			  </form>
-->
				  <div class="col-xs-7">
						<ul class="nav nav-tabs" role="tablist">
						  <li class="active"><a href="#add_simple" role="tab" data-toggle="tab">简 洁</a></li>
						  <li><a href="#add_advanced" role="tab" data-toggle="tab">高 级</a></li>
						</ul>
						<br>
						<!-- Tab panes -->
						<div class="tab-content">
						  <div class="tab-pane fade in active" id="add_simple">
			  			  <form class="form-horizontal">
							  <div class="form-group">
							    <label class="control-label col-xs-2">类型</label>
								  <div class="btn-group col-xs-10" data-toggle="buttons">
									  <label class="btn btn-info active">
									    <input type="radio" name="options" id="option1" autocomplete="off" checked>更新
									  </label>
									  <label class="btn btn-info">
									    <input type="radio" name="options" id="option2" autocomplete="off">修复
									  </label>
									  <label class="btn btn-info">
									    <input type="radio" name="options" id="option3" autocomplete="off">展望
									  </label>
									</div>				  
							  </div>
							  <div class="form-group">
							     <label class="control-label col-xs-2">项目</label>
							     <div class="col-xs-4">
									  <select class="form-control">
									  <?php while($row = mysql_fetch_array($get_proj))
									  		echo "<option>".$row[0]."</option>";?>
									 </select>
								  </div>
								</div>
								 <div class="form-group">
							     <label class="control-label col-xs-2">版本</label>
							     <div class="col-xs-4">
										<input class="form-control" type="text" placeholder="版本">
								  </div>
								</div>
							  <div class="form-group">
							     <label class="control-label col-xs-2">内容</label>
							     <div class="col-xs-8">
										<input class="form-control" type="text" placeholder="内容">
								  </div>
								  <div class="col-xs-2"><button type="submit" class="btn btn-success">添加</button></div>
								</div>
							</form>						
							</div>
							<div class="tab-pane fade" id="add_advanced">
                         <blockquote>
									<div class="alert alert-success" role="alert">即将上线 敬请期待！</div>
								</blockquote>
							</div>
						</div>
					</div>
			</div>
		</div>
      <div class="col-xs-12" id="footer">
        <hr class="featurette-divider">
        <p class="pull-right"><a href="#">返回顶部</a></p>
        <p>&copy;2014 XSky123 -  <a href="../index.php">首页</a> </p>
      </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>