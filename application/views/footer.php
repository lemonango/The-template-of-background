</div>
</div>
<div class="bottom">
	
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/forum/bootstrap/js/bootstrap.min.js"></script>
<!-- 弹出框 -->
<script src='/forum/public/alert/js/velocity.min.js'></script>
<script src='/forum/public/alert/js/velocity.ui.min.js'></script>   
<script src="/forum/public/alert/js/jquery.alertable.js"></script>
<!-- 展开 -->
<script type="text/javascript" src="/forum/public/js/isshow.js"></script>
<script type="text/javascript" src="/forum/public/js/infor.js"></script>
<script type="text/javascript" src="/forum/public/js/ajaxForm.js"></script>
<script type="text/javascript" src="/forum/public/js/Operation.js"></script>
<script type="text/javascript">
	function error(error_massage){
		$.alertable.alert(error_massage , {
			show: function() {
				$(this.overlay).velocity('transition.fadeIn');        
				$(this.modal).velocity('transition.flipBounceYIn');
			},
			hide: function() {
				$(this.overlay).velocity('transition.fadeOut');
				$(this.modal).velocity('transition.perspectiveUpOut');
			} 
		});
	}
</script>
</body>
</html>