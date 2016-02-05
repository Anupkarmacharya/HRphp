<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script
src="Index/googlemap.js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(28.7,85.33),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="http://famousthemes.com/gomobile/images/apple-touch-icon.png">
<link rel="apple-touch-startup-image" href="http://famousthemes.com/gomobile/images/apple-touch-startup-image-320x460.png">
<meta name="author" content="FamousThemes">
<meta name="description" content="GoMobile - A next generation web app theme">
<meta name="keywords" content="mobile web app, mobile template, mobile design, mobile app design, mobile app theme, mobile wordpress theme, my mobile app">
<title>HR Sewa</title>
<link type="text/css" rel="stylesheet" href="Index/style.css">
<link type="text/css" rel="stylesheet" href="Index/metro.css">
<link type="text/css" rel="stylesheet" href="Index/idangerous.css">
<link type="text/css" rel="stylesheet" href="Index/swipebox.css">
<link href="Index/css.css" rel="stylesheet" type="text/css">
<div class="fit-vids-style">
<style>               
.fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position: absolute;top: 0;left: 0;width: 100%;height: 100%;                          }                                       </style></div><script type="text/javascript" src="Index/jquery-1.js"></script>
<script src="Index/jquery_005.js" type="text/javascript"></script>
</head>
<body>
  <div id="header">
      <div class="gohome radius20"><a href="index.html"><img src="Index/home.png" alt="" title=""></a></div>
      <div class="gomenu radius20"><a href="#" onclick="swiperParent.swipeTo(8);"><img src="Index/contact.png" alt="" title=""></a></div>
  </div>
  <div class="swiper-container swiper-parent">
    <div style="width: 7200px; height: 492px;" class="swiper-wrapper">
   
    
      
      <!--Page 1 content-->
      <div style="width: 800px; height: 492px;" class="swiper-slide sliderbg purple">
      <div class="swiper-container swiper-nested swiper-free-mode">
               <div style="width: 800px; height: 1935px;" class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                              <div class="slide-inner">
                                        <div class="pages_container">
                                        <h2 class="page_title">HR Organization</h2>
                                        <div class="image_single">
                                        <div id="googleMap" style="width:700px;height:424px;" alt="View Map"></div>
</div>
                                        <div class="image_caption gray gray_borderbottom">NHRC</div>
                                        <h3>National Human Rights Commision</h3>
                                        <blockquote>NHRC is a Hr place for conservation. <span class="quote_author">-Steve Jobs</span></blockquote>
                                        
                                        <h3>Just a simple listing</h3> 	
                                        <ul class="listing">
                                        <li>Address:Babarmahal,Kathmandu</li>
                                        <li>Contact:<a href="tel:123456789" class="call_button">016244</a></li>
                                        <li>Website:<a href="www.nhrc.com" class="call_button">www.nhrc.com</a></li>
                                        </ul>
                                      
                                        <!--End of page container-->
                              </div>
                    </div>
              </div>
     </div>
    </div>
    <div class="pagination">
    <!--<span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span>-->
    <!--<span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span>
    <span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span>
    <span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span>
    <span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span>-->
    </div>
  </div>
<script type="text/javascript" src="Index/jquery_004.js"></script>
<script type="text/javascript" src="Index/idangerous.js"></script>
<script type="text/javascript" src="Index/idangerous_002.js"></script>
<script type="text/javascript" src="Index/jquery_002.js"></script>
<script type="text/javascript" src="Index/jquery_003.js"></script>
<script type="text/javascript" src="Index/code.js"></script>
<script type="text/javascript" src="Index/load.js"></script>
<!--Twitter Feed-->
<script type="text/javascript" src="Index/jquery.js" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
var $ = jQuery.noConflict();  
jQuery(function($){
$(".tweet").tweet({
  modpath: 'js/twitter/',
  join_text: "auto",
  username: "sindevothemes",
  count: 5,
  auto_join_text_default: "we said,",
  auto_join_text_ed: "we",
  auto_join_text_ing: "we were",
  auto_join_text_reply: "we replied",
  auto_join_text_url: "we were checking out",
  loading_text: "loading tweets..."
});
});
</script>
<script type="text/javascript">  
function ajaxContact(theForm) {
var $ = jQuery;
$('#loader').fadeIn();
var formData = $(theForm).serialize(),
note = $('#Note');
$.ajax({
type: "POST",
url: "contact-send.php",
data: formData,
success: function(response) {
if ( note.height() ) {			
note.fadeIn('fast', function() { $(this).hide(); });
} else {
note.hide();
}
$('#LoadingGraphic').fadeOut('fast', function() {
//$(this).remove();
if (response === 'success') {
	
	$('#formtitle').hide();
	
}
// Message Sent? Show the 'Thank You' message and hide the form
result = '';
c = '';
if (response === 'success') { 
	result = 'Your message has been sent. Thank you!';
	c = 'success';
} else {
	result = response;
	c = 'error';
}
note.removeClass('success').removeClass('error').text('');
var i = setInterval(function() {
	if ( !note.is(':visible') ) {
		note.html(result).addClass(c).slideDown('fast');
		clearInterval(i);
	}
}, 40);    
}); // end loading image fadeOut
}
});
return false;
}
</script> 

</body></html>