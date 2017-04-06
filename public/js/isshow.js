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