var slider, body, tray, slides, controles, main;
$(function(){
    var tiempo = 8;
     controles = $('#slide_control a');
     main = $('#main_items a');
    tray = $('#tray');
    $('.slide').first().clone().appendTo(tray);
    slider = $('#slider'), body = $('body'), slides = $('.slide');
    controles.first().addClass('current');
    tray.css({width:(slides.length * 100)+'%'})
    slides.each(function(){
        $(this).css({width:(100/slides.length)+'%'})
    });
    var slideInt /*= setInterval(control, tiempo*1000)*/;
    $('.slide_control').on({click:function(){
        clearInterval(slideInt);
        control($(this).attr('id'));
        slideInt = setInterval(control, tiempo*1000);
    }})
    controles.on({click:function(ev){
        clearInterval(slideInt);
        skipTo($(this), controles);
        slideInt = setInterval(control, tiempo*1000);
    }})
    main.on({click:function(ev){
        clearInterval(slideInt);
        skipTo($(this), main);
        slideInt = setInterval(control, tiempo*1000);
    }})
    
})

function skipTo(el, collection){
    var  i = collection.index(el);
    control(i);
}

function control(direction){
    var controles = $('#slide_control a');
    if(typeof direction ==='undefined')
        direction = 'next';
    var index = controles.index(controles.filter('.current'));
    if(typeof direction != 'number'){
        var newIndex = direction == 'next' ? (index+1 < controles.length ? index+1:0) : (index-1 >= 0 ? index-1:controles.length-1);
        var slideTo = direction;
    }else{
        var newIndex = direction;
        var slideTo = direction*body.width();   
    }
    var newEl = $(controles[newIndex]);
    controles.filter('.current').removeClass('current')
    newEl.addClass('current');
    slide(slideTo);
}

function slide(direction){
    if(direction == 'prev' && slider.scrollLeft() == 0)
        slider.animate({scrollLeft:slider.get(0).scrollWidth-body.width()+'px'},0);
    if(direction == 'next' && slider.scrollLeft() >= slider.get(0).scrollWidth-body.width())
        slider.animate({scrollLeft:'0px'},0);
    if(typeof direction === 'number'){
        var scroll = direction;
    }else
        var scroll = slider.scrollLeft() + (direction == 'next'?body.width():-body.width());
    slider.stop().animate({scrollLeft:scroll+'px'}, 1000);
}