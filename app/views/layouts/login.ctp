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

		<link rel="shortcut icon" href="/assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
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
				<a class="brand" href="/">Site Name</a>
			</div>
		</div>
		
		<div class="row-fluid">

			<div id="main_load_area">
				<?php echo $this->Session->flash(); ?>
				<?php echo $content_for_layout; ?>
			</div>

			<!-- footer -->
			<footer>
				<hr>
				<p>&copy; 2013 <a href="/">K.O</a></p>
			</footer>
			<!-- /footer -->

		</div>
	</body>
</html>
