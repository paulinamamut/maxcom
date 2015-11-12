$(function(){
  $("a.show").click(function(event){
	 event.preventDefault();
	 $('.transparencia').css({display:'none'})
	 $(".transparencia").eq($("a.show").index(this)).css('display', 'block');
    $("#lightbox").fadeIn(300);
	$("body").css({position:'fixed', width:'100%'});
	$("html").css('overflow', 'hidden');
	
  });
 
  
  $("a.close").click(function(event){
		event.preventDefault();
		$("body, html").attr({style:''});
		var iframe = $(this).nextAll('iframe');
		$("#lightbox").fadeOut({duration:300, complete:function(){
				var src = iframe.attr('src')
				iframe.replaceWith($('<iframe src="'+src+'"/>'));	
			}
  		});
  })
});