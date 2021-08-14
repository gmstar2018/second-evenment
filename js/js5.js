//短信验证倒计时
$(function(){
	$('.sentBtn').click(function(){
		var i=60;
		var timer=null;
		$(this).addClass('disabled').val('还剩60秒');
		timer=setInterval(function(){
			if(i>0)
			{
				i--;
				$('.sentBtn').val('还剩'+i+'秒');
				}
				else
				{
					clearInterval(timer);
					$('.sentBtn').removeClass('disabled').val('获取验证码');
					}
		},1000);
	});
});