<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>XX论坛--首页</title>

	<!-- Bootstrap -->
	<link href="/forum/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/forum/public/css/backend.css" rel="stylesheet">
	<link href="/forum/public/css/infor.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/forum/public/alert/css/jquery.alertable.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="main">
		<div class="left">
			<div class="logo">
				<h1><a href="/forum/index.php/backend/Backend">XX论坛</a></h1>
			</div>
			<div class="home">
				<a href="/forum/index.php/backend/Backend">首页</a>
			</div>
			<div class="list">
				<ul>
					<li>
						<a href="/forum/index.php/infor/Infor"><i class="glyphicon glyphicon-user"></i>个人信息</a>
					</li>
					<li>
						<a href="/forum/index.php/infor/Infor/resetPassword"><i class="glyphicon glyphicon-cog"></i>密码管理</a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-th"></i>用户管理</a>
					</li>
					<li>
						<a href="/forum/index.php/logo/Logo"><i class="glyphicon glyphicon-tag"></i>Logo标题</a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-book"></i>帖子管理</a>
					</li>
					<li>
						<a href="/forum/index.php/category/Category"><i class="glyphicon glyphicon-stats"></i>帖子分类</a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-duplicate"></i>广告管理</a>
					</li>
					<li class="list-select">
						<a href="/forum/index.php/type/Type"><i class="glyphicon glyphicon-ice-lolly"></i>广告分类</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="right">
			<div class="top">
				<div class="drow">
					<a href="javascript:void(0)" onclick="showSider()"><i class="glyphicon glyphicon-align-justify"></i></a>
				</div>
				<div class="infor">
					<div class="admin"><a href="javascript:void(0)"><?php echo $admin['adn_name'] ?></a></div>
					<div class="logOut"><a href="javascript:void(0)"><i class="glyphicon glyphicon-log-in"></i></a></div>
				</div>
			</div>