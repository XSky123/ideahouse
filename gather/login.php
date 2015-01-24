<?php
	session_start();
	require_once("../conn.php"); 
	$input_username=$_POST['username'];
	$input_pass=$_POST['pass'];
	$login_state=-1;//-1未登录 0成功 1找不到用户 2密码错误 3禁止
	if($_SESSION['u_id']!=""){
		$login_state=0;
	}//已登录,跳过验证
	if($input_username!=""){//如果没有登录,跳过验证
		$sql="SELECT * FROM user WHERE username='$input_username'";
		$result=mysql_query($sql);
		if(mysql_num_rows($result)>0){
			$row=mysql_fetch_row($result);
			$uid=$row[0];
			$pass=$row[2];
			$isbanned=$row[6];
			if($pass==$input_pass){
				if($isbanned!=1){	
					$_SESSION['u_id']=$uid;
					$login_state=0;
				}else{
					$login_state=3;
				}
			}else{
				$login_state=2;
			}
		}else{
			$login_state=1;
		}
		$login_state_str="";
		switch($login_state){
			case 1:
				$login_state_str="用户不存在";
				break;
			case 2:
				$login_state_str="用户名或密码错误";
				break;
			case 3:
				$login_state_str="用户被禁止";
				break;
			default:
				$login_state_str="未知错误";
				break;
		}
	}
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆 | 集·锦 | 拼接那些美丽的碎片</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/signin.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php include_once("navibar.php") ?>
<?php
	if ($login_state==-1){		
?>
    <div class="container">
      <form class="form-signin" role="form" action="login.php" method="post"><!--临时验证-->
        <h2 class="form-signin-heading">请登陆</h2>
        <input type="text" class="form-control" name="username" placeholder="用户名" required autofocus>
        <input type="password" class="form-control" name="pass"placeholder="密码" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">记住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
      </form>

    </div> <!-- /container -->
<?php
	}else{
?>
	<div class="container">
<?php
	if ($login_state==0){
?>
		<div class="alert alert-success" role="alert">
			<strong>登录成功!</strong>即将返回<a href="index.php">首页</a>
			<script type="text/javascript">
    			setTimeout("self.location='index.php'", 3000);
    		</script>
		</div>
<?php
	}else{
?>
		<div class="alert alert-danger" role="alert">
			<strong>登录失败!</strong><?php echo "错误代码".$login_state." ".$login_state_str;?>  即将返回<a href="login.php">登录界面</a>
			<script type="text/javascript">
    			setTimeout("self.location='login.php'", 3000);
    		</script>
		</div>
<?php
	}
	}
?>
	</div>
  </body>
</html>