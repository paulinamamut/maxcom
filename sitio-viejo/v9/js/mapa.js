$(function(){
    var mapOptions = {
            zoom: 5,
            center: {lat:23.628611, lng:-109.930000},
            disableDoubleClickZoom: true,
            draggable: true,
            scrollwheel: false,
            panControl: false,
            zoomControl: false,
            streetViewControl: false,
            mapTypeControl:false
        };
    cobertura = new Array();
    var map = new google.maps.Map($('#mapa').get(0), mapOptions);
    if(navigator.geolocation) {
        //$('#search-box').append('<button id="geolocation"/>');
        $('<button id="geolocation" class="btn-sombra"/>').insertBefore('#search-box button[type=submit]');
        $('#geolocation').text("Usar mi ubicación").on({click:function(){
            event.preventDefault(); 
            geolocation(map);
        }});
    }
    $('#search-box button[type=submit]').on({click:function(event){
        event.preventDefault();
        var direccion = $('input[name=direccion]').val();
        var ciudad = $('select[name=city]').val();
        if(direccion.trim() != '' && ciudad != 0)
            geocode(map, direccion);
        else
            reply('Por favor dinos tu ciudad y dirección');
    }})
    google.maps.event.addListenerOnce(map, 'idle', function(){
        $('#mapa').css({overflow:''});
    });
    $('<div id="reply"/>').insertAfter('#search-box button[type=submit]');
    layer_opt = $('.layer-opt')
    layer_opt.on({click:function(){
        if(layer_opt.filter(':checked').length < 1)
            $(this).prop('checked', true);
    }})
})

function geolocation(map){
    navigator.geolocation.getCurrentPosition(function(position) {
            initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
            var file;
            geocode(map, initialLocation, true);
        }, function() {
        reply('Para usar tu ubicación geográfica es necesaria tu autorización.');
    });
}

function geocode(map, ref, reverse){
    var param = typeof reverse === 'undefined'?'address':( reverse ? 'latLng' : 'address' );
    var geocoder = new google.maps.Geocoder();
    var params = {};
    var city_val = $('select[name=city]').val();
    if(typeof reverse === 'undefined')
       ref += ', ' +city_val;
    params[param] = ref;
    
    geocoder.geocode(params,
    function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if(!reverse){
                setPin(map, results[0].geometry.location, city_val);
            }else{
                var cities = {'DF':'df', 'Puebla, Pue.':'puebla', 'Tehuacán':'puebla', 'Querétaro':'queretaro', 'San Luis Potosí':'sanluis', 'Méx., Mexico':'edomex'};
                var cityString = results[2].formatted_address;
                for(city in cities){
                    if(cityString.indexOf(city)!== -1)
                        file = cities[city];
                }
                setPin(map, ref, file);
            }
        } else {
            reply("La dirección " + ref + " no fue encontrada.");
        }
    });
}

function setPin(map, latLng, file){
    loadKML(map, file);
    map.setCenter(latLng);
    map.setZoom(13);
    var image = {
        url: '/img/marker.png',
        anchor: new google.maps.Point(20, 66),
    };
    if(typeof marker !== 'undefined')
        marker.setMap(null);
    marker = new google.maps.Marker({
      position: latLng,
      map: map,
      icon: image,
  });
}

function loadKML(map, file){
    layer_opt.each(function(i){
        if($(this).is(':checked')){
            switch($(this).attr('name')){
                case 'cac':
                    fileName = 'cac-'+file;
                break;
                case 'cm':
                    fileName = 'cm-'+file;
                break;
                default:
                    fileName = file;
                break;
            }
            if(typeof cobertura[i] !== 'undefined')
                cobertura[i].setMap(null);
            cobertura[i] = new google.maps.KmlLayer({url:"http://elmamut.com/desarrollo/maxcom/kml/"+fileName+".kml", preserveViewport: true});
            cobertura[i].setMap(map);
        }
    });
}

function reply(message){
    $('#reply').html("<p>"+message+"</p>");
}