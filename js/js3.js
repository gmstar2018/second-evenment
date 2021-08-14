//图片提示
$(function(){
	var x=10;
	var mytitle=null;
	$('a.hint').bind({
		'mouseenter':function(e){
			var $hint=$('<div id="hint"><img src="'+this.href+'"/></br>'+this.title+'</div>');
			$('.new_promote').append($hint);
			$('#hint').css({
				"top":(e.pageY+x)+"px",
				"left":(e.pageX+x)+"px"
				});
				mytitle=this.title;
				this.title='';
			},
		'mouseleave':function(){
			$('#hint').remove();
			this.title=mytitle;
			},
		'mousemove':function(e){
				$('#hint').css({
				"top":(e.pageY+x)+"px",
				"left":(e.pageX+x)+"px"
				});
			}
		})
	});