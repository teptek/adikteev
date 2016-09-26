$(document).ready(function(){
    $('.radio-btn').click(function(){
        $( this ).toggleClass( 'active' );
    });
    $('#config-btn').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top-115 }, speed ); // Go
        return false;
    });
    $("#app-menu").sticky({topSpacing:65});
});