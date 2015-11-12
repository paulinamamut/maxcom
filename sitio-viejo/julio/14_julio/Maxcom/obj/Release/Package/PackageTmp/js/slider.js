var slider, body, tray, slides, controles, main, main_nav, header, mn_height, bbefore, width_inicial, scroll_inicial = 0, slideInt, tiempo = 8;
$(function(){
	slider = $('#slider');
	header = $('header, #header');
	main_nav = $('#main_nav');
	mn_height = main_nav.height();
    width_inicial = slider.width();
    if(slider.length > 0){
        controles = $('#slide_control a');
        main = $('#main_items a');
        tray = $('.tray');
        tray.each(function(){
            var clone = $(this).find('.slide').first().clone();
            var width = ($(this).find('.slide').length + 1) * 100;
            $(this).append(clone).css({width:width+'%'});
        })
        body = $('body'), slides = $('.slide');
        controles.first().addClass('current');
        slides.each(function(){
            $(this).css({width:(100/(slides.length/tray.length))+'%'})
        });
        slideInt = setInterval(control, tiempo*1000);
        $('.slide_control').on({click:function(ev){
            ev.preventDefault();
            clearInterval(slideInt);
            control($(this).attr('id'));
        }})
        controles.on({click:function(ev){
            ev.preventDefault();
            clearInterval(slideInt);
            skipTo($(this), controles);
        }})
    }
    $('#menu_toggle').on({click:function(ev){
        toggleMenu(ev);
    }}) 
    $(window).on({resize:adjust})
    if(typeof(slider.swipe) == "function"){
        slider.swipe({
            swipeLeft:function(){control('next')},
            swipeRight:function(){control('prev')}
        });
    }
    var year = new Date().getFullYear();
    var copyright = $('footer p, .footer p');
    copyright.text( copyright.text().replace('2014', year) );
})

function toggleMenu(ev){
    ev.preventDefault();
    var el = $(ev.target);
    if(el.is('.cerrar')){
        var op = 0;
        el.text('Menú').removeClass('cerrar');
    }else{
        var op = 1;
        el.text('Cerrar').addClass('cerrar');
    }
    
    el.off();
    
    setTimeout(function(){
       header.animate({height:header.height()+(mn_height * ((op*2)-1) )}, function(){
        if(op==0)
            main_nav.removeAttr('style');
       })
    }, (1-op)*500)
    setTimeout(function(){
        main_nav.css({display:(op==1?'block':'none')})
    }, (1-op)*500)
    setTimeout(function(){
        main_nav.animate({opacity:op});
    }, (op)*500)
    
    setTimeout(function(){
        el.on({click:function(ev){
            toggleMenu(ev);
        }}) 
    },500)
    
}

function adjust(){
    clearInterval(slideInt);
    var newS = Math.floor( (scroll_inicial/width_inicial) * slider.width() );
    slider.scrollLeft(newS);
    mn_height = main_nav.height();
    if( $(window).width() > 680){
        header.removeAttr('style');
        main_nav.removeAttr('style');
        $('#menu_toggle').text('Menú').removeClass('cerrar');
    }
    if(this.resizeTO)
        clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function() {
        width_inicial = slider.width();
        slideInt = setInterval(control, tiempo*1000);
    }, 500);
}

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
        slider.scrollLeft(slider.get(0).scrollWidth-slider.width());
    if(direction == 'next' && slider.scrollLeft() >= slider.get(0).scrollWidth-slider.width())
        slider.scrollLeft(0);
    if(typeof direction === 'number'){
        var scroll = direction;
    }else
        var scroll = slider.scrollLeft() + (direction == 'next'?slider.width():-slider.width());
    
    scroll = scroll - (scroll%slider.width());
    
    slider.animate({scrollLeft:scroll+'px'}, 1000, function(){
        scroll_inicial = slider.scrollLeft();
    });
}