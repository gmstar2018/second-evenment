//图片高亮
$(function(){
		$(".anime-cont ul li").mouseenter(function(){
		$(this).css('opacity','1').siblings().css("opacity","0.5");//	.siblings().css('opacity','0.5')
			/*$(this).css("background","#0077AA")*/
//			alert($(this));
			});
		$(".anime-cont").mouseleave(function(){
			$(this).find('li').css('opacity','1');
			
			});
		});