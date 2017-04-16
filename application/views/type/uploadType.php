<?php $this->load->view('type/header'); ?>
<div class="bread">
	<ol class="breadcrumb">
		<li><a href="/forum/index.php/backend/Backend">首页</a></li>
		<li class="active">添加新闻分类</li>
	</ol>
</div>
<div class="content">
	<div class="update">
		<div class="add">
			<button class="btn btn-primary" onclick="upload('/forum/index.php/type/Type')"><i class="glyphicon glyphicon-chevron-left"></i>返回</button>
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">分类名</span>
			<input type="text" class="form-control" id="type_name" placeholder="分类名" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<button class="save" id="uploadType">保存</button>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>