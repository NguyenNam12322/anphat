$(function(){
  
  $("a").each(function(){
    var url = location.href.toLowerCase();
    if (this.href.toLowerCase() == url) {
      $(this).addClass("current");
    }
  });
  
})

function setUserOption(key, value, return_url) {
  window.location = "/ajax/user_set_option.php?key="+key+"&value="+value+"&return_url=" + encodeURIComponent(return_url);
}

/*
$(function(){
  $(".singleSlider.owl-carousel").owlCarousel({
    items : 1,
    margin:0,
    slideSpeed : 3000,
    nav: true,
    center: false,
    autoplay: true,
    autoplayHoverPause: true,
    dots: false,
    loop: true,
    lazyLoad:true,
    responsiveRefreshRate : 200,
    navText: ["<i class='icons_2019 icon-owl-prev'></i>","<i class='icons_2019 icon-owl-next'></i>"]
  })
});
*/

function countDownTime(time,holderHours,holderMins,holderSecs) {
  var h = 12;
  var i = 0;
  var s = 0;
  amount = time;
  hours = 0;
  mins = 0;
  secs = 0;
  out = "";

  hours = Math.floor(amount / 3600);
  amount = amount % 3600;
  mins = Math.floor(amount / 60);
  amount = amount % 60;
  secs = Math.floor(amount);

  $(holderHours).html(hours);
  $(holderMins).html(mins);
  $(holderSecs).html(secs);

  setTimeout(function() {
    countDownTime(time-1,holderHours,holderMins,holderSecs)
  }, 1000);
}


$(document).ready(function(){

  //new WOW().init();

  //toTop------
  $(function() {
    $(window).scroll(function() {
      if($(this).scrollTop() != 0) {
        $('#toTop').fadeIn().addClass("active");
      } else {
        $('#toTop').fadeOut().removeClass('active');
      }
    });

    $('#toTop').click(function() {
      $('body,html').animate({scrollTop:0},800);
    });
  });

  //refreshCache------
  //refreshCache('#slider');
  //refreshCache('#banner_left_scroll');
  //refreshCache('#banner_right_scroll');


  //fixTopMenu------
  //fixTopMenu();

  //fix-html------
  $('.p_offer').each(function () {
    var str = $(this).text();
    html = $.parseHTML(str);
    $(this).html(html);
  });
  $('.hover_offer').each(function () {
    var str = $(this).text();
    html = $.parseHTML(str);
    $(this).html(html);
  });
  //--------
});


$(document).ready(function(){

  refreshCache('.banner_top_pro');


});

//function-----
function refreshCache(x) {
  var a = Math.random();
  $(x+' img').each(function(){
    var b = $(this).attr('src');
    $(this).attr('data-original', $(this).attr('src'));
    $(this).attr('src', b + '?v=' + a);
  });
}

function fixTopMenu() {
  if($('ul.ul_menu').length > 0){
    var L0, R0;
    var tab = $('ul.ul_menu');
    L0 = tab.offset().left;
    R0 = L0 + tab.outerWidth();
    $('.sub_nav').each(function () {
      var L1 = $(this).parent().position().left;
      var W1 = $(this).outerWidth();

      console.log("sub_nav:",L1,W1);
      var R1 = L1 + W1;
      var id = $(this).attr('id');
      if (L1 - L0 < 50) {
        $(this).css('left', L0 - L1 - 1);
      }
      else if (R1 > R0) {
        $(this).css('left', R0 - R1 - 1);
      }
    });
  }
}

function addToShoppingCartStop(e, n, r, t, o) {
  addItemToCart(e, n, r, t); 
  countShoppingCart("shopping_cart_store");
  var a = document.getElementById(o);
  "undefined" != typeof a && null != a && $("#" + o).html("Đã thêm vào giỏ hàng")
}

function GetURLParameter(sParam)
{
  var sPageURL = window.location.search.substring(1);
  var sURLVariables = sPageURL.split('&');
  for (var i = 0; i < sURLVariables.length; i++)
  {
    var sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] == sParam)
    {
      return sParameterName[1];
    }
  }
}

