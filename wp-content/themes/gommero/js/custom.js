/*--------DDsmoothmenu Initialization--------*/
ddsmoothmenu.init({
    mainmenuid: "menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
});
//Scroll to top
jQuery(document).ready(function() {
    jQuery('.home_icon').click(function(){
        jQuery('html, body').animate({
            scrollTop:0
        }, 'slow');
        return false;
    });
});
//Slider 
jQuery(function(){
    jQuery('#slides').slides({
        preload: true,
        effect: 'slide',
        generateNextPrev: true,
        preloadImage: 'img/loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: true
    });
});
//Zoombox   
jQuery(function() { 
    jQuery('a.zoombox').zoombox();
});
//Cufon Replacement in heading
jQuery(document).ready(function() { 
    //Cufon.replace('h1')('h2')('h3')('h4')('h5')('h6');
    Cufon.replace('h1, h2, h3, h4, h5, h6,#menu li a');
});
//Contact form validate
jQuery(document).ready(function(){
	jQuery("#contactForm").validate();
});