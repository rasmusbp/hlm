(function ($) { 

$(document).ready(function() {

if ($.browser.msie && parseInt($.browser.version) <= 8) {
  $('body').append('<div id="ie-notice"><p>Dette website opleves bedst med den nyeste version af Google Chrome. <a href="https://www.google.com/chrome?brand=ECWB&installdataindex=welcome-ntp&hl=da">Klik her for at downloade Google Chrome</a></p></div>');
  $('body').css({'margin-top': '43px'});
}


var bt = 500;
var bEase = 'easeOutQuad';
var navfade = 100;
var scrollLenght = 150;

$('.info .bio').css({ opacity: 0});


//--- interaction main navigation
//$("#nav li a").hover(
//  function () {
//    $('h2',this).animate({opacity:1});
//  }, 
//  function () {
//	$('h2',this).animate({opacity:0.7});
//  }
//);

$("#nav li a.nav-projects").click(function () {
    $('.mp-projects').show();
    $('.mp-services').hide();
    $('.mp-about').hide();
    return false; 
});


$("#nav li a.nav-services").click(function () {
    $('.mp-services').show();
    $('.mp-projects').hide();
    $('.mp-about').hide();
    return false; 
});

$("#nav li a.nav-about").click(function () {
    $('.mp-about').show();
    $('.mp-projects').hide();
    $('.mp-services').hide();
    return false; 
});

// hide minipages
$(".mp-projects").bind( "clickoutside", function(event){
	$('.mp-projects').hide();
});
$(".mp-services").bind( "clickoutside", function(event){
	$('.mp-services').hide();
});
$(".mp-about").bind( "clickoutside", function(event){
	$('.mp-about').hide();
});

//--- teamboxes
$(".teamlist .teambox").hover(
  function () {
   	$('.info',this).stop().animate({ 
   		height: "178px"
   		});
   	$('.info .bio',this).stop().animate({ opacity: 1}, 600);
  }, 
  function () {
  	$('.info',this).stop().animate({ 
  		height: "35px"
  		});
	$('.info .bio',this).stop().animate({ opacity: 0}, 200);
});

//--- flash video fallback

//--- subnav
$('.teamlink').click(function () {
      $('html,body').animate({scrollTop: $("#teamtarget").offset().top},'slow');
});
$('.aboutlink').click(function () {
      $('html,body').animate({scrollTop: $("#abouttarget").offset().top},'slow');
});
$('.clientlink').click(function () {
      $('html,body').animate({scrollTop: $("#clienttarget").offset().top},'slow');
});


$(window).scroll(function(e){ 
  $el = $('#subnav'); 
  if ($(this).scrollTop() > scrollLenght && $el.css('position') != 'fixed'){ 
    $('#subnav').css({'position': 'fixed', 'top': '0px'});
    $('#subnav').animate({'top': '-20px'}); 
  } 
  if ($(this).scrollTop() < scrollLenght && $el.css('position') == 'fixed'){ 
    $('#subnav').css({'position': 'relative'});
    $('#subnav').animate({'top': '0px'});
  } 
});

//---- Client box frontpage
$('.view-display-id-clients_front .view-content').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
});

}); // <-- Document Ready

})(jQuery);