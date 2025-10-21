jQuery(document).ready(function($) {
    $('[data-modal^="sign"]').click(function(){
        let modal = $(this).data('modal');
        $('.registration').modal('show');
        $('a[href="#'+ modal +'"]').tab('show');
    });
    var input = document.querySelectorAll("input[type='tel']");
    var iti_el = $('.iti.iti--allow-dropdown.iti--separate-dial-code');
    if(iti_el.length){
        iti.destroy();
    }
    for(var i = 0; i < input.length; i++){
        iti = intlTelInput(input[i], {
            autoHideDialCode: false,
            autoPlaceholder: "aggressive" ,
            initialCountry: "auto",
            separateDialCode: true,
            customPlaceholder:function(selectedCountryPlaceholder,selectedCountryData){
                return ''+selectedCountryPlaceholder.replace(/[0-9]/g,'X');
            },
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/utils.js"
        });
        $('input[type="tel"]').on("focus click countrychange", function(e, countryData) {
            var pl = $(this).attr('placeholder') + '';
            var res = pl.replace( /X/g ,'9');
            if(res != 'undefined'){
                $(this).inputmask(res, {placeholder: "X", clearMaskOnLostFocus: true});
            }
        });
        $('input[type="tel"]').on("focusout", function(e, countryData) {
            var intlNumber = iti.getNumber();
            console.log(intlNumber);   
        });
    }
})