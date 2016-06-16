jQuery(function($){
	'use strict';

  var w_width = $(window).width();

  // $('.frame').waitForImages(function() {

  //   var options = {
  //       horizontal: 1,
  //       itemNav: 'basic',
  //       speed: 300,
  //       mouseDragging: 1,
  //       touchDragging: 1
  //   };

  //   var frame = new Sly('.frame', options).init();

  //   var $frame = $('.frame');

  // 	// -------------------------------------------------------------
  // 	//   Centered Navigation
  // 	// -------------------------------------------------------------
  // 	(function () {

  // 		// Call Sly on frame
  // 		$frame.sly({
  // 			horizontal: 1,
  // 			itemNav: 'centered',
  // 			smart: 1,
  // 			activateOn: 'click',
  // 			mouseDragging: 1,
  // 			touchDragging: 1,
  // 			releaseSwing: 1,
  // 			startAt: 4,
  // 			speed: 300,
  // 			elasticBounds: 1,
  // 			easing: 'easeOutExpo',
  // 			dragHandle: 1,
  // 			dynamicHandle: 1,
  // 			clickBar: 1,


  // 		});
  // 	}());

  //   $('.frame').sly('on', 'load move');

  //   frame.moveBy(30);

  // });

// $('.map .pin').click(function(){
//   $('.pick').slideToggle(300);
// });

//Swappable image gallery code
$('.pick').each(function(i){
  var $this = $(this);

  $(this).find('ul.image_list li').click(function(e){

  e.preventDefault();
  var image_url = $(this).find('img').attr('data-src');
  $this.find('img.feature').attr('src', image_url);
  return false;
  });
});

// Smooth page scroll
  // https://css-tricks.com/snippets/jquery/smooth-scrolling/

  $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: (target.offset().top-50)
        }, 800);
        return false;
      }
    }
  });
});

if (w_width > 768){

$('.pin').click(function(){
  var _class = $(this).attr('class');
  var _classI = _class.substring(4);
  var _results = $('.results').offset().top;
  _classI = '.'+ _classI;

  console.log(_classI);

  // $('body, html').animate({
  //   scrollTop: _results-50
  //   },700);

  //$.scrollTo(_results, 1500);
  //$('.results').find('div'+_classI).slideDown(500);
  //$('.pick').not('div'+_classI).slideUp(500);
  //$('.results').not('div'+_classI).slideUp(500);
})

var st_clairesville = $('.results div.st-clairesville').size();
var wheeling = $('.results div.wheeling').size();
var bridgeport = $('.results div.bridgeport').size();
var waynesburg = $('.results div.wanynesburg').size();
var steubenville = $('.results div.steubenville').size();
var waynesburg = $('.results div.waynesburg').size();


$('.pin.st-clairesville')
  .css({'width': 10+(5*st_clairesville), 'height':10+(5*st_clairesville)})
  .attr('data-count',st_clairesville);

$('.pin.wheeling')
  .css({'width': 10+(5*wheeling), 'height':10+(5*wheeling)})
  .attr('data-count',wheeling);

$('.pin.bridgeport')
  .css({'width': 10+(5*bridgeport), 'height':10+(5*bridgeport)})
  .attr('data-count',bridgeport);

$('.pin.waynesburg')
  .css({'width': 10+(5*waynesburg), 'height':10+(5*waynesburg)})
  .attr('data-count',waynesburg);

$('.pin.steubenville')
  .css({'width': 10+(5*steubenville), 'height':10+(5*steubenville)})
  .attr('data-count', steubenville);

//Pin tooltips

$('.map').find('.pin').each(function(){
  var _attr = $(this).attr('data-count');
  var _tooltip = $(this).find('.tooltip');
  console.log(_attr);
  var hotel = '';

  if(_attr > 1){
    hotel = 'hotels';
  }else{
    hotel = 'hotel';
  }

  //$(_tooltip).append(' - ' + _attr + ' ' + hotel);

  var ttp_width = $(_tooltip).width();

  $(_tooltip).css({'width':ttp_width+10})

});


$('.map .pin').hover(function(){
  var $this = $(this);
  var tt_width = $(this).find('.tooltip_container').width();
  var tt_height = $(this).find('.tooltip_container').height();
  var pin_h = $(this).height();
  var pin_w = $(this).width();

  console.log(tt_height);
  
 //$(this).find('.tooltip_container').css({'top':-((tt_height)+15),'left':-(((tt_width+pin_w)-10)/2)});
  //$(this).find('.tooltip_container').css({'top':-((tt_height)+15),'left':'-25px'});
  $(this).find('.tooltip_container').css({'left':'-25px'});
  $(this).find('.tooltip_container').css({'top':-((tt_height)+5)});
  
},function(){
  var $this = $(this);
  //$(this).find('.tooltip').not($this).css({'left':'-9999px'});
  //$(this).find('.tooltip').removeClass('open');
  $(this).find('.tooltip_container').css({'left':'-9999px'});
});

var p_length = $(this).size();


}

function hidePicks(){

  var w_width = $(window).width();

if (w_width < 768){
  $('.pick').removeClass('hide');
}else if(w_width > 768){
  $('.pick').addClass('hide');
}
}

//$(window).load(hidePicks);
//$(window).resize(hidePicks);

// $('.image_list li').click(function(e){
//   //console.log('You clicked the image!');
//   e.preventDefault();
//   var image_url = $(this).find('img').attr('data-src');
//   console.log(image_url);
//   $('img.feature').attr('src', image_url);
// });

});
