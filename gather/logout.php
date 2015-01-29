<?php
session_start();
$uID=$_SESSION['u_id'];
$isSuccess=0;
if($uID!=""){
  unset($_SESSION['u_id']);
  $isSuccess=1;
}
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
    <style type="text/css">
      .jumbotron{
      background: url(../image/gather.jpg) no-repeat  0;
      background-size:cover;
      }
      .jumbotron h1,p{
      color:#000;
      }
      a{color:inherit;}
    </style>
    <script type="text/javascript">
    	setTimeout("self.location='index.php'", 5000);
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
    </div>
    <?php if($isSuccess){ ?>
    <div class="alert alert-success h4" id="success" role="alert">
        <strong>温馨提示:</strong>注销成功! 如果5秒后没有跳转,请点击<a href="index.php" class="btn btn-primary btn-sm" role="button">返回&raquo;</a>
    </div>
    <?php  }else{ ?>
      <div class="alert alert-danger h4" role="alert">
        <strong>注销失败!</strong>您还没有<a href="login.php">登录</a> 如果5秒后没有跳转,请点击<a href="login.php" class="btn btn-primary btn-sm" role="button">登陆&raquo;</a>
      </div>
      <?php } ?>
    <?php include_once("footer.php") ?>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>