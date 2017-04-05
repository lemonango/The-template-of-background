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
				url:'/build_backend/index.php/welcome/logIn',
				type:'post',
				data:{
					account: account,
					password: password
				},
				success:function(result){
					if(result == 1){
						error('用户不存在');
					}else{
						self.location = "/build_backend/index.php/backend/Backend";
					}
				}
			});
		}
	});
});
var isShow = false;
function showSider(){
	if(isShow == false){
		$('.left').css('display','none');
		isShow = true;
	}else{
		$('.left').css('display','block');
		isShow = false;
	}
}