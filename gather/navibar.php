<nav class="navbar navbar-default" role="navigation">
	<a class="navbar-brand" href="index.php">集·锦</a>
	<p class="navbar-text"><a href="http://www.xsky123.com">晓天的灵感屋</a> 旗下网站</p>
	<div class="navbar-right navbar-text" >
		<?php if(!$isLogin){ ?>
		<a href="login.php" class="navbar-link">Login</a>
		<?php }else{ ?>
		当前登陆:<?php echo $uName; ?>
		<a href="logout.php" class="navbar-link">[Logout]</a>
		<?php }
			if ($uPermission==3){
		 ?>
		<a href="dashboard.php" class="navbar-link">[管理中心]</a>
		<?php  }?>
	</div>
</nav>