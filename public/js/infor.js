$(document).ready(function(){
	$('#save').click(function(){
		/* Act on the event */
		var user_account = $('#user_account').val();
		var user_phone = $('#user_phone').val();
		var user_address =$('#user_address').val();
		var user_name =$('#user_name').val();
		account_msg = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){4,19}$/;
		if(user_account == null || user_account == '' || user_phone == null || user_phone == '' || user_address == null || user_address == '' || user_name == null || user_name == ''){
			eroor('请填写完整');
		}else if(account_msg.test(user_account) == false){
			error('账号格式不正确');
		}else{
			$.ajax({
				url:'/forum/index.php/infor/Operation/updateInfor',
				type:'post',
				data:{
					user_account:user_account,
					user_phone:user_phone,
					user_name:user_name,
					user_address:user_address
				},
				success:function(result){
					if(result == 1){
						error('修改失败');
					}else{
						location.reload();
					}
				}
			});
		}
	});
});