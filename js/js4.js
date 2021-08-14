//星星评分
$(function(){
	 var flag=0;
	 var $li=$('.div1 li');
	$li.mouseover(function(){
		if(flag!=1)
		{
		$(this).css("background-position","0 -28px").prevAll().css("background-position","0 -28px");
		}
	}).mouseout(function(){
		if(flag!=1)
		{
		$li.css("background-position","0 0")
		}
		}).click(function(){
			if(flag!=1) flag=1;
			else
			{
				$li.css("background-position","0 0")
				$(this).css("background-position","0 -28px").prevAll().css("background-position","0 -28px");
			}
	 });
});