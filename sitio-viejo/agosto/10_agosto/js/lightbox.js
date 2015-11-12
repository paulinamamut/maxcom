$(function(){
    $("a.show").click(function(event){
        event.preventDefault();
        var src = $(this).attr('href');
        $(".transparencia").eq($("a.show").index(this)).css('display', 'block');
        $("#lightbox").fadeIn(300,function(){
            $('.lightbox-panel iframe').attr({ src:src });
        });
        $("body").css({position:'fixed', width:'100%'});
        $("html").css('overflow', 'hidden');

    });
 
  
  $("a.close").click(function(event){
		event.preventDefault();
		$("body, html").attr({style:''});
		var iframe = $(this).nextAll('iframe');
		$("#lightbox").fadeOut({duration:300, complete:function(){
				iframe.attr({src:''})
			}
  		});
  })
});