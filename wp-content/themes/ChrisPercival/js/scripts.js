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

// dynamic resize of business slider sections depending on tallest li

jQuery(document).ready(function($){
    
    $(function() {
        $('.bizSlick-inner').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
            });
    });

});

// dynamic resize of business logo heights depending on tallest li

jQuery(document).ready(function($){
    
    $(function() {
        $('.bizSlick-img').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
            });
    });

});



jQuery(function(){

    var twitterlink = jQuery(".ctf-tweet-actions a").attr('href');
    jQuery(".ctf-tweet-text").wrap('<a href="'+twitterlink+'" target="_blank"></a>');
    jQuery(".ctf-tweet-actions a").remove();
    var ctfparent = jQuery("#ctf").parent();
    var ctfgparent = jQuery(ctfparent).parent();
    jQuery(".ellipse", ctfgparent).wrap('<a href="'+twitterlink+'" target="_blank"></a>');

    var i = 1;
    jQuery("ul.double li").each(function(){
        if( i == 2 ){
            jQuery("<div class='clear'></div>").insertAfter(this);
            i = 1;
        } else {
            i++;
        }
    });


});



// Mimicheight
jQuery(function(){

    var footerheights = [];
    jQuery("footer .mimicheight").each(function(){
        footerheights.push(jQuery(this).height());
    });
    var compheight = Math.max.apply(Math, footerheights);
    jQuery("footer .mimicheight").each(function(){
        var padded = (compheight - jQuery(this).height()) / 2;
        if( padded > 0 ){
            jQuery(this).css({
                paddingTop: padded +'px'
            });
        }
    });

});