//SLIDE
var currentImage;
var currentIndex = -1;
var interval;
function showImage(index){
  if(index < $('#bigPic img').length){
    var indexImage = $('#bigPic img')[index]
    if(currentImage){
      if(currentImage != indexImage ){
        $(currentImage).css('z-index',2);
        clearTimeout(myTimer);
        $(currentImage).fadeOut(450, function() {
          myTimer = setTimeout("showNext()", 4000);
          $(this).css({'display':'none','z-index':1})
        });
      }
    }
    $(indexImage).css({'display':'block', 'opacity':1});
    currentImage = indexImage;
    currentIndex = index;
    $('#thumbs li').removeClass('active');
    $($('#thumbs li')[index]).addClass('active');

    var showT = index * 297; 
    showT = "-" + showT + "px";
    $('#thumbsTransition').css('margin-left',showT);
  }
}

function showNext(){
  var len = $('#bigPic img').length;
  var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
  showImage(next);
}

var myTimer;

$(document).ready(function() {
  myTimer = setTimeout("showNext()", 4000);
  showNext(); //loads first image
  $('#thumbs li').bind('click',function(e){
    var count = $(this).attr('rel');
    showImage(parseInt(count)-1);
  });
});
//SLIDE END

//format text price

$(document).ready(function(){
  //price_cut(".price_cut i");
  //price_cut(".price_cut span");

  img_to_price();
}); 
$(document).ajaxStop(function(){
  //price_cut(".price_cut.ajax i");
  //price_cut(".price_cut.ajax span");
  ajax_img_to_price();
}); 

function price_cut(a){
  var arr_price;
  $(a).each(function(){
    str_price = $(this).text().trim();
    if(str_price !='Liên hệ' && str_price !='Contact'){
      arr_price = str_price.split("");
      for(i=0;i< arr_price.length;i++){
        if(arr_price[i] == '.') arr_price[i] = ".-";
        if(i> arr_price.length - 4) arr_price[i]="";
        if(i < 3 && arr_price[i] == '.-') arr_price[i] = ".";

      }

      $(this).html(arr_price);

    }
  });
}


function ajax_img_to_price(){

  $(".img_price.ajax span").remove();


  var arr_price;
  $(".img_price.ajax").each(function(){
    str_price = $(this).text().trim();

    if(str_price !='Liên hệ' && str_price !='Contact'){
      arr_price = str_price.split("");
      for(i=0;i< arr_price.length;i++){
        if(arr_price[i] == 0) arr_price[i] = "<span class='price-number-small-0'></span>";
        if(arr_price[i] == 1) arr_price[i] = "<span class='price-number-small-1'></span>";
        if(arr_price[i] == 2) arr_price[i] = "<span class='price-number-small-2'></span>";
        if(arr_price[i] == 3) arr_price[i] = "<span class='price-number-small-3'></span>";
        if(arr_price[i] == 4) arr_price[i] = "<span class='price-number-small-4'></span>";
        if(arr_price[i] == 5) arr_price[i] = "<span class='price-number-small-5'></span>";
        if(arr_price[i] == 6) arr_price[i] = "<span class='price-number-small-6'></span>";
        if(arr_price[i] == 7) arr_price[i] = "<span class='price-number-small-7'></span>";
        if(arr_price[i] == 8) arr_price[i] = "<span class='price-number-small-8'></span>";
        if(arr_price[i] == 9) arr_price[i] = "<span class='price-number-small-9'></span>";
        if(arr_price[i] == '.') arr_price[i] = "<span class='price-number-small-dot'></span>";
        //if(i> arr_price.length - 4) arr_price[i]="";
      }

      $(this).html(arr_price);
    }
  });
}

