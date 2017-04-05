<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>东阳三建--首页</title>

	<!-- Bootstrap -->
	<link href="/build_backend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/build_backend/public/css/backend.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/build_backend/public/alert/css/jquery.alertable.css">
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
				<h1><a href="/build_backend/index.php/backend/Backend">东阳三建</a></h1>
			</div>
			<div class="home">
				<a href="/build_backend/index.php/backend/Backend">首页</a>
			</div>
			<div class="list">
				<ul>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-user"></i>个人信息</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-cog"></i>密码管理</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-tag"></i>Logo标题</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-picture"></i>轮播图管理</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-signal"></i>分类信息</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-tasks"></i>企业资质</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-leaf"></i>关于三建</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-random"></i>企业荣誉</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-stats"></i>新闻管理</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-th-large"></i>项目管理</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-cloud"></i>人才理念</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-retweet"></i>招聘活动</a></li>
					<li><a href="javascript:void(0)"><i class="glyphicon glyphicon-comment"></i>联系我们</a></li>
				</ul>
			</div>
		</div>
		<div class="right">
			<div class="top">
				<div class="drow">
					<a href="javascript:void(0)" onclick="showSider()"><i class="glyphicon glyphicon-align-justify"></i></a>
				</div>
				<div class="infor">
					<div class="admin"><a href="javascript:void(0)">admin</a></div>
					<div class="logOut"><a href="javascript:void(0)"><i class="glyphicon glyphicon-log-in"></i></a></div>
				</div>
			</div>
			<div class="content">
				
			</div>
		</div>
	</div>
	<div class="bottom">
		
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/build_backend/bootstrap/js/bootstrap.min.js"></script>
	<!-- 弹出框 -->
	<script src='/build_backend/public/alert/js/velocity.min.js'></script>
	<script src='/build_backend/public/alert/js/velocity.ui.min.js'></script>   
	<script src="/build_backend/public/alert/js/jquery.alertable.js"></script>
	<!-- 登陆验证 -->
	<script type="text/javascript" src="/build_backend/public/js/login.js"></script>
	<script type="text/javascript">
		function error(error_massage){
			$.alertable.alert(error_massage , {
				show: function() {
					$(this.overlay).velocity('transition.fadeIn');        
					$(this.modal).velocity('transition.flipBounceYIn');
				},
				hide: function() {
					$(this.overlay).velocity('transition.fadeOut');
					$(this.modal).velocity('transition.perspectiveUpOut');
				} 
			});
		}
	</script>
</body>
</html>