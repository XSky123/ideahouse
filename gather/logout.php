<?php
session_start();
unset($_SESSION['u_id']);
?>

<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注销 | 集·锦 | 拼接那些美丽的碎片</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript">
    	setTimeout("self.location='index.php'", 3000);
    </script><!-- 自动关闭页面-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
        <div class="alert alert-success" id="success" role="alert">
        	<strong>温馨提示:</strong>注销成功!
        </div>
        <p>如果3秒后没有跳转,请点击<a href="index.php" class="btn btn-primary btn-lg" role="button">返回&raquo;</a></p>
     </div>     
      <hr />
      <footer>
        <p>&copy; XSky123 2014</p>
      </footer>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>