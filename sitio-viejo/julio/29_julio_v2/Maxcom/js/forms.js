$(function(){
    var conSelect = $('option.conditional').parent();
    
    if(qs['type'] != 'contratacion')
        $('fieldset.conditional').hide();
    else
        conSelect.val($('option.conditional').val()).trigger('change');
    
    conSelect.on({change:toggleConditional})
    
    /*if(qs['type']='contratacion')
        conSelect.val($('option.conditional').val()).trigger('change');*/
    
    var sBox = $("#search-box");
    
    sBox.find("input").on("keyup", function(event) {
        var keycode = event.which;
        alert(keycode);
        if (keycode == 13){
            event.preventDefault();
            sBox.find('button[type=submit]').click()
        }
    });
})

function toggleConditional(event){
    var isSelected = $(this).find("option:selected").is('.conditional');
    if(isSelected)
        $('fieldset.conditional').stop().slideDown();
    else
        $('fieldset.conditional').stop().slideUp();
}

var qs = (function(a) {
    if (a == "") return {};
    var b = {};
    for (var i = 0; i < a.length; ++i)
    {
        var p=a[i].split('=', 2);
        if (p.length == 1)
            b[p[0]] = "";
        else
            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
    }
    return b;
})(window.location.search.substr(1).split('&'));