function img_to_price(){

  $(".img_price span").remove();
  $(".img_price_full span").remove();
  $(".img_price_full_large span").remove();


  var arr_price;
  $(".img_price").each(function(){
    str_price = $(this).text().trim();

    if(str_price !='Liên hệ' && str_price !='Contact'){
      arr_price = str_price.split("");
      for(i=0;i< arr_price.length;i++){
        if(arr_price[i] == 0) arr_price[i] = "<span class='price-number-small-0'></span>";
        if(arr_price[i] == 1) arr_price[i] = "<span class='price-number-small-1'></span>";
        if(arr_price[i] == 2) arr_price[i] = "<span class='price-number-small-2'></span>";
        if(arr_price[i] == 3) arr_price[i] = "<span class='price-number-small-3'></span>";
        if(arr_price[i] == 4) arr_price[i] = "<span class='price-number-small-4'></span>";
        if(arr_price[i] == 5) arr_price[i] = "<span class='price-number-small-5'></span>";
        if(arr_price[i] == 6) arr_price[i] = "<span class='price-number-small-6'></span>";
        if(arr_price[i] == 7) arr_price[i] = "<span class='price-number-small-7'></span>";
        if(arr_price[i] == 8) arr_price[i] = "<span class='price-number-small-8'></span>";
        if(arr_price[i] == 9) arr_price[i] = "<span class='price-number-small-9'></span>";
        if(arr_price[i] == '.') arr_price[i] = "<span class='price-number-small-dot'></span>";
        //if(i> arr_price.length - 4) arr_price[i]="";
      }

      $(this).html(arr_price);
    }
  });


  $(".img_price_full").each(function(){
    str_price = $(this).text().trim();

    if(str_price !='Liên hệ' && str_price !='Contact'){
      arr_price = str_price.split("");

      for(i=0;i< arr_price.length;i++){
        if(arr_price[i] == 0) arr_price[i] = "<span class='price-number-small-0'></span>";
        if(arr_price[i] == 1) arr_price[i] = "<span class='price-number-small-1'></span>";
        if(arr_price[i] == 2) arr_price[i] = "<span class='price-number-small-2'></span>";
        if(arr_price[i] == 3) arr_price[i] = "<span class='price-number-small-3'></span>";
        if(arr_price[i] == 4) arr_price[i] = "<span class='price-number-small-4'></span>";
        if(arr_price[i] == 5) arr_price[i] = "<span class='price-number-small-5'></span>";
        if(arr_price[i] == 6) arr_price[i] = "<span class='price-number-small-6'></span>";
        if(arr_price[i] == 7) arr_price[i] = "<span class='price-number-small-7'></span>";
        if(arr_price[i] == 8) arr_price[i] = "<span class='price-number-small-8'></span>";
        if(arr_price[i] == 9) arr_price[i] = "<span class='price-number-small-9'></span>";
        if(arr_price[i] == '.') arr_price[i] = "<span class='price-number-small-dot'></span>";
        if(arr_price[i] == "đ") arr_price[i] = "";
      }
      $(this).html(arr_price);
    }
  });

  $(".img_price_full_large").each(function(){
    str_price = $(this).text().trim();

    if(str_price !='Liên hệ' && str_price !='Contact'){
      arr_price = str_price.split("");

      for(i=0;i< arr_price.length;i++){
        if(arr_price[i] == 0) arr_price[i] = "<span class='x-price-number-small-0'></span>";
        if(arr_price[i] == 1) arr_price[i] = "<span class='x-price-number-small-1'></span>";
        if(arr_price[i] == 2) arr_price[i] = "<span class='x-price-number-small-2'></span>";
        if(arr_price[i] == 3) arr_price[i] = "<span class='x-price-number-small-3'></span>";
        if(arr_price[i] == 4) arr_price[i] = "<span class='x-price-number-small-4'></span>";
        if(arr_price[i] == 5) arr_price[i] = "<span class='x-price-number-small-5'></span>";
        if(arr_price[i] == 6) arr_price[i] = "<span class='x-price-number-small-6'></span>";
        if(arr_price[i] == 7) arr_price[i] = "<span class='x-price-number-small-7'></span>";
        if(arr_price[i] == 8) arr_price[i] = "<span class='x-price-number-small-8'></span>";
        if(arr_price[i] == 9) arr_price[i] = "<span class='x-price-number-small-9'></span>";
        if(arr_price[i] == '.') arr_price[i] = "<span class='x-price-number-small-dot'></span>";
        if(arr_price[i] == "đ") arr_price[i] = "";
      }
      $(this).html(arr_price);
    }
  });

}

