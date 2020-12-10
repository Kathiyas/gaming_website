
jQuery(document).ready(function(){

    
  jQuery(function() {
      jQuery('.tabs nav a').on('click', function() {
      show_content(jQuery(this).index());
  });
    
  show_content(0);
  
  function show_content(index) {
      // Make the content visible
      jQuery('.tabs .content.visible').removeClass('visible');
      jQuery('.tabs .content:nth-of-type(' + (index) + ')').addClass('visible');
  
      // Set the tab to selected
      jQuery('.tabs nav a.selected').removeClass('selected');
      jQuery('.tabs nav a:nth-of-type(' + (index) + ')').addClass('selected');
  }
  });
  jQuery('#tabs-nav div').click(function () {
      jQuery('#tabs-nav div').removeClass('active');
      jQuery(this).addClass('active');
      jQuery('.tab-content').hide();
      var activeTab = jQuery(this).find('a').attr('href');
      jQuery(activeTab).fadeIn();
      return false;
  });



  jQuery('#tabs-nav2 div').click(function () {
    jQuery('#tabs-nav2 div').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('.tab-content2').hide();
    var activeTab = jQuery(this).find('a').attr('href');
    jQuery(activeTab).fadeIn();
    return false;
});
jQuery('#clientSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow:"<button type='button' class='slick-prev slick-arrow'></button>",
    nextArrow:"<button type='button' class='slick-next slick-arrow'></button>",
    
});



});