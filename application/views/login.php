<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>东阳三建--登录</title>

	<!-- Bootstrap -->
	<link href="/build_backend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/build_backend/public/css/login.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/build_backend/public/alert/css/jquery.alertable.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="login">
		<div class="title">
			<h2>东阳三建后台管理系统</h2>
		</div>
		<div class="account input-group" >
			<input type="text" class="form-control" id="account" maxlength="15" placeholder="Username" aria-describedby="basic-addon1">
		</div>
		<div class="password input-group">
			<input type="password" class="form-control" maxlength="15" id="password" placeholder="Password" maxlength="15" aria-describedby="basic-addon1">
		</div>
		<div class="forget  input-grou">
			<a href="javascript:void(0)">Froget password?</a>
		</div>
		<div class="sub">
			<button id="logIn">登录</button>
			<p class="text-center m-t-xs text-sm">2017 © 东阳三建后台管理系统.</p>
		</div>
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