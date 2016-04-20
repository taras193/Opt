
var initalized = 0;
function initalize(){
  
  if(initalized == 0){

    $('body').addClass('loaded').addClass('pre-loaded');

    //анимация

    setTimeout(function(){$('.animation').viewportChecker({classToAdd: 'animated'})},0);
    setTimeout(function(){$('.animation1').viewportChecker({classToAdd: 'animated'})},0);
    setTimeout(function(){$('.animation2').viewportChecker({classToAdd: 'animated'})},0);
    setTimeout(function(){$('.animation3').viewportChecker({classToAdd: 'animated'})},0);
    setTimeout(function(){$('.animation4').viewportChecker({classToAdd: 'animated'})},0);


    $('.mouse').click(function(e){e.preventDefault();$("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top+30}, 500);});

      //флаг ициализации
      initalized = 1;
    console.log('initalized');
  }
}

$(document).ready(function() {
  

console.log('document.ready');
  
setTimeout(initalize(),1000);

 
$('.btn_zz').click(function(e) {
    e.preventDefault();
    $('#pop').arcticmodal();
  });
$('.toggle').click(function(e) {
    e.preventDefault();
    
    if($(this).attr('data-page') == "0"){

      $(this).attr('data-page','1')
      $('.sec3 .content[data-pagek="1"]').removeClass('rob');
      $('.sec3 .content[data-pagek="0"]').addClass('rob');

     }
       else{
        $(this).attr('data-page','0')
        $('.sec3 .content[data-pagek="0"]').removeClass('rob');
        $('.sec3 .content[data-pagek="1"]').addClass('rob');
      }
  });


function getURLParameter(name) {return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;} 
    function run_geo(geo_url){
        $.ajax({type: 'GET',url: geo_url,dataType: 'xml',
            success: function(xml) {$(xml).find('ip').each(function(){
            var city = $(this).find('city').text();
            var region = $(this).find('region').text();
            if(city!=region){var ipg = city+', '+region;}else{var ipg = city;}
            $('<input type="hidden" />').attr({name: 'location', class: 'location', value:ipg}).appendTo("form");
        });}});
    }
    $.get("http://ipinfo.io", function(response) {geo_url='http://ipgeobase.ru:7020/geo?ip='+response.ip; run_geo(geo_url);}, "jsonp");
    utm=[];$.each(["utm_source","utm_medium","utm_campaign","utm_term",'source_type','source','position_type','position','added','creative','matchtype'],function(i,v){$('<input type="hidden" />').attr({name: v, class: v, value: function(){if(getURLParameter(v) == undefined)return '-'; else return getURLParameter(v)}}).appendTo("form")});
    $('<input type="hidden" />').attr({name: 'url', value: document.location.href}).appendTo("form");
    $('<input type="hidden" />').attr({name: 'title', value: document.title}).appendTo("form");

    $('input[name="name"]').blur(function() {if($(this).val().length < 3) {$(this).addClass('error-input');}});
    $('input[name="name"]').focus(function() {$(this).removeClass('error-input');});

    $('input[name="phone"]').mask('+7 (999) 999-99-99');
    $('input[name="phone"]').blur(function() {if($(this).val().length != 18) {$(this).addClass('error-input');}});
    $('input[name="phone"]').focus(function() {$(this).removeClass('error-input');});

    function validateEmail(email) {var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;return re.test(email);};

    $('input[name="email"]').blur(function() {if(!validateEmail($(this).val())) {$(this).addClass('error-input');}});
    $('input[name="email"]').focus(function() {$(this).removeClass('error-input');});


    $('form').submit(function(e){
        e.preventDefault();
        $(this).find('input[type="text"]').trigger('blur');
        if(!$(this).find('input[type="text"]').hasClass('error-input')){
            var type=$(this).attr('method');
            var url=$(this).attr('action');
            var data=$(this).serialize();
            $.ajax({type: type, url: url, data: data,
            success : function(){
                $.arcticmodal('close');$('#okgo').arcticmodal();
            }
        }); 
        }
    });

});
$(window).load(function(){
  
  console.log('window.load');

  initalize();

slider1 = $('#sld1').bxSlider({
        infiniteLoop: true,
        nextSelector:'.right-arr',
        prevSelector:'.left-arr',
        controls: true,
        pager:true,
        pagerCustom:'#choose',
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        slideMargin:20,
    onSlideNext:function($slideElement, oldIndex, newIndex){
          $('#sld1 img').addClass('fadeouted');
          $('#sld1 img').removeClass('active');
          $('#sld1 img[data-sld="'+newIndex+'"]').removeClass('fadeouted');
          $('#sld1 img[data-sld="'+newIndex+'"]').addClass('active');
      },
      onSlidePrev:function($slideElement, oldIndex, newIndex){
          $('#sld1 img').addClass('fadeouted');
          $('#sld1 img').removeClass('active');
          $('#sld1 img[data-sld="'+newIndex+'"]').removeClass('fadeouted');
          $('#sld1 img[data-sld="'+newIndex+'"]').addClass('active');
      },
      onSliderLoad:function(){
        $('#sld1 img.active.bx-clone').removeClass('active');
        $('#sld1 img').addClass('fadeouted');
        $('#sld1 img.active').removeClass('fadeouted');
        $('#sld1').addClass('loaded-slider');
      }
    });
});
