$(function(){
    $('.paquetes').css({cursor:'pointer'}).on({'mouseover mouseout':hilite})
})

function hilite(ev){
     $('.bw').each(function(){
         var src = $(this).attr('src').replace('/bw', '');
        $(this).attr({src:src}).removeClass('bw');
     });
    if(ev.type == 'mouseover'){
        var index = $(this).index('.paquetes');
        var paquetes = Array('u', 'uh','s','sh');
        
        $('.canal').not('.'+paquetes[index]).each(function(){
            var src = $(this).attr('src').replace('canales/', 'canales/bw/');
            $(this).attr({src:src}).addClass('bw');
        });
    }
}