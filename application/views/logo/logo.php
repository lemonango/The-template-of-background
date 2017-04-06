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
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-cog"></i>密码管理</a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-th"></i>用户管理</a>
					</li>
					<li class="list_select">
						<a href="/forum/index.php/logo/Logo"><i class="glyphicon glyphicon-tag"></i>Logo标题</a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-book"></i>帖子管理</a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-stats"></i>帖子分类</a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-duplicate"></i>广告管理</a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="glyphicon glyphicon-ice-lolly"></i>广告分类</a>
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
					<div class="admin"><a href="javascript:void(0)">admin</a></div>
					<div class="logOut"><a href="javascript:void(0)"><i class="glyphicon glyphicon-log-in"></i></a></div>
				</div>
			</div>
			<div class="bread">
				<ol class="breadcrumb">
					<li><a href="/forum/index.php/backend/Backend">首页</a></li>
					<li class="active">logo标题</li>
				</ol>
			</div>
			<div class="content">
				<div class="contain">
					<div class="table-responsive">
						<table class="table table-th-block table-hover">
							<thead>
								<tr>
									<th>标题</th>
									<th>图片</th>
									<th>更新时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($logo as $key => $logoInfo): ?>
									<tr>
										<td><?php echo $logoInfo['logo_name'] ?></td>
										<td><img height="15%" width="20%" src="<?php echo $logoInfo['logo_img'] ?>" data-toggle="modal" data-target=".bs-example-modal-lg-<?php echo $logoInfo['logo_id'] ?>"></td>
										<td><?php echo $logoInfo['logo_date'] ?></td>
										<td><a href="javascript:void(0)">修改</a></td>
									</tr>
									<div class="modal fade bs-example-modal-lg-<?php echo $logoInfo['logo_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<img width="100%" height="250" src="<?php echo $logoInfo['logo_img'] ?>">
											</div>
										</div>
									</div>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/forum/bootstrap/js/bootstrap.min.js"></script>
	<!-- 弹出框 -->
	<script src='/forum/public/alert/js/velocity.min.js'></script>
	<script src='/forum/public/alert/js/velocity.ui.min.js'></script>   
	<script src="/forum/public/alert/js/jquery.alertable.js"></script>
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