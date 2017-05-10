<?php
	header("Content-Type: text/html; charset=utf-8");
	if(isset($_SESSION["userInfo"])){
		$userInfo = $_SESSION["userInfo"];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Website - Lab369 - Microelectronics, Fudan University">
		<meta name="author" content="Xinyu Zhu">

		<link rel="shortcut icon" href="../../assets/ico/favicon.png">

		<title>Lab369 - Microelectronics, Fudan University</title>

		<link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="./bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="./includes/js/bxslider/jquery.bxslider.css" rel="stylesheet">
		<link href="./includes/js/isotope/jquery.isotope.css" rel="stylesheet">
		<link href="./includes/themes/default/style.css" rel="stylesheet">

		<script>
			var _hmt = _hmt || [];
		</script>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="./includes/js/html5shiv.js"></script>
			<script src="./includes/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top visible-xs">
			<div class="container">
				<div class="navbar-header">
		  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
		  			</button>
		  			<a class="navbar-brand" href="./">OUR<span class="strap">LOGO</span></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="./">首页</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">学术研究 <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">可重构计算与FPGA</a></li>
								<li><a href="portfolio.php">云平台和分布式计算</a></li>
								<li><a href="#">智能终端和嵌入式系统</a></li>
								<li><a href="#">多媒体和图像处理</a></li>
								<li><a href="#">深度学习和人工智能</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">关于我们 <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">教师介绍</a></li>
								<li><a href="team.php">学生信息</a></li>
								<li><a href="gallery.php">相册</a></li>
							</ul>
						</li>
						<li><a href="#">信息动态</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">支持服务 <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">文档管理系统</a></li>
								<li><a href="#">器材管理系统</a></li>
								<li><a href="10.134.142.150/dokuwiki/doku.php">wiki</a></li>
							</ul>
						</li>
						<?php
							if(!isset($userInfo)){
						?>
							<li class="visible-xs"><a href="login.html">Sign In</a></li>
                    		<li class="hidden-xs"><a href="login.html" class="btn btn-main btn-sm btn-header">Sign In</a></li>
						<?php
							}
							else{
						?>
							<li class="visible-xs"><a href="#">Hello!</a></li>
							<li class="visible-xs"><a href="login.html">Sign Out</a></li>
							<li class="hidden-xs"><a href="#" class="btn btn-main btn-sm btn-header">Hello!</a></li>
                    		<li class="hidden-xs"><a href="login.html" class="btn btn-main btn-sm btn-header">Sign Out</a></li>
						<?php
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<ul id="sidemenu" class="sidemenu hidden-xs">
			<li><a class="sidemenu-brand" href="./">OURLOGO</a></li>
			<li>
				<a class="selected" href="./"><i class="icon-home icon-2x"></i> <br/>首页</a></li>
			<li>
				<a class="flyout" href="#"><i class="icon-file icon-2x"></i> <br/>学术研究 <i class="icon-caret-right"></i></a>
				<ul class="submenu">
					<li class="submenu-section"><i class="icon-plus"></i> 学术研究</li>
					<li class="submenu-item"><a href="#">可重构计算与FPGA</a></li>
					<li class="submenu-item"><a href="portfolio.php">云平台和分布式计算</a></li>
					<li class="submenu-item"><a href="#">智能终端和嵌入式系统</a></li>
					<li class="submenu-item"><a href="#">多媒体和图像处理</a></li>
					<li class="submenu-item"><a href="#">深度学习和人工智能</a></li>
				</ul>
			</li>
			<li>
				<a class="flyout" href="#"><i class="icon-user icon-2x"></i> <br/>关于我们 <i class="icon-caret-right"></i></a>
				<ul class="submenu">
					<li class="submenu-section"><i class="icon-plus"></i> 关于我们</li>
					<li class="submenu-item"><a href="#">教师介绍</a></li>
					<li class="submenu-item"><a href="team.php">学生信息</a></li>
					<li class="submenu-item"><a href="gallery.php">相册</a></li>
				</ul>
			</li>
			<li><a href="about.html"><i class="icon-info icon-2x"></i> <br/>信息动态</a></li>
			<li>
				<a class="flyout" href="#"><i class="icon-cog icon-2x"></i> <br/>支持服务 <i class="icon-caret-right"></i></a>
				<ul class="submenu">
					<li class="submenu-section"><i class="icon-plus"></i> 支持服务</li>
					<li class="submenu-item"><a href="#">文档管理系统</a></li>
					<li class="submenu-item"><a href="#">器材管理系统</a></li>
					<li class="submenu-item"><a href="10.134.142.150/dokuwiki/doku.php">wiki</a></li>
				</ul>
			</li>
	    </ul>
		
		<div class="content-area">
		<?php
			if(!isset($userInfo)){
		?>
			<div class="login-strip">
				<a href="register.html"><i class="icon-plus"></i> Sign Up</a> 
				<a href="login.html"><i class="icon-signin"></i> Sign In</a>
			</div>
		<?php
			}
			else{
		?>
			<div class="login-strip">
				<a href="#"><i class="icon-plus"></i> Hello!</a> 
				<a href="login.html"><i class="icon-signin"></i> Sign Out</a>
			</div>
		<?php
			}
		?>