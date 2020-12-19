
jQuery(document).ready(function(){

    // jQuery("a.map-ban-border.selected").parent().css({ 
    //     "height": "2000px !important",
    // }); 
    
    jQuery(function() {
        jQuery('.tabs nav a').on('click', function() {
        show_content(jQuery(this).index());
    });
      
    show_content(0);
    
    function show_content(index) {
        // Make the content visible
        jQuery('.tabs .content.visible').removeClass('visible');
        jQuery('.tabs .content:nth-of-type(' + (index + 1) + ')').addClass('visible');
    
        // Set the tab to selected
        jQuery('.tabs nav a.selected').removeClass('selected');
        jQuery('.tabs nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
    }
    });
    jQuery('#tabs-nav   div').click(function () {
        jQuery('#tabs-nav   div').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.tab-content').hide();
        var activeTab = jQuery(this).find('a').attr('href');
        jQuery(activeTab).fadeIn();
        return false;
    });
  
  
  
    jQuery('#tabs-nav2  div').click(function () {
      jQuery('#tabs-nav2  div').removeClass('active');
      jQuery(this).addClass('active');
      jQuery('.tab-content2').hide();
      var activeTab = jQuery(this).find('a').attr('href');
      jQuery(activeTab).fadeIn();
      return false;
  });

		
  jQuery('#clientSlider').slick({
    speed: 1000,
    infinite: false,
    autoplay: false,
    autoplaySpeed: 3000,
    prevArrow:"<button type='button' class='slick-prev slick-arrow'></button>",
    nextArrow:"<button type='button' class='slick-next slick-arrow'></button>",
  });



  jQuery('#tab2 #clientSlider').slick({
    speed: 1000,
    infinite: false,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow:"<button type='button' class='slick-prev slick-arrow'></button>",
    nextArrow:"<button type='button' class='slick-next slick-arrow'></button>",
  });
  

  // pop up
  jQuery("span.close-pop").on("click",(function(){
    jQuery(this).parents(".popup-main").removeClass("active");
}
));
jQuery("[data-target-popup]").on("click", (function(e) {
    e.preventDefault();
    var t = jQuery(this).data("target-popup");
    jQuery(".popup-main[data-pop="+t+"]").addClass("active")
}
));

$( "#team_1" ).change(function() {
   if($('#team_1').val() == $('#team_2').val() ) {
     alert("You selected the same Team on both sides! Please check this!");
   }
});
$( "#team_2" ).change(function() {
  if($('#team_1').val() == $('#team_2').val() ) {
    alert("You selected the same Team on both sides! Please check this!");
  }
});

});
  