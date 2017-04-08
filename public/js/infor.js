$(document).ready(function(){
	$('#save').click(function(){
		var user_account = $('#user_account').val();
		var user_name = $('#user_name').val();
		var user_phone = $('#user_phone').val();
		var user_address = $('#user_address').val();
		account_msg = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){4,19}$/;
		if(user_account == '' || user_name == '' || user_phone == '' || user_address == '' || user_account == null || user_name == null || user_phone == null || user_address == null){
			error('请填写完整');
		}else if(account_msg.test(user_account) == false){
			error('账号格式不正确');
		}else{
			$.ajax({ 
				url:'/forum/index.php/infor/Operation/updateInfor',
				type:'post',
				data:{
					user_account:user_account,
					user_name:user_name,
					user_phone:user_phone,
					user_address:user_address
				},
				success:function(result){
					if(result == 0){
						location.reload();
					}else{
						error('保存失败');
					}
				}
			});
		}
	});
	$('#resetPassword').click(function(){
		var password = $('#password').val();
		var newPassword = $('#newPassword').val();
		var repeatPassword = $('#repeatPassword').val();
		var password_msg = /^(\w){6,20}$/;
		if(password == '' || newPassword == '' || repeatPassword == '' || password == null || newPassword == null || repeatPassword == null ){
			error('请填写完整');
		}else if(password_msg.test(newPassword) == false || password_msg.test(password) == false ||  password_msg.test(repeatPassword) == false){
			error('密码格式不正确');
		}else if(newPassword != repeatPassword){
			error('重复密码不一致');
		}else if(password == newPassword){
			error('新密码和原密码不能一致');
		}else{
			$.ajax({
				url:'/forum/index.php/infor/Operation/resetPassword',
				type:'post',
				data:{
					password : password,
					newPassword : newPassword,
					repeatPassword : repeatPassword
				},
				success:function(result){
					if(result == 2){
						error('密码错误');
					}else if(result == 1){
						error('保存失败');
					}else{
						location.reload();
					}
				}
			});
		}
	});
});