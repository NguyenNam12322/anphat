function subscribe_newsletter(a){
    var email = $(a).val();
    if(email.length > 3){
        $.post("/ajax/post.php", { 
            action : 'customer', 
            action_type: 'register-for-newsletter', 
            full_name : 'Khách hàng nhận bản tin', 
            email: email 
        }, function(data) {
            if(data=='success') {
                alert("- Quý khách đã đăng ký thành công !");
                $(a).val("");
            }
            else if(data=='exist'){
                alert("- Email này đã tồn tại");
            }
            else {
                alert('- Lỗi xảy ra, vui lòng kiểm tra lại');
            }
        });
    }else{
        alert('- Vui lòng nhập địa chỉ email');
    }
}



function check_form_contact(){
    var error = "";
    var check_name = document.getElementById('contact_name').value;
    var check_email = document.getElementById('contact_email').value;
    var check_tel = document.getElementById('contact_tel').value;
    var check_message = document.getElementById('contact_message').value;

    if(check_name.length < 4) error += "- Bạn chưa nhập tên\n";
    if(check_email.length < 4) error += "- Bạn chưa nhập email\n";
    if(check_message.length < 4) error += "- Bạn chưa nhập nội dung\n";
  
    if(error == ""){
        $.post("/ajax/customer_contact.php", {
          from: 'ajax',
          contact_name:check_name, 
          contact_email:check_email, 
          contact_tel:check_tel, 
          contact_message:check_message
        },function(data){
          alert("Bạn đã gửi liên hệ thành công");
          location.reload();
          return true;
        });  
    }
    else alert(error);
    return false;
}

function GetCount(ddate, iid,type) {
    amount = ddate //calc milliseconds between dates
    hours = 0;
    mins = 0;
    secs = 0;
    html = "";

    hours = Math.floor(amount / 3600);
    amount = amount % 3600;
    mins = Math.floor(amount / 60);
    amount = amount % 60;
    secs = Math.floor(amount);

    if (type == 'deal') {
        html = `Kết thúc sau
            <span class='js-hour'> `+hours+` </span> 
            <span class='js-minute'> `+mins+` </span> 
            <span class='js-seconds'> `+secs+` </span>
        `;
    }else if (type == 'promotion_price') {
        html = `
            <span style="vertical-align: super;">Còn</span>
            <p class="d-inline-block">
                <span class="d-block js-hour"> `+hours+` </span>
                <span style="font-size: 9px"> GIỜ </span>
            </p>

            <p class="d-inline-block">
                <span class="d-block js-minute"> `+mins+` </span>
                <span style="font-size: 9px"> PHÚT </span>
            </p>

            <p class="d-inline-block">
                <span class="d-block js-seconds"> `+secs+` </span>
                <span style="font-size: 9px"> GIÂY </span>
            </p>
        `;
    } else{
        html = hours + ` -` + mins + ` - ` + secs ;
    }


    $(iid).html(html);

    setTimeout(function() {
        GetCount(ddate-1, iid,type)
    }, 1000);
} 

function change_captcha(holder){
    var unixtime_ms = new Date().getTime();
    $("#"+holder).attr("src","/includes/captcha/captcha.php?v="+unixtime_ms);
}


function check_user_captcha_contact(captcha,id){
    $('#check_captcha_contact').html("... Đang kiểm tra");
    $.post("/ajax/check_user.php", {action : 'check-captcha', captcha : captcha}, function(data){ 
      $('#'+id).html(data); 
    });
} 

//TOOLTIP
function tooltip(){
    var w_tooltip = $("#tooltip").width();
    var h_tooltip = 0;
    var pad = 10;
    var x_mouse = 0; 
    var y_mouse = 0;
    var wrap_left = 0;
    var wrap_right = 0;
    var wrap_top = 0;
    var wrap_bottom = 0;

    $(".p-item .p-img").mousemove(function(e){

        //Khi di chuột vào sp lấy nội dung của tooltip sp đó add vào #tooltip dưới <body>
        content_tooltip = $(this).parents(".p-item").find(".p-tooltip");
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

    $(".p-item .p-img").mouseout(function(){
        $("#tooltip").hide();
    });
}


function open_oauth(service){
    var CURRENT_DOMAIN = 'https://www.anphatpc.com.vn/dang-nhap';
    window.open("/oauth/login.php?service="+service+"&return_url="+CURRENT_DOMAIN, "Login_OAuth", "width=600, height=500");
    //window.open("/login_oauth.php?service="+service+"&return_url=https://www.anphatpc.com.vn/dang-nhap", "Login_OAuth", "width=600, height=500");
}


function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}


function validatePhoneNumber(a){
    var number_regex1 = /^[0]\d{9}$/i;
    var number_regex2 = /^[0]\d{10}$/i;

    if(number_regex1.test(a) == false && number_regex2.test(a) == false) return false;
    return true;
}


function isOnScreen(elem) {
    // if the element doesn't exist, abort
    if( elem.length == 0 ) {
        return;
    }
    var $window = jQuery(window)
    var viewport_top = $window.scrollTop()
    var viewport_height = $window.height()
    var viewport_bottom = viewport_top + viewport_height
    var $elem = jQuery(elem)
    var top = $elem.offset().top
    var height = $elem.height()
    var bottom = top + height

    return  (top >= viewport_top && top < viewport_bottom) ||
            (bottom > viewport_top && bottom <= viewport_bottom) ||
            (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}


function showCartSummary(display_node) {
  	var $status_container = $(display_node);
    $status_container.html('...');
    Hura.Cart.getSummary().then(summary => {
        $status_container.html(summary.total_item);
    });
}