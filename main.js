var path = window.location.pathname;
var page = path.split("/").slice(-2, -1);
  function getRandomColor() { //generates light colors.
            color = "hsl(" + Math.random() * 360 + ", 100%, 75%)";
            return color;
        }
$(".active a").css("border-top-color", getRandomColor());

  $(".nav-link").hover(function () {
    if(this.textContent.toUpperCase() !== page.toString().toUpperCase()) {
      $(this).css("border-top-color", getRandomColor());
      $(this).stop().animate({ //executes this while hovering

        borderWidth: "5px", //increase width of border
      }, 200);}
  }, function () { //executes when done hovering
    if(this.textContent.toUpperCase() !== page.toString().toUpperCase()) {
      $(this).stop().animate({
        borderWidth: "0px", //decrease width of border
      }, 200);}
  });

  $(".btn").hover(function () {

            
$(this).css("background-color", "#ff8580"); 


}, function () { //executes when done hovering

$(this).css("background-color", "#80BDFF");
});

  $('#showBanner2').hide(); //initially hide small banner


  if ($(window).scrollTop() > 100 && $(window).width() > 768) { //initial check of how far user has scrolled
    $('#showBanner1').hide();                                 //when refreshing page.
    $("#showBanner2").show();
    //  $(".navbar").css("margin-top", "-50px");
  }
  ///////////////Function to animate banner when scrolling.
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() > 100 && $(window).width() > 768) {
        $('#showBanner1').hide();
        $('#showBanner2').show();
        // $(".navbar").css("margin-top", "-50px");
      }
      else {
        $('#showBanner1').show();
        $('#showBanner2').hide();
        // $(".navbar").css("margin-top", "-80px");

      }
    });
  });
  jQuery(function() {
    $(document).ready(function() {
      // get current URL path and assign 'active' class
      var pathname = window.location.pathname;
      $('.nav-custom > li > a[href="' + pathname + '"]').addClass('active');
    });
  });