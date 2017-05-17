// Script to show/hide the navigation bar

jQuery(document).ready(function($){
        
        $("#menu-icon").click(function(){
        
            $("nav").addClass('responsive');
        
        });

       /*
        $("ul#menu-menu-1 li a").click(function(){
        // alert("Link is working");
            $("nav").hide();
        
        });

        */

        $("#close-icon").click(function(){
        
            $("nav").removeClass('responsive');
        
        });

        $(".button a").click(function(){
        //$(".overlay").fadeToggle(200);
            $("nav").toggleClass('responsive');
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });

// set padding-top of first section to clear header  
        
   $(window).resize(function () {
            var headerHeight = $('#header').height();
            $('.first').css('padding-top', headerHeight);

            // console.log(headerHeight);
  
    });


   

});


(function($) {
    
    /* Changes the number of slides shown in charity slider  */   
        
        function changeSlick(){
                $('#slick-slider-1').attr("data-slick", {"slidesToShow":2} );
                // console.log( $('#slick-slider-1').data('slick') );
                
            }

        //Call on window resize
        
        $(window).resize(function() {

            changeSlick();
            
            
        });
    
})( jQuery ); // no conflict wrapper for changeSlick

