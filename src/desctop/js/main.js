$('<link rel=stylesheet type=text/css href=css/normalize.min.css><link rel=stylesheet type=text/css href=css/style.css>').appendTo('head');
//мобильное устройство?
var isMobile = false; 
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
isMobile = true;
}

if (isMobile == true) {
  $('.animation,.animation1,.animation2,.animation3,.animation4').addClass('animated');
  $('<style>.animation,.animation,.animation1,.animation2,.animation3,.animation4 *{transition:0s all 0s!important;animation-duration:0s!important;animation-delay:0s!important}section .site-nav.down,section .site-nav.up{display:none!important}header{height:800px!important}footer p{margin: 20px 9% 0px;}</style>').appendTo('head');
}
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


    $('.mouse').click(function(e){e.preventDefault();$("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top+80}, 500);});

      //флаг ициализации
      initalized = 1;
    console.log('initalized');
  }
}

$(document).ready(function() {
  
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    
$('body').addClass('loaded');
  }
  else{

setTimeout(function(){
    if(!$('body').hasClass('loaded')) {
      $('body').addClass('loaded');
      initfullpage();
    };
  },3000);

  }
console.log('document.ready');
  
setTimeout(initalize(),1000);

 
$('.btn_zz').click(function(e) {
    e.preventDefault();
    $('#pop').arcticmodal();
  });

$('.btn_zz2').click(function(e) {
    e.preventDefault();
    $('#pop2').arcticmodal();
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

$('.togl').click(function() {
  $('.toggle').attr('data-page','0')
   $('.sec3 .content[data-pagek="0"]').removeClass('rob');
        $('.sec3 .content[data-pagek="1"]').addClass('rob');
  });
$('.togr').click(function() {
  $('.toggle').attr('data-page','1')
   $('.sec3 .content[data-pagek="1"]').removeClass('rob');
    $('.sec3 .content[data-pagek="0"]').addClass('rob');
  });
$(".fonbg").hover(function() {
    $(".fonbg").removeClass("active");
    $(this).addClass("active");
    if ("1" == $(this).data("dac")) $(".bg_sl").addClass("im1");
    else $(".bg_sl").removeClass("im1")
      if ("2" == $(this).data("dac")) $(".bg_sl").addClass("im2");
    else $(".bg_sl").removeClass("im2")
    if ("3" == $(this).data("dac")) $(".bg_sl").addClass("im3");
    else $(".bg_sl").removeClass("im3")
      if ("4" == $(this).data("dac")) $(".bg_sl").addClass("im4");
    else $(".bg_sl").removeClass("im4")
      if ("5" == $(this).data("dac")) $(".bg_sl").addClass("im5");
    else $(".bg_sl").removeClass("im5")
  });

var calc_var = 5;
$('.btn-big,.btn-round,.back').click(function(e){
  e.preventDefault();
  var next_step=$(this).data('next-step');
  if ($(this).hasClass('var')){calc_var = $(this).data('var')}
    $('.calc.active').removeClass('active').addClass('disactive');
    $('.btn-round.active').removeClass('active').addClass('disactive');
  if (next_step=="2" || next_step=="1") {
    $('.calc[data-step="'+next_step+'"][data-var="'+calc_var+'"]').addClass('active').removeClass('disactive');  
  }else{
    $('.calc[data-step="'+next_step+'"]').removeClass('disactive').addClass('active');    
  }
  $('.btn-round[data-next-step="'+next_step+'"]').removeClass('disactive').addClass('active');   
  if (next_step=="3"){
    $('.btns').fadeOut();
  }else{
    $('.btns').fadeIn();
  }
  if (next_step=="0"){
    $('.calc-w .back').fadeOut();
    $('.calc').removeClass('disactive');
    $('.calc[data-step="'+next_step+'"]').removeClass('disactive').addClass('active');
  }else{
    $('.calc-w .back').fadeIn();
  }
  if ($(this).hasClass('btn-big')){
    $('input[data-step="'+$(this).data('next-step')+'"]').val($(this).text());
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
            var name=$(this).find('input[name="name"]').val();
            var phone=$(this).find('input[name="phone"]').val();
            if ($(this).find('input[name="email"]').length > 0) {
              var email=$(this).find('input[name="email"]').val();
            }else{
              var email = 'noreply@for.test';
            }
         if((!validateEmail(email))&&($.trim(name) == '' || name == null || name == undefined) && ($.trim(phone) == '' || phone == null || phone == undefined || phone == '+7  ' || phone.length != 18))
        {
          $('#error .center').html("Пожалуйста, заполните все поля");
          $('#error').arcticmodal();
        }
        else if(($.trim(phone) == '' || phone == null || phone == undefined || phone == '+7  ' || phone.length != 18)&&(!validateEmail(email)))
        {
          $('#error .center').html("Пожалуйста, введите номер Вашего телефона и email");
          $('#error').arcticmodal();
        } 
        else if(($.trim(name) == '' || name == null || name == undefined)&&(!validateEmail(email)))
        {
          $('#error .center').html("Пожалуйста, введите имя и email");
          $('#error').arcticmodal();
        } 
        else if (($.trim(name) == '' || name == null || name == undefined) && ($.trim(phone) == '' || phone == null || phone == undefined || phone == '+7  ' || phone.length != 18))
        {
          $('#error .center').html("Пожалуйста, введите Ваши имя и телефон");
          $('#error').arcticmodal();
        }
        else if($.trim(name) == '' || name == null || name == undefined)
        {
          $('#error .center').html("Пожалуйста, введите Ваше имя");
          $('#error').arcticmodal();
        }
        else if($.trim(phone) == '' || phone == null || phone == undefined || phone == '+7  ' || phone.length != 18)
        {
          $('#error .center').html("Пожалуйста, введите номер Вашего телефона");
          $('#error').arcticmodal();
        } 
        if(!$(this).find('input[type="text"]').hasClass('error-input')){
            var type=$(this).attr('method');
            var url=$(this).attr('action');
            var data=$(this).serialize();
            var track_event=$(this).find('input[name="event"]').val();
            $.ajax({type: type, url: url, data: data,
            success : function(){
                $.arcticmodal('close');
                $('#okgo').arcticmodal();
                yaCounter37875080.reachGoal(track_event);
                ga('send','event','submit',track_event);
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
