var isAnimating = false;
/*
function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var div_top = $('#Sticky-anchor').offset().top;
  console.log(window_top + " " + div_top)
  if (!isAnimating) {
    isAnimating = true;
    if (window_top > div_top) {
      $('.sticky').addClass('stick');
      $('.sticky #logo').animate({
        width: "110px"
      }, 300, function() {
        isAnimating = false;
      });

    } else {
      $('.sticky').removeClass('stick');
      $('.sticky #logo').animate({
        width: "200px"
      }, 300, function() {
        isAnimating = false;
      });
    }
  }
}
*/

function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var div_top = $('#Sticky-anchor').offset().top;
  console.log(window_top + " " + div_top)
  var difference = window_top - div_top;
  if (difference < 0) {
    $('.sticky').removeClass('stick');
    $('.sticky #logo').css('width', '200px');
  } else if (difference >= 0 && difference <= 100) {
    var w = 200 - (0.6 * difference);
    $('.sticky').addClass('stick');
    $('.sticky #logo').css('width', w + 'px');
  } else {
    $('.sticky').addClass('stick');
    $('.sticky #logo').css('width', '110px');

  }


}


$(function() {
  $(window).scroll(sticky_relocate);
  sticky_relocate();
});






$('a.button').hover(
  function() {
    $(this).stop().animate({
      backgroundColor: 'yellow',
      opacity: '0.5'
    }, '300')
  },
  function() {
    $(this).stop().animate({
      top: '15px',
      opacity: '1'
    }, '300')
  });
