<?php $this->load->view('logo/header') ?>
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
							<td><img height="60" width="150" src="<?php echo $logoInfo['logo_img'] ?>" data-toggle="modal" data-target=".bs-example-modal-lg-<?php echo $logoInfo['logo_id'] ?>"></td>
							<td><?php echo $logoInfo['logo_date'] ?></td>
							<td><a href="javascript:void(0)" onclick="update('/forum/index.php/logo/Logo/updateLogo',<?php echo $logoInfo['logo_id'] ?>)">修改</a></td>
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
<?php $this->load->view('footer'); ?>