//Compare Pro
$(document).ready(function(){
  $("#product_compare_list").val("");
  $("input.p_check").removeAttr("checked");
  $("input.p_check").click(function(){
    if($(this).is(":checked")){
      $(".compare_area").prepend("<a href='#' class='"+$(this).attr("id")+"'><img src='"+$(this).attr("name")+"' alt='' /><i class='bg icon_del_compare'></i></a>");
    }else{
      $("."+$(this).attr("id")).remove();
    }

    $(".compare_area a").click(function(){
      $("#"+$(this).attr("class")).click();
      $("#"+$(this).attr("class")).removeAttr("checked");
      $(this).remove();
      return false;
    });
    if($(".compare_area a").length > 2) $(".btn_compare").show();
    else $(".btn_compare").hide();
  });

});

//Conver format price to price
function convertPrice(formatPrice){
  str = formatPrice.substring(0,formatPrice.length - 4);
  str1 = str.replace('.','');
  str2 = str1.replace('.','');
  str3 = str2.replace('.','');

  return str3;
}

function formatCurrency(a) {
  var b = parseFloat(a).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1.").toString();
  var len = b.length;
  b = b.substring(0, len - 3);
  return b;
}


//POPUP
var urlLogin = "";

function confirmimage(url){
  //$('select').hide();
  $('.popup').show();
  $('.overlay').show();
  //window.location = url;
  urlLogin = url;
}
function closePop(){
  //$('select').show();
  $('.popup').hide();
  $('.overlay').hide();
}
function confirmLogin(url){
  //$('select').hide();
  $('.popup_login').show();
  $('.overlay').show();
  //window.location = url;
  urlLogin = url;
}

function forwardLogin(){
  window.location = 'http://aha.vn';
}
$(document).keypress(function(e) {

  // ESCAPE key pressed
  if (escape(e.keyCode) == 27) {
    closePop();
    windown.close();
  }
});


/***************************/
//@Author: Adrian "yEnS" Mato Gondelle
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!
/***************************/

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;

//loading popup with jQuery magic!
function loadPopup(){
  //loads popup only if it is disabled
  if(popupStatus==0){
    $("#backgroundPopup").css({
      "opacity": "0.7"
    });
    $("#backgroundPopup").fadeIn("slow");
    $("#popupContact").fadeIn("slow");
    popupStatus = 1;
  }
}

//disabling popup with jQuery magic!
function disablePopup(){
  //disables popup only if it is enabled
  if(popupStatus==1){
    $("#backgroundPopup").fadeOut("slow");
    $("#popupContact").fadeOut("slow");
    popupStatus = 0;
  }
}

//centering popup
function centerPopup(){
  //request data for centering
  var windowWidth = document.documentElement.clientWidth;
  var windowHeight = document.documentElement.clientHeight;
  var popupHeight = $("#popupContact").height();
  var popupWidth = $("#popupContact").width();
  //centering
  $("#popupContact").css({
    "position": "absolute",
    "top": windowHeight/2-popupHeight/2,
    "left": windowWidth/2-popupWidth/2
  });
  //only need force for IE6

  $("#backgroundPopup").css({
    "height": windowHeight
  });

}


//CONTROLLING EVENTS IN jQuery
$(window).load(function(){

  //LOADING POPUP
  //centering with css
  centerPopup();
  //load popup
  loadPopup();
  //Click the button event!
  $("#button").click(function(){
    //centering with css
    centerPopup();
    //load popup
    loadPopup();
  });

  //CLOSING POPUP
  //Click the x event!
  $("#popupContactClose").click(function(){
    disablePopup();
  });
  //Click out event!
  $("#backgroundPopup").click(function(){
    disablePopup();
  });
  //Press Escape event!
  $(document).keypress(function(e){
    if(e.keyCode==27 && popupStatus==1){
      disablePopup();
    }
  });

});

