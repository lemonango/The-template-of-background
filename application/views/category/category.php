<?php 	$this->load->view('category/header') ?>
<div class="bread">
	<ol class="breadcrumb">
		<li><a href="/forum/index.php/backend/Backend">首页</a></li>
		<li class="active">修改分类</li>
	</ol>
</div>
<div class="content">
	<div class="contain">
		<div class="add">
			<button class="btn btn-primary" onclick="upload('/forum/index.php/category/Category/uploadCategory')"><i class="glyphicon glyphicon-plus"></i>添加</button>
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
					<?php foreach ($category as $key => $cty): ?>
						<tr>
							<td><?php echo $cty['cty_id'] ?></td>
							<td><?php echo $cty['cty_name'] ?></td>
							<td><?php echo $cty['cty_date'] ?></td>
							<td>
								<a href="javascript:void(0)"  onclick="updateCategory('<?php echo $cty['cty_id'] ?>')">修改</a>
								<a href="javascript:void(0)" onclick="deleteCategory('<?php echo $cty['cty_id'] ?>')">删除</a>
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
