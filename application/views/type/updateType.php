<?php $this->load->view('type/header') ?>
<div class="bread">
	<ol class="breadcrumb">
		<li><a href="/forum/index.php/backend/Backend">首页</a></li>
		<li class="active">修改新闻分类</li>
	</ol>
</div>
<div class="content">
	<div class="update">
		<div class="add">
			<button class="btn btn-primary" onclick="upload('/forum/index.php/type/Type')"><i class="glyphicon glyphicon-chevron-left"></i>返回</button>
		</div>
		<?php foreach ($type as $key => $types): ?>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">分类名</span>
				<input type="text" class="form-control" id="type_name" value="<?php echo $types['type_name'] ?>" aria-describedby="basic-addon1">
				<input type="text" id="type_id" style="display: none" value="<?php echo $types['type_id'] ?>">
			</div>
			<div class="input-group">
				<button class="save" id="updateType">修改</button>
			</div>
		<?php endforeach ?>
	</div>
</div>
<?php $this->load->view('footer') ?>