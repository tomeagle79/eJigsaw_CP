// Script to show/hide the navigation bar

jQuery(document).ready(function($){

    /*
        
        $("#menu-icon").click(function(){
        
            $("nav").addClass('responsive');
        
        });

        $("#close-icon").click(function(){
        
            $("nav").removeClass('responsive');
        
        });

    */

// Toggles nav on and off when icon clicked

        $(".button a").click(function(){
        //$(".overlay").fadeToggle(200);
            $("#topNav").toggleClass('responsive');
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });

// set padding-top of first section to clear header  
        
   $(window).resize(function () {
            var headerHeight = $('header').height();
            $('.first').css('padding-top', headerHeight + 20);
        });


   // Shows/hides the social sharing options

        $("#social-share-icon").click(function(){
                
                    $("ul.social-share").toggle(300, 'swing');
                
                });
            });


(function($) {
    
    /* Changes the number of slides shown in charity slider    
        
        function changeSlick(){
                $('#slick-slider-1').attr("data-slick", {"slidesToShow":2} );
                // console.log( $('#slick-slider-1').data('slick') );
                
            }

        //Call on window resize
        
        $(window).resize(function() {

            changeSlick();
            
            
        });

    */ 
    
})( jQuery ); // no conflict wrapper for changeSlick


// dynamic resize of social li heights, depending on tallest li

jQuery(document).ready(function($){

    
    $(function() {
        $('.item').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
            });
    });

});