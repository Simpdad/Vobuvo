

//tooltip for the information favicon
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});


//slider for Km/day

$('#input_slider_taxi').on('change mousemove',function () {
    var km=0;
    var val = $(this).val()/100;
    km = $(this).val();
    $('#km').text(km);
    console.log(val);
    
    $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, '
                + 'color-stop(' + val + ', #333), '
                + 'color-stop(' + val + ', #fff)'
                + ')'
                );
});



$('#input_slider_location').on('change mousemove',function () {
    var km1=0;
    var val = $(this).val()/1000;
    km1 = $(this).val();
    $('#km1').text(km1);
    console.log(val);
    
    $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, '
                + 'color-stop(' + val + ', #333), '
                + 'color-stop(' + val + ', #fff)'
                + ')'
                );
});



//tabs transport
$('#trans_commun').click(function () {

    $('#choix_trans_commun').toggleClass('active');
    
});

$('#trans_taxi').click(function () {

    $('#choix_trans_taxi').toggleClass('active');
    
});

$('#trans_location').click(function () {

    $('#choix_trans_location').toggleClass('active');
    
});


//Single choice plugin 

$('input[type="checkbox"]').on('change', function() {
   $(this).siblings('input[type="checkbox"]').prop('checked', false);
});