$(function(){
    $('.checkbox-alt, .product button').on({'click':function(){
        
        var index = $(this).parents('table.configurador').index('table.configurador') + 1;
        var markee = $('#combo_0'+index);
        
        if($(this).is('.checked')){
            $(this).removeClass('checked').blur();
            changeMarkee(index, markee);
            $('#oferta .combo').eq(index-1).removeClass('added');
            $('#oferta .combo').eq(index-1).find('plus').remove();
        }else{
            $('.checked[name='+$(this).attr('name')+']').removeClass('checked');
            $(this).addClass('checked');
            changeMarkee(index, markee, '<h3>'+$(this).parent().children('[itemprop="name"]').html()+'</h3>' );
            if(index != 1){
                markee.prepend('<button class="cancel">⨉</button>');
                $('#oferta .combo').eq(index-1).append('<div class="plus"/>');
            }
            $('.cancel').on({click:cancel})
            $('#oferta .combo').eq(index-1).addClass('added');
        }
        suma();
    }})
    $('#tv, #cel').css({display:'none'});
    $('.configurador .checkbox-alt').on({click:selectPlan});
    $('#oferta .combo, .toggle').on({click:toggleService});
    $('#tu_paquete button').on({click:doSend});
    
    $(window).on({resize:toggleBenefits})
    toggle = $(window).width() < 980;
    initBenefits(toggle ? 'mobile' : 'desktop');
})

function selectPlan(event){
    $(this).parents('table').find('.plan-ok').removeClass('plan-ok');
    if($(this).is('.checked'))
        $(this).parents('th').addClass('plan-ok');
}

function changeMarkee(index, markee, message){
    if(typeof markee.data('originalContent') == 'undefined')
         markee.data({'originalContent':markee.html()});
    
    if( typeof message  == 'undefined' )
        message = markee.data('originalContent')
        
    markee.html(message+'<!--[if lt IE 9]><div class="ie-fill"></div><![endif]-->');
    $('#oferta .add').on({click:toggleService});
    
    if(markee.attr('id') == 'combo_01'){
        if($('table.configurador').eq(index-1).find('.checkbox-alt.checked').length > 0){
            markee.siblings('.combo').css({cursor:'pointer'}).find('.add').removeAttr('disabled');
            $('#tu_paquete').css({visibility:'visible', display:'inline-block'});
            $('.toggle').css({visibility:'visible'});
        }else{
            markee.siblings('.combo').css({cursor:'not-allowed'}).find('.add').attr('disabled', 'disabled');
            $('#tu_paquete').removeAttr('style');
            $('.toggle').css({visibility:'hidden'});
        }
    }
    
}

function toggleService(event){
    event.preventDefault();
    var combo = $(this).is('.combo') ? $(this) : $('.combo.unselected').eq( $(this).index('.toggle') );
    if($(this).find('.add[disabled]').length == 0){
        $('.active').removeClass('active');
        combo.addClass('active');
        var index = combo.index('.combo');
        $('table.configurador').css({display:'none'});
        $('table.configurador').eq(index).css({display:'table'});
        $('.legend').show();
    }
}

function cancel(ev){
    ev.stopImmediatePropagation();
    var index = $(this).parent().index('.combo');
    $('table.configurador').eq(index).find('.checkbox-alt.checked').trigger('click');
}

function suma(){
    var total = 0;
    $('table.configurador').find('.checkbox-alt.checked').parent().children('[itemprop="price"]').each(function(){
        total += parseInt($(this).text().replace(/\$/g, ''));
    });
    $('#tu_paquete strong').html('$'+total);
}

function padLeft(nr, n, str){
    return Array(n-String(nr).length+1).join(str||'0')+nr;
}

function doSend(){
    var keys = Array('combo','tv','cel');
    var query = '?type=contratacion';
    $('.plan-ok').each(function(i){
        var index = $(this).parents('.configurador').index('.configurador');
        var value = $(this).find('[itemprop=name]').text();
        query += '&'+keys[index-1]+'='+encodeURIComponent(value);
    })
    window.location.href = "/atencion-a-clientes/envianos-un-mensaje/quiero-ser-cliente/"+query+'&total='+$('#tu_paquete .price').text().replace(/\$/g, '');
}

function toggleBenefits(){
    var window = $(this);
    if(window.width()< 980 ){
        if(toggle){
            initBenefits('mobile');
            toggle = false;
        }
    }else{
        if(!toggle){
            initBenefits('desktop');
            toggle = true;
        }
    }
}

function initBenefits(version){
    var asistencia = $('.asistencia');
    asistencia.find('dt').off('click');
    if(version == 'desktop'){
        asistencia.css({height:'480px'})
        asistencia.find('dd').css({position:'absolute', left:0, top:'110px', display:'block'}).first().addClass('selected');
        asistencia.find('dt').css({float:'left'}).on({click:swapDepth}).first().addClass('selected');
    }else{
        asistencia.css({height:''})
        asistencia.find('dd').css({position:'relative', display:'none', top:0}).removeClass('selected');
        asistencia.find('dt').css({float:'none'}).on({click:slideShut}).removeClass('selected');
    }
}

function swapDepth(ev){
    ev.preventDefault();
    $(this).addClass('selected').siblings().removeClass('selected');
    $(this).next().addClass('selected');
    
}

function slideShut(ev){
    ev.preventDefault();
    var down = $(this).next('dd').css('display') == 'none';
    $('.asistencia .selected').removeClass('selected');
    $(this).siblings('dd').slideUp();
    if(down){
        $(this).addClass('selected').next('dd').addClass('selected').slideDown();
    }
}