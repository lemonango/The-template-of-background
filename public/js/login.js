$(document).ready(function(){

	$('#logIn').click(function(){
		var account = $('#account').val();
		var password = $('#password').val();
		account_msg = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){4,19}$/;
		password_msg = /^(\w){6,20}$/;
		if(account_msg.test(account) == false || password_msg.test(password) == false || account == '' || password == '' || account == null || password == null){
			error('账号或密码格式不正确');
		}else{
			$.ajax({
				url:'/forum/index.php/welcome/logIn',
				type:'post',
				data:{
					account: account,
					password: password
				},
				success:function(result){
					if(result == 1){
						error('用户不存在');
					}else{
						self.location = "/forum/index.php/backend/Backend";
					}
				}
			});
		}
	});
});
