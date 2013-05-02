<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>
		</title>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<?php echo $html->css('bootstrap.css');?>
		<?php echo $html->css('theme.css');?>
		<?php echo $html->css('docs.css');?>
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
			</script>
		<![endif]-->
		<!-- Le fav and touch icons -->
		<script src="/app/webroot/js/jquery-1.7.2.min.js"></script>
		<script src="/app/webroot/js/bootstrap.js"></script>
		<script src="/app/webroot/js/common.js"></script>

		<link rel="shortcut icon" href="/asset/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/asset/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/asset/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/asset/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/asset/ico/apple-touch-icon-57-precomposed.png">
	</head>
	<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
	<!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
	<!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
	<!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<body>

		<!-- header -->
		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav pull-right">

					<li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Setting</a></li>
					<li id="fat-menu" class="dropdown">
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> User
						</a>

						<ul class="dropdown-menu">
							<li><a tabindex="-1" href="#">User Info</a></li>
							<li class="divider visible-phone"></li>
							<li><a tabindex="-1" href="sign-in.html">Logout</a></li>
						</ul>
					</li>

				</ul>
				<a class="brand" href="/">Site Name</a>
			</div>
		</div>
		<!-- /header -->
		
		<!-- side menu -->
		<div class="sidebar-nav">
			<a href="#dashboard-menu" class="nav-header" data-toggle="collapse">Dashboard</a>
			<ul id="dashboard-menu" class="nav nav-list collapse in">
				<li><a href="/">Link1</a></li>
				<li><a href="/">Link2</a></li>
				<li><a href="/">Link3</a></li>
			</ul>

			<a href="#master-menu1" class="nav-header" data-toggle="collapse">Test Master</a>
			<ul id="master-menu1" class="nav nav-list collapse">
				<li><a href="#tests/add" onclick="loadPage('/tests/add');">Add</a></li>
				<li><a href="#tests/search" onclick="loadPage('/tests/search');">Search</a></li>
			</ul>

			<a href="#master-menu2" class="nav-header" data-toggle="collapse">MasterB</a>
			<ul id="master-menu2" class="nav nav-list collapse">
				<li><a href="/">Add</a></li>
				<li><a href="/">Search</a></li>
			</ul>

			<a href="#master-menu3" class="nav-header" data-toggle="collapse">MasterC</a>
			<ul id="master-menu3" class="nav nav-list collapse">
				<li><a href="/">Add</a></li>
				<li><a href="/">Search</a></li>
			</ul>

			<a href="#master-menu4" class="nav-header" data-toggle="collapse">MasterD</a>
			<ul id="master-menu4" class="nav nav-list collapse">
				<li><a href="/">Add</a></li>
				<li><a href="/">Search</a></li>
			</ul>

			<a href="/" class="nav-header" ><i class="icon-question-sign"></i>Help</a>
		</div>
		<!-- /side menu -->
		
		<!-- content -->
		<div class="content">
			
			<!-- header -->
			<div class="header">
				<h1 class="page-title">Page Title here</h1>
			</div>
			<!-- /header -->
			
			<!-- pan -->
			<ul class="breadcrumb">
				<li><a href="/">Home</a> <span class="divider">/</span></li>
				<li class="active">this page</li>
			</ul>
			<!-- /pan -->

			<div class="container-fluid">
				<div class="row-fluid">


					<div class="row-fluid">
						
						<!-- alert area -->
						<!--
						<div id="main_alert" class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>ERROR:0000</strong> <span class="error_msg">HelloWorld!!</span>
						</div>
						-->
						<!-- /alert area -->
						
						<!-- include script -->
						<div id="main_load_area">
							<?php echo $this->Session->flash(); ?>
							<?php echo $content_for_layout; ?>
						</div>
						<!--
						<div class="block">
							<a href="/" class="block-heading" data-toggle="collapse">Content</a>
							<div id="page-stats" class="block-body collapse in">

								<div class="">
									<div style="height:400px;"></div>
								</div>
							</div>
						</div>
						-->
						<!-- /include script -->
					</div>

					<!-- footer -->
					<footer>
						<hr>
						<p>&copy; 2013 <a href="/">K.O</a></p>
					</footer>
					<!-- /footer -->

				</div>
			</div>
		</div>
		<!-- /content -->
	</body>
</html>
