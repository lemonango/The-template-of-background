/*页面跳转*/
function redirct(url){
	self.location = url;
}
/*修改页面跳转*/
function update(url,id){
	self.location = url+'/'+id;
}
//建立一個可存取到該file的url
function getObjectURL(file) {
	var url = 'D:demo/build_backend/upload/' ;
	if (window.createObjectURL!=undefined) { // basic
		url = window.createObjectURL(file) ;
	} else if (window.URL!=undefined) { // mozilla(firefox)
		url = window.URL.createObjectURL(file) ;
	} else if (window.webkitURL!=undefined) { // webkit or chrome
		url = window.webkitURL.createObjectURL(file) ;
	}
	return url ;
}
$(document).ready(function(){
	$("#pic").click(function () {
		$("#col_img").click(); //隐藏了input:file样式后，点击头像就可以本地上传
		$("#col_img").on("change",function(){
			var objUrl = getObjectURL(this.files.item(0)) ; //获取图片的路径，该路径不是图片在本地的路径
			if (objUrl) {
				$("#pic").attr("src", objUrl) ; //将图片路径存入src中，显示出图片
			}
		});
	});

});
/*logo*/
$(document).ready(function(){
	$('#updateLogo').click(function(){
		$('#sub').ajaxForm({
			type:'post',
			success:function(result){
				if(result == 3){
					error('位置不能为空');
				}else if(result == 2){
					error('上传失败');
				}else if(result == 1){
					error('保存失败');
				}else if(result == 5){
					error('位置格式不正确');
				}else{
					self.location = "/forum/index.php/logo/Logo";
				}
			}
		});
	});
});
/*分类*/
$(document).ready(function(){
	$('#uploadCategory').click(function(){
		var cty_name = $('#cty_name').val();
		if(cty_name == null || cty_name == ''){
			error('分类名不能为空');
		}else{
			$.ajax({
				url:'/forum/index.php/category/Operation/uploadCategory',
				type:'post',
				data:{
					cty_name:cty_name
				},
				success:function(result){
					if(result == 2){
						error('分类名已存在');
					}else if(result == 1){
						error('保存失败');
					}else{
						self.location = '/forum/index.php/category/Category';
					}
				}
			});
		}
	});
});
function deleteCategory(cty_id){
	var r = confirm('确认删除');
	if(r == true){
		$.ajax({
			url:'/forum/index.php/category/Operation/deleteCategory',
			type:'post',
			data:{
				cty_id:cty_id
			},
			success:function(result){
				if(result == 2){
					error('该分类已删除');
				}else if(result == 1){
					error('删除失败');
				}else{
					location.reload();
				}
			}
		});
	}
}
$(document).ready(function(){
	$('#updateCategory').click(function(){
		var cty_name = $('#cty_name').val();
		var cty_id = $('#cty_id').val();
		if(cty_name == null || cty_name == ''){
			error('分类名不能为空');
		}else{
			$.ajax({
				url:'/forum/index.php/category/Operation/updateCategory',
				type:'post',
				data:{
					cty_name:cty_name,
					cty_id:cty_id
				},
				success:function(result){
					if(result == 1){
						error('修改失败');
					}else{
						self.location = '/forum/index.php/category/Category';
					}
				}
			});
		}
	});
});
/*新闻分类*/
$(document).ready(function(){
	$('#uploadType').click(function(){
		var type_name = $('#type_name').val();
		if(type_name == null || type_name == ''){
			error('分类名不能为空');
		}else{
			$.ajax({
				url:'/forum/index.php/type/Operation/uploadType',
				type:'post',
				data:{
					type_name:type_name
				},
				success:function(result){
					if(result == 2){
						error('分类名已存在');
					}else if(result == 1){
						error('保存失败');
					}else{
						self.location = '/forum/index.php/type/Type';
					}
				}
			});
		}
	});
});
function deleteType(type_id){
	var r = confirm('确认删除');
	if(r == true){
		$.ajax({
			url:'/forum/index.php/type/Operation/deleteType',
			type:'post',
			data:{
				type_id:type_id
			},
			success:function(result){
				if(result == 2){
					error('该分类已删除');
				}else if(result == 1){
					error('删除失败');
				}else{
					location.reload();
				}
			}
		});
	}
}
$(document).ready(function(){
	$('#updateType').click(function(){
		var type_name = $('#type_name').val();
		var type_id = $('#type_id').val();
		if(type_name == null || type_name == ''){
			error('分类名不能为空');
		}else{
			$.ajax({
				url:'/forum/index.php/type/Operation/updateType',
				type:'post',
				data:{
					type_name:type_name,
					type_id:type_id
				},
				success:function(result){
					if(result == 1){
						error('修改失败');
					}else{
						self.location = '/forum/index.php/type/Type';
					}
				}
			});
		}
	});
})

