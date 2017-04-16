<?php 	$this->load->view('type/header') ?>
<div class="bread">
	<ol class="breadcrumb">
		<li><a href="/forum/index.php/backend/Backend">首页</a></li>
		<li class="active">新闻分类</li>
	</ol>
</div>
<div class="content">
	<div class="contain">
		<div class="add">
			<button class="btn btn-primary" onclick="redirct('/forum/index.php/type/Type/uploadType')"><i class="glyphicon glyphicon-plus"></i>添加</button>
		</div>
		<div class="table-responsive">
			<table class="table table-th-block table-hover">
				<thead>
					<tr>
						<th>分类ID</th>
						<th>分类名</th>
						<th>更新时间</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($type as $key => $types): ?>
						<tr>
							<td><?php echo $types['type_id'] ?></td>
							<td><?php echo $types['type_name'] ?></td>
							<td><?php echo $types['type_date'] ?></td>
							<td>
								<a href="javascript:void(0)"  onclick="update('/forum/index.php/type/Type/updateType','<?php echo $types['type_id'] ?>')">修改</a>
								<a href="javascript:void(0)" onclick="deleteType('<?php echo $types['type_id'] ?>')">删除</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<div>
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<?php echo $links ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>
