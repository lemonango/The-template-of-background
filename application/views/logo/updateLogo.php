<?php $this->load->view('logo/header') ?>
<div class="bread">
	<ol class="breadcrumb">
		<li><a href="/forum/index.php/backend/Backend">首页</a></li>
		<li class="active">修改Logo</li>
	</ol>
</div>
<div class="content">
	<div class="update">
		<div class="add">
			<button class="btn btn-primary" onclick="redirct('/forum/index.php/logo/Logo')"><i class="glyphicon glyphicon-chevron-left"></i>返回</button>
		</div>
		<form id="sub" method="post" action="/forum/index.php/logo/Operation/updateLogo" enctype="multipart/form-data">
			<?php foreach ($logodate as $key => $logo): ?>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">标题</span>
					<input type="text" class="form-control" name="logo_name" id="logo_name" value="<?php echo $logo['logo_name'] ?>" aria-describedby="basic-addon1">
				</div>
				<input type="text" name="logo_id" value="<?php echo $logo['logo_id'] ?>" style="display: none">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">上传图片</span>
					<img id="pic" style="width: 230px;height: 120px;z-index: 1;border: 1px solid #ccc" src="<?php echo $logo['logo_img'] ?>">
					<input type="file" name="logo_img" class="form-control" id="col_img" style="display: none" accept="image/*" >
				</div>
				<div class="input-group">
					<button class="btn btn-primary" id="updateLogo">修改</button>
				</div>
			<?php endforeach ?>
		</form>
	</div>
</div>
<?php $this->load->view('footer'); ?>