//TOOLTIP
function tooltip(){
  var w_tooltip = $("#tooltip").width();;
  var h_tooltip = 0;
  var pad = 10;
  var x_mouse = 0; var y_mouse = 0;
  var wrap_left = 0;
  var wrap_right = 0;
  var wrap_top = 0;
  var wrap_bottom = 0;
  $(".product-list-2019 .p-item-2019 .p-img-2019").mousemove(function(e){

    //Khi di chuột vào sp lấy nội dung của tooltip sp đó add vào #tooltip dưới <body>
    content_tooltip = $(this).parents(".p-item-2019").find(".hover_content_pro");
    if(content_tooltip.length == 0){
    	return;
      	$("#tooltip").hide();
    }
    $("#tooltip").html(content_tooltip.html());
    wrap_left = 0;
    wrap_top = $(window).scrollTop();
    wrap_bottom = $(window).height();
    wrap_right = $(window).width();
    x_mouse = e.pageX;
    y_mouse = e.pageY;
    h_tooltip = $("#tooltip").height();

    //Kiểm tra tooltip chạm cạnh phải màn hình
    if(x_mouse + w_tooltip > wrap_right) $("#tooltip").css("left",x_mouse - w_tooltip - pad);
    else $("#tooltip").css("left",x_mouse + pad);

    //Kiểm tra tooltip chạm cạnh trên màn hình:
    if(y_mouse - h_tooltip < wrap_top) $("#tooltip").css("top",wrap_top);
    else $("#tooltip").css("top",y_mouse - h_tooltip - pad);
    $("#tooltip").show();
  });
  $(".p-item-2019 .p-img-2019").mouseout(function(){
    $("#tooltip").hide();
  });
}

$(document).ready(function(e) {
  tooltip();
});

$(document).ajaxStop(function(e) {
  tooltip();
});


function formatCurrency(a) {
  var b = parseFloat(a).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1.").toString();
  var len = b.length;
  b = b.substring(0, len - 3);
  return b;
}





function getArticleTopHomeNews(url,holder,limit){
  var html = "";
  $.getJSON(url, function(result){
    var data = result.list;
    Object.keys(data).forEach(function(key, keyIndex) {
      if(keyIndex < limit && 1 < 2){
        var data = result.list;
        var title = data[keyIndex].title;
        var url = data[keyIndex].url;
        var image = data[keyIndex].image.original;

        html+='<li>';
        html+='<a href="'+url+'"><img src="'+image+'" alt="'+url+'" /></a>';
        html+='<div><a href="'+url+'" class="name">'+title+'</a></div>';
        html+='</li>';
      }
    });
    $(holder).html(html);
  });
}  

//Cookie
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?a(require("jquery")):a(jQuery)}(function(a){function b(a){return h.raw?a:encodeURIComponent(a)}function c(a){return h.raw?a:decodeURIComponent(a)}function d(a){return b(h.json?JSON.stringify(a):String(a))}function e(a){0===a.indexOf('"')&&(a=a.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return a=decodeURIComponent(a.replace(g," ")),h.json?JSON.parse(a):a}catch(b){}}function f(b,c){var d=h.raw?b:e(b);return a.isFunction(c)?c(d):d}var g=/\+/g,h=a.cookie=function(e,g,i){if(void 0!==g&&!a.isFunction(g)){if(i=a.extend({},h.defaults,i),"number"==typeof i.expires){var j=i.expires,k=i.expires=new Date;k.setTime(+k+864e5*j)}return document.cookie=[b(e),"=",d(g),i.expires?"; expires="+i.expires.toUTCString():"",i.path?"; path="+i.path:"",i.domain?"; domain="+i.domain:"",i.secure?"; secure":""].join("")}for(var l=e?void 0:{},m=document.cookie?document.cookie.split("; "):[],n=0,o=m.length;o>n;n++){var p=m[n].split("="),q=c(p.shift()),r=p.join("=");if(e&&e===q){l=f(r,g);break}e||void 0===(r=f(r))||(l[q]=r)}return l};h.defaults={},a.removeCookie=function(b,c){return void 0===a.cookie(b)?!1:(a.cookie(b,"",a.extend({},c,{expires:-1})),!a.cookie(b))}});
