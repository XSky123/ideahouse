<?php 
include_once("../conn.php"); 
//查询准备
//WARNING 单引号 in SQL will use 键盘1左面那个【`】
$sql_latest_version="SELECT DISTINCT  `project-name` , `version`  FROM `build-dairy` WHERE DATE_SUB(CURDATE(), INTERVAL 5 DAY) <= date ORDER BY `date` DESC";
$get_latest_version=mysql_query($sql_latest_version);

//
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
		<div class="row-fluid" id="top">
		   <!-- Latest-->
			<div class="col-xs-8" id="latest">
			   <!-- Subtitle-->
				<h2 class="text-left">
					最近更新<!--5天-->
				</h2>

            <!-- Intro-->				
				<!--
				<blockquote>
					<p>
						github是一个全球化的开源社区.
					</p> <small>编辑 Edit</small>
				</blockquote>
				-->
            <!-- Project Title-->				
				<h3>
					灵感 <span>v0.1</span>
				</h3>
				<!-- 这个是table栅栏开始-->
				<div class="col-xs-6" id="table_latest">
					<table class="table table-hover table-condensed table-striped">
						<thead>
							<tr>
								<th width="15%">类别</th>
								<th width="75%">内容</th>
							</tr>
						</thead>
						<tbody>
							<tr class="success">
								<td>
									更新
								</td>
								<td>
									应该更新的东西
								</td>
							</tr>
							<tr class="warning">
								<td>
									修复
								</td>
								<td>
									需要修复的东西
								</td>
							</tr>
						</tbody>
					</table>
					</div>
					<!-- Table栅栏结束 -->
			</div>
			<!-- Navibar -->
			<div class="col-xs-3" id="navi">
				<ul class="nav nav-pills nav-stacked" role="tablist">
				 <li role="presentation"><a href="#">返回首页 Back Home</a></li>
	           <li role="presentation" class="active"><a href="#">时光旅行 Time Traveller</a></li>
	           <li role="presentation"><a href="#">详细构想 Details</a></li>
	           <li role="presentation"><a href="#">未来展望 About Future</a></li>
	        </ul>
				</form>
			</div>
		</div>
		<!--End of top -->
		<div class="row-fluid" id="middle">
			<div class="col-xs-8 show_as_time">
			    <hr class="featurette-divider">
			      <!-- Title(Date)-->
			      <h2>时间旅者 <small>升序排序 降序排序</small></h2>
					<h3 class="text-left">
					20141002
					</h3>
               <!-- Project Title -->					
					<h4>
						灵感 <span>v0.9</span>
					</h4>
					<!-- table框架开始 -->
					<div class="col-xs-6">
						<table class="table table-hover table-condensed table-striped">
							<thead>
								<tr>
									<th width="15%">类别</th>
									<th width="75%">内容</th>
								</tr>
							</thead>
							<tbody>
								<tr class="success">
									<td>
										更新
									</td>
									<td>
										TB - Monthly
									</td>
								</tr>
								<tr  class="warning">
									<td>
										修复
									</td>
									<td>
										TB - Monthly
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!--table的栅栏结束！！！-->
			</div>
		<div class="col-xs-8 text-center">
			<ul class="pagination">
			  <li class="disabled"><a href="#">&laquo;</a></li>
			  <li  class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>		
		</div>
		</div>
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
            <h3>添加新日志 Add</h3>		    
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
										  <option>1</option>
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