


<!DOCTYPE html>
<html lang="vn" itemscope itemtype="https://schema.org/WebPage">

<head>
  
    <title>site máy tính </title>
    <meta name="keywords" content="máy tính, pc chơi game, linh kiện máy tính, PC đồ họa, máy tính đồng bộ, mini pc, gaming laptop, màn hình máy tính, máy in, máy in canon, máy in hp, máy hủy tài liệu, máy chấm công, gaming gear, ghế chơi game, w"/>
    <meta name="description" content="An Phát Computer cung cấp hàng CHÍNH HÃNG - Giá tốt nhất thị trường. Bảo hành nhanh chóng, khuyến mại lớn, trả góp 0%. Máy tính đồng bộ, máy tính chơi game, gaming laptop, máy in, máy chiếu, máy hủy tài liệu, máy chấm công, thiết bị văn phòng, linh kiện hi-end, thiết bị cho game thủ. Cửa hàng máy tính An Phát Computer, anphatpc, anphatpc.com.vn"/>
    
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" /> 
    <meta name="p:domain_verify" content="0aedde8801eaafd3325e9b63c180dcdf"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="template/2017v1/images/anphatpc.png" type="image/x-icon" />
  
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="content-language" content="vi-vn" />
    <link rel="alternate" type="application/rss+xml" title="RSS Feed for" href="product.rss" />
    
        <link rel="canonical" href="index.html" >
        
    
    <meta name="robots" content="index,follow" />
    <meta content="DOCUMENT" name="RESOURCE-TYPE" />
    <link rel="shortcut icon" href="{{ asset('template/anphat_2020v2/images/favicon.png')}}" type="image/x-icon" />
  
    
    <p style="display:none">Hello</p>
    
  
    
    <meta property="og:title" content="An Phát Computer Showroom máy tính được yêu thích nhất 2023 - anphatpc.com.vn">
    <meta property="og:description" content="An Phát Computer cung cấp hàng CHÍNH HÃNG - Giá tốt nhất thị trường. Bảo hành nhanh chóng, khuyến mại lớn, trả góp 0%. Máy tính đồng bộ, máy tính chơi game, gaming laptop, máy in, máy chiếu, máy hủy tài liệu, máy chấm công, thiết bị văn phòng, linh kiện hi-end, thiết bị cho game thủ. Cửa hàng máy tính An Phát Computer, anphatpc, anphatpc.com.vn">
    
  
    <meta property="og:url"         content="index.html" />
    <meta property="og:type"        content="website" />
  
    
    <meta property="og:image" content="media/news/1302_SNAP---935x5282.jpg">
    
    <meta property="og:image:alt" content="An Phát Computer Showroom máy tính được yêu thích nhất 2023 - anphatpc.com.vn">  
    
    <!-- <meta property="fb:app_id" content="2624938551090448" /> -->
    <!--<meta property="fb:admins" content="1451935009"/> -->
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    
    <!-- <link rel="stylesheet" href="/template/anphat_2020v2/script/style.css?v=4" type="text/css"/> -->

    <!-- CSS giao diện 10/2020 -->
    <link rel="stylesheet" href="{{ asset('template/anphat_2020v2/script/lib_2020.css')}} " type="text/css"/>
    <link rel="stylesheet" href="{{ asset('template/anphat_2020v2/script/web_pc_2020f9fa.css?v=28.12.2022.12')}}" type="text/css"/>
  <link rel="stylesheet" href="{{ asset('template/anphat_2020v2/script/icon_marketing5e1f.css?v=2')}}" type="text/css"/>

    <!-- End CSS giao diện 10/2020 -->

  
    <meta name="ahrefs-site-verification" content="7fb5015dcaaf65202e03e234b374bca025465cf187a575b5adbede5f5f68b9d1">

</script>


<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1462431280697971&amp;ev=PixelInitialized" /></noscript>

<meta http-equiv="content-language" content="vi" />
<link rel="alternate" href="index.html" hreflang="vi-vn" />


<?php  
    $requestcheck = \Request::route();

    if(!empty($requestcheck)){
         $nameRoute = \Request::route()->getName();
    }
    else{
         $nameRoute = '';
    }

    $group = Cache::get('groups');
   

  ?>
 @if($nameRoute==='homeFe')  
<style type="text/css">
     .header-menu-holder{
        display: block;
    }
</style>  
@else

<style type="text/css">
    .header-menu-holder{
        display: none;
    }
</style>

@endif

<style type="text/css">
    #showPop{
        display: none;
    }


</style>

<?php
    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
    $number_cart = count($cart);
   
 ?>   


@stack('style')



</head>
<body >
  
  
  
    <div class="popup-common" id="popup-lien-he" style="display: none;">
  <div class="title-popup"><span>Liên hệ với chúng tôi</span><i class="close" onclick="closePopup()">x</i></div>
  <div class="content-popup">
    <form>
      <table width="100%" class="tbl-common">
        <tbody><tr>
          <td><b>Tên đầy đủ</b></td>
          <td><input type="text" size="50" name="contact_name" id="contact_name_popup" class="inputText" autocomplete="off"></td>
        </tr>
        <tr>
          <td><b>Email</b></td>
          <td><input type="text" size="50" name="contact_email" id="contact_email_popup" class="inputText" autocomplete="off"></td>
        </tr>
        <tr>
          <td><b>Điện thoại</b></td>
          <td><input type="text" size="50" name="contact_tel" id="contact_tel_popup" class="inputText" autocomplete="off"></td>
        </tr>
        <tr>
          <td><b>Thông tin liên hệ</b></td>
          <td><textarea rows="8" name="contact_message" id="contact_message_popup" style="width:329px;"></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="button" class="btn btn-default" value="Hủy" onclick="closePopup()" style="cursor:pointer;">
            <input type="button" class="btn btn-blue" value="Gửi liên hệ" onclick="return send_contact_popup();" style="cursor:pointer;">
          </td>
        </tr>
      </tbody></table>
    </form>
  </div><!--content-popup-->
</div>

<div class="popup-common" id="popup-address" style="display: none;">
  <div class="title-popup"><span>Địa chỉ liên hệ mua hàng</span><i class="close" onclick="closePopup()">x</i></div>
  <div class="content-popup">
    <p><b>Phòng Bán Hàng Trực Tuyến</b><br>
      Điện thoại: <span class="red">(024) 3516.0888 – 1900 0323 (phím 1)</span></p>
    <p>
      <b>Showroom 49 Thái Hà - Đống Đa - Hà Nội</b><br>
      Điện thoại: <span class="red">(024) 3563.9488 – 1900 0323 (phím 2)</span></p>
    <p>
      <b>Phòng Dự Án Và Doanh Nghiệp</b><br>
      Điện thoại: <span class="red">(024) 0919.917.001– 1900 0323 (phím 3)</span></p>
    <p>
      <b>An Phát 84T/14 Trần Đình Xu – TP HCM</b><br>
      Điện thoại: <span class="red">(028) 3838.6576 – (028).3838.6569</span></p>
    <p>
      <b>Tư Vấn Trả Góp</b><br>
      Điện thoại: <span class="red">1900.0323 phím 4 – 0936.021.377</span></p>
    <p>
      <b>Hỗ Trợ Kĩ Thuật</b><br>
      Điện thoại: <span class="red">1900.0323 phím 5 - 0902.118.180 hoặc 090.218.5566</span></p>
    <p>
      <b>Hỗ Trợ Bảo Hành</b><br>
      Điện thoại: <span class="red">1900.0323 phím 6 - 0918.420.480</span></p>
  </div><!--content-popup-->
</div>

  
    <div class="block-group d-none" style="height: 190px"></div>
  
    <header>
    
    <div class="header-banner">
        <div class="container position-relative">
            
            
            <a href="laptop-acer-gaming_dm1675.html?id=2306" target='_blank' rel='nofollow'><img border=0 src="/anphat.com.vn/media/banner/03_Feb0953a2e81e3e6e2613a00ff78e899e84.jpg" width='1920' height='60' alt=""/></a>
            
            
            <a href="javascript:void(0)" onclick="$('.header-banner').slideUp(200)" class="close-banner">X</a>
        </div>
    </div>
    

    <div class="header-text-top">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between text-13">
                <div class="address-left clearfix">
                    <div class="pulse-icon">
                        <div class="icon-wrap"></div>
                        <div class="elements"> 
                            <div class="pulse pulse-1"></div> 
                        </div>
                    </div>

                    <p class="m-0 float-left">
                        <marquee style="max-width: 700px;">Nguyễn khoái </marquee>
                    </p>
                </div>

               <!--  <div class="text-title">
                    <a href="sieu-thi-gan-nhat.html" class="map-title" > <i class="fa fa-map-marker text-16 pr-1"></i> Hệ thống Showroom </a>
                    <a href="https://www.youtube.com/c/AnPhatComputerpc" class="icon-video"> Video </a>
                    <a href="tin-tuc.html" class="icon-news"> Tin tức </a>
                    <a href="tra-bao-hanh.html" class="icon-print"> Tra cứu bảo hành </a>
                </div> -->
            </div>
        </div>
    </div>


    <div class="header-main-container">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center header-main">
                <h1 class="m-0">
                <a href="{{ route('homeFe') }}" class="logo"> 
                    <img src="{{  asset('/anphat.com.vn/media/banner/logo_logo-web-t4.png')  }}" alt="An Phát" class="logo-img"/> 
                    <img data-src="{{  asset('/anphat.com.vn/media/banner/logo_logo-web-t4.png')  }}" alt="An Phát" class="logo-img-fixed lazy"/>
                </a>
                </h1>

                <!-- search -->
                <div class="header-search">
                    <form method="get" action="{{ route('search-product-frontend') }}" enctype="multipart/form-data" class="clearfix search-form bg-white">
                        
                        <div class="searh-form-container">
                            <input type="text" id="js-search" class="text_search" value="" name="key" placeholder="Tìm kiếm sản phẩm..." autocomplete="off" id="tags">
                            <button type="submit" class="submit-search">
                                <i class="fa fa-search" ></i> Tìm kiếm
                            </button>
                        </div>
                    </form>

                    <div class="autocomplete-suggestions"></div>
                </div>

                <!-- icon right -->
                <div class="header-icon-right d-flex align-items-center justify-content-between">
                    <div class="item clearfix">
                        <!-- <a href="javascript:void(0);" title="Mua hàng online" class="header-icon-phone d-flex" style="align-items:center;">
                            <i class="icon icon-phone"></i>

                            <p class="icon-text m-0" style="line-height: 1.2;">
                              <b> <span class="text-15 d-block"> 1900 0323 </span> </b>
                              <b><span class="text-15 d-block">0966 454 503</span> </b>
                              <b><span class="text-15 d-block">0862 136 488</span> </b>
                              
                            </p>
                        </a> -->

                        <a href="sieu-thi-gan-nhat.html" title="Hệ thống Showroom" class="header-item-showroom">
                            <i class="icon icon-showroom"></i>

                            <p class="icon-text m-0" style="line-height: 1.2;">
                                <span class="text-12 d-block"> Hệ thống </span>
                                <b class="text-16 d-block"> Showroom </b>
                            </p>
                        </a>
                    </div>

                    <div class="item clearfix">
                        <a href="{{ route('buildpc') }}" title="Xây dựng máy tính">
                            <i class="icon icon-buildpc"></i>

                            <p class="icon-text m-0 text-12"> Xây dựng <br>Cấu hình PC </p>
                        </a>
                    </div>

                    <!-- <div class="item clearfix">
                        <a href="dang-nhap.html" title="Tài khoản"><i class="icon icon-user"></i></a>

                        <div class="icon-text m-0 text-12">
                            
                            <a href="dang-ky.html" class="d-block"> Đăng ký </a>
                            <a href="dang-nhap.html" class="d-block"> Đăng nhập </a>
                            
                        </div>
                    </div> -->

                    <div class="item clearfix">
                        <a href="{{ route('cart')  }}" class="d-block position-relative" title="Giỏ hàng của bạn">
                            <i class="icon icon-cart mr-0"></i>
                            <span class="js-cart-count cart-count"> {{  $number_cart }}</span>
                        </a>
                    </div>
                </div>

                <!-- mennu -->
                <div class="header-menu d-flex align-items-center">
                    <div class="header-menu-container">
                        <a href="javascript:void(0)" class="d-block font-weight-light text-white menu-title" style="font-size: 15px;">
                            <i class="fa fa-bars"></i> DANH MỤC SẢN PHẨM
                        </a>

                        <div class="header-menu-holder" >
                            @if(isset($group) && $group->count()>0)

                            @foreach($group as $groupss)

                            <div class="item bg-white" data-id="395">
                                <a href="{{ route('details', $groupss->link) }}" class="pro-cate-1"> 
                                    <span class="cat-thumb-item" style="width: 35px;text-align: center"> 
                                        <img src="/anphat.com.vn/media/category/cat_b706c0f50035bddb63ca6e91efef7703.png" alt="Laptop - Tablet - Mobile"/> 
                                    </span>
              
                                    <span class="title" title="Laptop - Tablet - Mobile">{{ $groupss->name }}</span>
                                </a>
                                
                            </div>
                            @endforeach
                            @endif
                            
                            
                            
                        </div>
                    </div>

                    <!-- <div class="menu-text-right d-flex align-items-center justify-content-between font-weight-light text-13">
                        <a href="san-pham-da-xem.html" target="_blank" class="header-history"> Sản phẩm bạn đã xem </a>
                        <a href="deal.html" class="bg-icon icon-flash"> Flash sale </a>
                        <div class="header-support-container" style="line-height: 38px;">
                            <a href="javascript:void(0)" class="bg-icon icon-support"> Tư vấn bán hàng </a>
                         
                            <div class="global-support-container" style="display: none">
                                <div class="col-item">
                                    <p class="title">Khách hàng Online</p>

                                    <div class="support-list">
                                        <a href="https://zalo.me/0966.45.45.03" target="_blank" rel="nofollow">Hotline 1 - 0966.45.45.03</a>
                                        <a href="https://zalo.me/0913.367.005" target="_blank" rel="nofollow">Hotline 2 - 0913.367.005</a>
                                        <a href="https://zalo.me/0981.335.989" target="_blank" rel="nofollow">Hotline 3 - 0981.335.989</a>
                                    </div>
                                </div>

                                <div class="col-item">
                                    <p class="title">Khách hàng Showroom Hà Nội</p>

                                    <div class="support-list">
                                        <div class="item-left">
                                            <div class="support-box">
                                                <p class="box-title">◆ 49 Thái Hà</p>

                                                <a href="https://zalo.me/0918.557.006" target="_blank" rel="nofollow">Hotline - 0918.557.006</a>
                                            </div>

                                            <div class="support-box">
                                                <p class="box-title">◆ 151 Lê Thanh Nghị</p>

                                                <a href="https://zalo.me/0983.94.9987" target="_blank" rel="nofollow">Hotline - 0983.94.9987</a>
                                            </div>
                                        </div>

                                        <div class="item-right">
                                            <div class="support-box">
                                                <p class="box-title">◆ 63 Trần Thái Tông</p>
                                                <a href="https://zalo.me/0862.136.488" target="_blank" rel="nofollow">Hotline - 0862.136.488</a>
                                            </div>
                                           <div class="support-box">
                                                <p class="box-title">◆ Bắc Ninh</p>
                                                <a href="https://zalo.me/0972.166.640" target="_blank" rel="nofollow">Hotline - 0972.166.640</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-item">
                                    <p class="title">Khách hàng Showroom TP.HCM</p>

                                    <div class="support-list">
                                        <div class="item-left">
                                            <div class="support-box">
                                                <p class="box-title">◆158-160 Lý Thường Kiệt</p>

                                                <a href="https://zalo.me/0917.948.081" target="_blank" rel="nofollow">Hotline - 0917.948.081</a>
                                            </div>

                                            <div class="support-box">
                                                <p class="box-title">◆ 84T/14 Trần Đình Xu</p>
                                                <a href="https://zalo.me/0909.143.970" target="_blank" rel="nofollow">Hotline - 0909.143.970</a>
                                            </div>
                                        </div>

                                        <div class="item-right">
                                            <div class="support-box">
                                                <p class="box-title">◆ 330-332 Võ Văn Tần</p>

                                                <a href="https://zalo.me/0931.105.498" target="_blank" rel="nofollow">Hotline - 0931.105.498</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-item">
                                    <p class="title">Khách hàng Doanh nghiệp - Dự án</p>

                                    <div class="support-list">
                                        <div class="support-box">
                                            <p class="box-title">◆ Hà Nội</p>

                                            <a href="https://zalo.me/0971.401.066" target="_blank" rel="nofollow">Hotline 1 - 0971.401.066</a>
                                            <a href="https://zalo.me/0919.917.001" target="_blank" rel="nofollow">Hotline 2 - 0919.917.001</a>
                                        </div>

                                        <div class="support-box">
                                            <p class="box-title">◆ TP. HCM</p>

                                            <a href="https://zalo.me/0901.118.414" target="_blank" rel="nofollow">Hotline - 0901.118.414</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="chuong-trinh-khuyen-mai.html" class="bg"><img src="/anphat.com.vn/media/lib/30-01-2023/chuong-trinh-khuyen-mai.png" /> Khuyến mãi Hot </a>
                        <a href="trung-tam-bao-hanh.html" class="bg-icon icon-package"> Đổi trả miễn phí </a>
                        <a href="giao-hang.html" class="bg-icon icon-delivery"> Miễn phí vận chuyển </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</header>

<div class="header-global-block" style="display: none; height: 200px"></div>
    <script type='application/ld+json'>
  {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "https://www.anphatpc.com.vn/",
      "contactPoint": [
        { "@type": "ContactPoint",
          "telephone": "+8419000323",
          "contactType": "customer service"
        }
      ]
  }
</script>
 @yield('content')
    <footer class="bg-white">
    <div class="footer-top">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="item">
                    <p class="title">KẾT NỐI VỚI CHÚNG TÔI</p>

                    <div class="social-media" style="margin-top: 26px;">
                        <a href="https://www.facebook.com/anphatcomputer/" target="_blank" class="icon icon-fb"></a>
                        <a href="#" target="_blank" class="icon icon-gg"></a>
                        <a href="https://www.youtube.com/channel/UCcrX-wKep-3GE7EwbFci42A" target="_blank" class="icon icon-youtube"></a>
                        <a href="https://zalo.me/3750555796577089032" target="_blank" class="icon icon-zalo"></a>
                    </div>
                </div>

                <!-- <div class="item">
                    <p class="title">CHẤP NHẬN THANH TOÁN</p>

                    <div class="icon icon-payment" style="margin-top: 6px;"></div>
                </div> -->

                <div class="item">
                    <p class="title">MỜI BẠN NHẬP EMAIL ĐỂ NHẬN THÔNG TIN KHUYẾN MÃI</p>

                    <div class="newsletter-form">
                        <form>
                            <input type="text" name="" id="js-email_newsletter" placeholder="Nhập email của bạn"/>
                            <button type="button" onclick="subscribe_newsletter()" class="submit-newsletter"> GỬI </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- footer news -->
    <div class="container">
        <div class="global-art-container d-flex justify-content-between">
            <div class="item-container">
                <p class="title"> TIN NỔI BẬT TRONG NGÀY </p>

                <div class="global-art-list" id="js-top-art-1">
                    
                </div>
            </div>

            <div class="item-container">
                <p class="title"> TIN KHUYẾN MẠI MỚI </p>

                <div class="global-art-list" id="js-top-art-2">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="footer-img">
        <div class="container">
            <div class="clearfix" style="padding: 0 10px;">
                <div class="item icon-truck">
                    <b>CHÍNH SÁCH GIAO HÀNG</b>
                    <span>Nhận hàng và thanh toán tại nhà</span>
                </div>

                <div class="item icon-trade">
                    <b>ĐỔI MỚI 15 NGÀY ĐẦU</b>
                    <span>Áp dụng với sản phẩm Laptop</span>
                </div>

                <div class="item icon-card">
                    <b>THANH TOÁN TIỆN LỢI</b>
                    <span>Trả tiền mặt, CK, trả góp 0%</span>
                </div>

                <div class="item icon-supp">
                    <b>HỖ TRỢ NHIỆT TÌNH</b>
                    <span>Tư vấn, giải đáp mọi thắc mắc</span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-info">
       <div class="container">
           <div class="row">
                <div class="col-3">
                    <div class="item">
                        <p class="glo-title"> THÔNG TIN CHUNG </p>

                        <div>
                            <a href="javascript:void(0)"> Giới thiệu về An Phát </a>
                            <a href="javascript:void(0)"> Tin tức </a>
                            <a href="javascript:void(0)"> Tin Tuyển Dụng </a>
                            <a href="javascript:void(0)"> Liên hệ - góp ý </a>
                            <a href="javascript:void(0)"> Khách hàng doanh nghiệp </a>
                            <a href="javascript:void(0)"> Xây dựng cấu hình PC V1 </a>
                            <!--
                            <a href="http://online.gov.vn/Home/WebDetails/7166">
                                <img src="/template/anphat_2020v2/images/bct.png" alt="Bộ công thương"/>
                            </a>
                            -->
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="item">
                        <p class="glo-title"> HỖ TRỢ KHÁCH HÀNG </p>

                        <div>
                            <a href="javascript:void(0)"> Hướng dẫn mua hàng trực tuyến </a>
                            <a href="javascript:void(0)"> Hướng dẫn thanh toán </a>
                            <a href="javascript:void(0)"> Hướng dẫn mua hàng trả góp </a>
                            <a href="javascript:void(0)"> In hoá đơn điện tử </a>
                            <a href="javascript:void(0)"> Tra cứu bảo hành </a>
                           
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="item">
                        <p class="glo-title"> CHÍNH SÁCH CHUNG </p>

                        <div>
                            <a href="javascript:void(0)"> Chính sách vận chuyển </a>
                            <a href="javascript:void(0)"> Chính sách bảo hành </a>
                            <a href="javascript:void(0)"> Chính sách cho doanh nghiệp </a>
                            <!--<a href=""> Chính sách hàng chính hãng </a>-->
                            <a href="javascript:void(0)"> Chính sách kiểm hàng </a>
                            <a href="javascript:void(0)"> Bảo mật thông tin khách hàng </a>
                        </div>
                    </div>
                </div>

               <!--  <div class="col-3">
                    <div class="item">
                        <p class="glo-title"> TỔNG ĐÀI HỖ TRỢ </p>

                        <ul class="ul footer-contact">
                            <li> <b>Miền Bắc: (49 Thái Hà-HN, 151 Lê Thanh Nghị-HN, 63 Trần Thái Tông-HN, 4 Nguyễn Văn Cừ-Bắc Ninh )
                            <li> Miền Nam: (158-160 Lý Thường Kiệt-HCM, 330-332 Võ Văn Tần-HCM, 84T/14 Trần Đình Xu-HCM)
                            <li> Kinh doanh online: 1900.0323 phím 1 </li>

                            <li> Kinh doanh miền Bắc: 1900.0323 phím 2</li>

                            <li> Kinh doanh miền Nam: 1900.0323 phím 3</li>

                            <li> Kinh doanh dự án: 1900.0323 phím 4 </li>

                            <li> Kỹ thuật - bảo hành miền Bắc: 1900.0323 phím 5 </li>
                               
                            <li> Kỹ thuật - bảo hành miền Nam: 1900.0323 phím 6 </li>

                            <li> Chăm sóc khách hàng: 1900.0323 phím 0 </li>

                            <li> Góp ý - khiếu nại: 0904.316.386 </li>
                            
                              <li class="email">Email: dung@anphatpc.com.vn</b> </li>
                        </ul>
                    </div>
                </div> -->
            </div>
       </div>
    </div>

    

    <div style="background: #edeef2;padding: 10px 0;">
        <div class="container text-12 font-weight-light">
            CÔNG TY CỔ PHẦN THƯƠNG MẠI MÁY TÍNH AN PHÁT.<br>
            Giấy chứng nhận ĐKDN số 0108940873 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày 11/10/2019.<br>
            Trụ sở: Tầng 5, Số 49 phố Thái Hà, Phường Trung Liệt, Quận Đống Đa, Thành phố Hà Nội, Việt Nam.<br>
            Điện thoại: 19000323 Email: Giang@anphatpc.com.vn
        </div>
    </div>
</footer>

<div class="success-form" style="display: none">
    <div class="content-container">
        <div class="success-checkmark">
            <div class="check-icon">
                <span class="icon-line line-tip"></span>
                <span class="icon-line line-long"></span>
                <div class="icon-circle"></div>
                <div class="icon-fix"></div>
            </div>
        </div>

        <div class="text-center content-text text-24"> Thêm sản phẩm vào giỏ hàng thành công !</div>
    </div>
</div>

<!-- fixed-right
<div class="global-fixed-right">
    <a href="javascript:void(0)" class="go-top" id="js-gotop"> <i class="fa fa-angle-up"></i></a>

    <a href="http://m.me/anphatcomputer" target="_blank" class="icon icon-messenger"></a>
</div> -->

<div class="icon-fixed-right-group">
    <a href="https://www.facebook.com/anphatcomputer/" target="_blank"><i class="fixed-right-icons fa fa-facebook"></i></a>
    <a href="https://www.youtube.com/channel/UCcrX-wKep-3GE7EwbFci42A" target="_blank"><i class="fixed-right-icons fa fa-youtube-play"></i></a>
    <a href="lien-he.html"><i class="fixed-right-icons fa fa-envelope"></i></a>
    <a href="buildpc.html"><i class="fixed-right-icons fa fa-wrench"></i></a>
    <a href="http://m.me/anphatcomputer" target="_blank"><i class="fixed-right-icons fa fa-comment"></i></a>
    <a href="javascript:void(0)" id="js-gotop" style="font-size: 22px;"><i class="fixed-right-icons fa fa-angle-up"></i></a>
 
</div>


 

    <div id="tooltip"></div>
    <div id="bg-opacity" onclick="closePopup()"></div>
    <div id="toTop" title="Lên đầu trang" class="transition"></div>

    

<script src="{{ asset('template/anphat_2020v2/script/lib6654.js?v1')}}"></script>
<script src="includes/js/commone5bf.js?v=12"></script>
<script src="javascript/dist/hurastore7add.js?v=125"> </script>
<script src="{{ asset('template/anphat_2020v2/script/inited18.js?v=8.11.2022')}}"></script>
<script src="{{ asset('template/anphat_2020v2/script/main_2020129e.js?v=1.7')}}"></script>

<script src="{{ asset('template/anphat_2020v2/script/hura_common.js')}}"></script>
<script src="../cdn.jsdelivr.net/npm/vanilla-lazyload%4011.0.6/dist/lazyload.min.js"></script>

<script>
    var optionProductCarousel = {
        items:5,
        margin:10,
        loop:false,
        autoplayHoverPause:false,
        autoplay:true,
        autoplayTimeout: 3000,
        autoplaySpeed: 1500,
        dots:false,
        lazyLoad: true,
        nav:true,
        navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{
            1200:{
                items:5,
            },
            1600:{
                items:6,
            }
        }
    }

    // $(document).ready(function(){
    //     getProductMarketingIcon('.js-p-item');

    //     tooltip();
        
    //     _run_search();
  
    //     var lazyLoadInstance = new LazyLoad({
    //         elements_selector: ".lazy"
    //     });
        
    //     showCartSummary(".js-cart-count")
        
    //     $('#js-gotop').click(function() {
    //         $('body,html').animate({scrollTop:0},800);
    //     });

    //     $(".p-order-status").each(function(){
    //         var left = $(this).attr("data-left");
    //         var total = $(this).attr("data-total");
    //         var percent = 0;
    //         if(total > 0) percent = Math.ceil(left/total * 100);

    //         $(this).find(".bg-count-left").css("width",percent+"%");
    //         $(this).find(".icon-order-status").css("left",percent+"%");

    //         if(percent < 40 && 1 < 2) $(this).find(".text").css("right","10px");
    //     });

    //     $(window).scroll(function() {
    //         menu_fixed();

    //         if($(this).scrollTop() > 300) {
    //             $('.icon-fixed-right-group').addClass("active");
    //         } else {
    //             $('.icon-fixed-right-group').removeClass("active");
    //         }
            
    //         if(isOnScreen($('footer')) && $('footer').hasClass('loaded')==false){

    //             global_getTopNews("#js-top-art-1");
    //             global_tinkhuyenmai("#js-top-art-2");

    //             $('footer').addClass('loaded');
    //         }  
  
    //     });

    // })


    $(document).ajaxStop(function(){
        getProductMarketingIcon('.js-p-item');    
        
        tooltip();

        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });
    });
    
  
</script>

<script>


    function addToCart(id) {
            
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('addcartfast') }}",
            data: {
                product_id: id,
                gift_check:$('#gift_checked').val()
                   
            },
            beforeSend: function() {
               
                $('.loader').show();

            },
            success: function(result){

                console.log(result);

                numberProductCart = $(".cart-count").text();


                number = parseInt(numberProductCart)+1;

               
                alert('thêm sản phẩm vào giỏ hàng thành công');

              
                $('.cart-count').text(number);

                
            }
        });
        
    }

    
    function addProduct(product_id) {
        var product_prop = {
            quantity: 1 ,
            buyer_note : ''
        };

        Hura.Cart.Product.add(product_id, 0, product_prop).then(function(response){
            if(response.status === 'error') {
                // bao loi
                if(response.error_type == 'item-in-cart') alert('Sản phẩm đã trong giỏ hàng');
                else if(response.error_type == 'invalid-item-id') alert('ID sản phẩm không đúng');
                else alert(response.message);
            }else{
                $(".success-form").show();
                setTimeout(function(){
                    $(".success-form").fadeOut(); 
                }, 1000);
                showCartSummary(".js-cart-count")
            }
        });
    }   
  
    function getProductList_new(url,holder) {
        $.getJSON(url, function(result) {
            var data = result.list;
            var html = "";
            Object.keys(data).forEach(function(key, keyIndex) {
                var productName = data[key].productName;
                var productUrl = data[key].productUrl;
                var productId = data[key].productId;
                var productSummary = data[key].productSummary;

                var productImage = data[key].productImage.large;
                if (productImage == '')
                productImage = "template/2020/images/no_image.html";

                // == Price
                var price = data[key].price;
                var priceFormat = formatCurrency(price) + " đ";
                if (price == 0) priceFormat = "Liên hệ";

                var marketPrice = '';
                var toolTip_marketPrice = '';
                if (parseInt(data[key].marketPrice) > 0) {
                    marketPrice = formatCurrency(data[key].marketPrice) + " đ";
                    toolTip_marketPrice = `
                        <span>
                            Giá niêm yết:
                            <del class="p-old-price" style="display: inline-block;"> `+marketPrice+` </del>
                        </span>
                    `;
                }

                var vnpay_price = '';
                if (data[key].extend.vnpay_price && data[key].extend.vnpay_price > 0) {
                    vnpay_price = `
                        <p class="p-price" style="margin: 0;">
                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá QR code:</span>
                            `+ data[key].extend.vnpay_price +`
                        </p>
                    `;
                }

                var combo_price = '';
                if (data[key].extend.combo_price && data[key].extend.combo_price > 0) {
                    combo_price = `
                        <p class="p-price" style="margin: 0;">
                            <span style="font-size: 14px;color: #000;font-weight: normal;"> Giá khi mua kèm PC:</span>
                            `+ data[key].extend.combo_price +`
                        </p>
                    `;
                }


                var discount = '';
                if (parseInt(data[key].marketPrice) > parseInt(price) && parseInt(price) > 0) {
                    var percent = Math.ceil(100 - price * 100 / data[key].marketPrice);
                    discount = "<span class='p-discount'> -"+percent+"% </span>";
                }
                // End Price ==
                
                var totalOffer = data[key].specialOffer.all.length;
                var count_offer = '';
                if(parseInt(totalOffer) > 0){
                    count_offer = totalOffer+ ' khuyến mại';
                }else{
                    count_offer = '';
                }
                var specialOffer = "";
                var tooltip_spec ="";
                if (data[key].specialOffer.all.length > 0){
                    var spec_title = data[key].specialOffer.all[0];
                    tooltip_spec = data[key].specialOffer.all[0].title;

                    if (spec_title.thumbnail != '' ) {
                        specialOffer = "Tặng ngay: &nbsp;" + data[key].specialOffer.all[0].thumbnail;
                    } else{
                        specialOffer = "Tặng ngay: &nbsp;" + data[key].specialOffer.all[0].title;
                    }
                }

                var quantity = "";
                if (data[key].productType.pre_order == 1) {
                    quantity = "<span class='btn-outStock'> SẮP VỀ HÀNG </span>";
                } else if (data[key].quantity == 0){
                    quantity = "<span class='btn-outStock'> LIÊN HỆ </span>";
                } 

                var btn_addProduct = "";
                if (data[key].productType.pre_order != 1 && data[key].quantity != 0) {
                    btn_addProduct = `<a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(`+ productId +`)"></a>`;
                }
                var isNew = '';
                if (data[key].productType.isNew == 1) {
                    isNew = "<span class='icon-new'></span>";
                }

                var isSaleOff = '';
                if (data[key].productType.isSaleOff == 1) {
                    isSaleOff = '<span class="p-isSaleOff"></span>'
                }
                
                html+=`
                    <div class="p-item js-p-item" data-id="`+ productId +`">
                        <a href="`+productUrl+`" class="p-img">
                            <img src="`+productImage+`" alt="`+productName+`" class="fit-img" />
                            `+isNew+`
                            `+quantity+`
                            `+ isSaleOff +`
                            
                            <span class="p-icon-holder js-icon-`+ productId +`"><!-- // icon promotion --></span>
                        </a>

                        <div class="p-text">
                            <span class="p-sku" style="font-size: 12px;">Mã SP: `+data[key].productSKU+`</span>
                            <a href="`+productUrl+`" class="p-name"> `+productName+` </a>

                            <div class="price-container">
                                <del class="p-old-price"> `+marketPrice+` </del>
                                `+discount+`
                                <span class="p-price"> `+priceFormat+` </span>
                            </div>

                            <div class="p-special-container">`+ count_offer +`</div>
                            
                            <div class="d-flex align-items-centet justify-content-between">
                                <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(`+ productId +`,'`+ productImage +`', this)">So sánh</a>

                                `+ btn_addProduct +`
                            </div>
                            
                        </div>

                        <div class="p-tooltip">
                            <p class="tooltip-title"> `+productName+` </p>

                            <div class="tooltip-content">
                                `+checkKhuyenMai(tooltip_spec)+`
                                `+checkSummary(productSummary)+`
                                
                                <div class="position-relative">
                                    `+ toolTip_marketPrice +`

                                    `+discount+`

                                    <p class="p-price" style="margin: 0;">
                                        <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                        `+priceFormat+`
                                    </p>

                                    `+ vnpay_price +`

                                    `+ combo_price +`
                                </div>
                            </div>
                        </div>
                    </div>
                `;

            });

            $(holder).html(html);
        });
    }

    function checkKhuyenMai(specialOffer){
        var offer = " ";
        var number = 0;
        if(specialOffer){
            var splitOffer = specialOffer.split("\n");

            offer += "<div class='tooltip-specialOffer'> <div class='spec-title'><span class='title-text'> KHUYẾN MÃI</span></div><ul class='ul'>";

            splitOffer.forEach(function(value,item){
                number +=1;
                if (item < 6) {
                    offer +=  "<li> <span class='text'>" + splitOffer[item] +" </span></li>";
                }
            })
            offer += "</ul></div>";
        }
        return offer
    }

    function checkSummary(productSummary){
        var summary = " ";
        if(productSummary){
            summary += "<div class='tooltip-summary'>";
            var splitSummary = productSummary.split("\n");

            splitSummary.forEach(function(value,item){
                if(item < 5 ) summary += "<span class='item'><i class='fa fa-check-circle'></i>" + splitSummary[item] + "</span>";
            })
            summary += "</div>";
        }
        return summary
    }
  
    function show_time_left(time,day,hour,min,sec) {
        var amount = time;
        hours = 0;
        mins = 0;
        secs = 0;
        
        var days = Math.floor(amount / (60 * 60 * 24));    
        hours = Math.floor((amount  % ( 60 * 60 * 24)) / ( 60 * 60));
        mins = Math.floor((amount  % ( 60 * 60)) / ( 60));
        secs = Math.floor(amount % 60);

        if(days <=9) days = days;
        if(hours <=9) hours = "0"+hours;
        if(mins <=9) mins = "0"+mins;
        if(secs <=9) secs = "0"+secs;

        if($(day)) $(day).html(days);
        if($(hour)) $(hour).html(hours);
        if($(min)) $(min).html(mins);
        if($(sec)) $(sec).html(secs);

        setTimeout(function() {
            show_time_left(parseInt(time)-1,day,hour,min,sec);
        }, 1000);
    }
  
    function menu_fixed(){
        
         var height = 700;
        
        //

        if($(window).scrollTop() > height){
            $('.header-main-container').addClass("header-fixed");             
            $('.header-global-block').show();
        }
        else {
            $('.header-main-container').removeClass("header-fixed");            
            $('.header-global-block').hide(); 
        }
    }
      
    // global search
    function _run_search() {
        var curr_text = "";
        var count_select = 0;
        var curr_element="";
        var textarea = document.getElementById("js-search");

        detectPaste(textarea, function(pasteInfo) {
            inputString = pasteInfo.text;
            search(inputString);
        });

        $('#js-search').keyup(debounce(function(){
            inputString = $(this).val();
            search(inputString);
        },500));

        $('body').click(function(){
            $(".autocomplete-suggestions").hide();
        });
    }

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    function search(inputString){
        var htmlResult="<div class='list'>";
        if (inputString.trim() != '') {
            urlSearch = 'ajax/get_json0532.html?action=search&amp;action_type=fast-search&amp;content=product&amp;q='+ encodeURIComponent(inputString);

            $.getJSON(urlSearch, function(result){
                var data = result;
                data.forEach(function(item, key){
                    if(key < 10){
                        var price = Hura.Util.writeStringToPrice(item.price);
                        if(price!=0) price = price+' VNĐ';
                        else price= "Liên hệ"

                        htmlResult+='<a href="'+item.url+'">';
                        htmlResult+='<img src="'+item.image+'" alt="'+item.title+'" />';
                        htmlResult+='<span class="info">';
                        htmlResult+='<span class="name">'+item.title+'</span>';
                        htmlResult+='<span class="price">'+price+'</span>';
                        htmlResult+='</span>';
                        htmlResult+='</a>';
                    }
                });   
                htmlResult+='</div>';
                $(".autocomplete-suggestions").html(htmlResult);
                $(".autocomplete-suggestions").show();
            });

        } else {
            $(".autocomplete-suggestions").hide();
        }
    }

    function getTextAreaSelection(textarea) {
        var start = textarea.selectionStart, end = textarea.selectionEnd;
        return {
            start: start,
            end: end,
            length: end - start,
            text: textarea.value.slice(start, end)
        };
    }

    function detectPaste(textarea, callback) {
        textarea.onpaste = function() {
            var sel = getTextAreaSelection(textarea);
            var initialLength = textarea.value.length;
            window.setTimeout(function() {
                var val = textarea.value;
                var pastedTextLength = val.length - (initialLength - sel.length);
                var end = sel.start + pastedTextLength;
                callback({
                    start: sel.start,
                    end: end,
                    length: pastedTextLength,
                    text: val.slice(sel.start, end)
                });
            }, 1);
        };
    }
    // end global search
  
    function global_getTopNews(holder1) {
        var url = 'ajax/get_json12f7.html?action=article&amp;action_type=featured&amp;type=article&amp;show=10';

        var html   = "";
        $.getJSON(url,function(data){
            let result = data;
            result.forEach(function(item,key){
                if(key < 4){
                    html+=`
                        <div class="item clearfix">
                            <a href="`+item.url+`" class="global-art-img">
                                <img src="`+item.image.thum+`" alt="`+item.title+`" class="lazy" />
                            </a>

                            <div class="global-art-text">
                                <a href="`+item.url+`" class="d-block global-art-title"> `+item.title+` </a>

                                <div class="art-info-container">
                                    <span class="art-time">  `+item.lastUpdate+`</span>
                                    <span class="art-comment"> `+item.review_count+`</span>
                                    <span class="art-visit"> `+item.visit+`</span>
                                </div>

                                <div class="global-art-summary">`+item.summary+`</div>
                            </div>
                        </div>                  
                    `;
                }
            });

            $(holder1).html(html);
        });
    }

    function global_tinkhuyenmai(holder1) {
        var url = 'ajax/get_jsond5be.html?action=article&amp;action_type=list&amp;type=article&amp;catId='+486+'&featured=&show=10';
        var html   = "";
        $.getJSON(url,function(data){
            let result = data.list;
            result.forEach(function(item,key){
                if(key < 4){
                    html+=`
                        <div class="item clearfix">
                            <a href="`+item.url+`" class="global-art-img">
                                <img src="`+item.image.thum+`" alt="`+item.title+`" class="lazy" />
                            </a>

                            <div class="global-art-text">
                                <a href="`+item.url+`" class="d-block global-art-title"> `+item.title+` </a>

                                <div class="art-info-container">
                                    <span class="art-time">  `+item.lastUpdate+`</span>
                                    <span class="art-comment"> `+item.review_count+`</span>
                                    <span class="art-visit"> `+item.visit+`</span>
                                </div>

                                <div class="global-art-summary">`+item.summary+`</div>
                            </div>
                        </div>                  
                    `;
                }
            });

            $(holder1).html(html);
        });
    }

    // add product compare
    function compare_addProduct(id,img,pa) {
        var pro_img = img;
        var pro_id  = id;
        
        if ($("#js-compare-holder a").length < 3) {
            $(".global-compare-group").show();
            $("#js-alert").html("");
                                                 
            if ($(pa).hasClass("selected") == true) {        
                $("#js-compare-holder a").each(function(){
                    var id = $(this).attr("data-id")
                    if (id == pro_id) {
                        $(this).remove();
                    }
                })
                $(pa).removeClass("selected");
            } else{
                var creat_item = `<a href="javascript:void(0)" class="js-compare-item position-relative" data-id="`+pro_id+`">
                            <span class="remove-compare js-remove-compare" onclick="removeCompare(this)"></span>
                            <img src="`+pro_img+`"/>
                            </a>`;
                $("#js-compare-holder").append(creat_item);
                $(pa).addClass("selected");
            }

        } else{
            $("#js-alert").html("Bạn được chọn tối đa 3 sản phẩm !")

            if ($(pa).hasClass("selected") == true) {
                $("#js-compare-holder a").each(function(){
                    var id = $(this).attr("data-id")
                    if (id == pro_id) {
                        $(this).remove();
                    }
                })
                $(pa).removeClass("selected");
                $("#js-alert").html("");
            }
        }

        if ($("#js-compare-holder a").length == 0){
            $(".global-compare-group").hide();
        }

        // popup search
        if ($("#js-compare-holder a").length == 3) {
            $("#js-addCompare-popup").hide();
        } else{
            $("#js-addCompare-popup").show();
        }
    }

    function removeCompare(pa) {
        var id = $(pa).parents(".js-compare-item").attr("data-id");
        var pro_id = $("#js-pd-item").attr("data-id");
        $(pa).parents(".js-compare-item").remove();

        if(pro_id == id){
            $("#js-pd-item").removeClass("selected")
        }
        
        if ($(".js-compare-item").length < 3) {
            $("#js-addCompare-popup").show();
        } else {
            $("#js-addCompare-popup").hide();
        }
    }

    function compare_link(){
        var compare_item = $(".js-compare-item").length;
        if (compare_item < 2){
            $("#js-alert").html("Cần tối thiểu 2 sản phẩm để so sánh !")
        } else{
            $("#js-alert").html("")

            var ids = [];
            $(".js-compare-item").each(function(){
                var id = $(this).attr("data-id");
                ids.push(id) + ','
            })
            var current_list = String(ids);

            window.location = "/so-sanh?list=" + current_list;
        }
    }

    function compare_close() {
        $("#js-compare-holder").html("");
        $(".global-compare-group").hide();
        $(".js-p-compare").removeClass("selected")
    }

    function closePopupSearch() {
        $("#js-popup-seach").val("");
        $("#js-seach-holder").html("");
        $('.popup-search-container').hide();
    }
    // End add product compare

    function showPopup(a){
        if(a == 'popup-youtube'){
            var url = $("#url-video-popup").val();
            $("#content-popup-youtube").html('<iframe width="495" height="315" src='+url+' frameborder="0" allowfullscreen></iframe>');
        }
        $("#bg-opacity").fadeIn();
        $("#"+a).fadeIn();
    }

    function closePopup(){
        if($("#content-popup-youtube iframe").length > 0) $("#content-popup-youtube").empty();
        $(".popup-common").fadeOut();
        $("#bg-opacity").fadeOut();
    } 


    // ***** Lấy icon khuyến mãi    
    function getProductMarketingIcon(holder) {
        var productIds = getProductIds(holder).join(",");

        if (productIds != '') {
            Hura.Ajax.get('marketing-product-offer', { action_type: 'list', ids: productIds }).then(function(data){
                var data = JSON.parse(data);

                data.forEach(function(item){
                    var text        = item.promo_code;
                    var productId   = item.product_id;

                    _buildIconPosition(text, productId);
                })
            });
        }
    }

    function _buildIconPosition(text, productId) {
        let splitText = text.split(',');
        
        if(splitText != 'undefinded') {

            let holder  = '.js-icon-' + productId;
            var html    = [];

            splitText.forEach(function(st,skey){
                var icon = st;

                // Style theo tên icon => nếu thay đổi tên trong excel chỉ cần thay đổi case 
                
                switch (icon) {
                    case "flash-sale":
                        icon = 'flash-sale'
                        break;
                      
                    case "giam-soc":
                        icon = 'giam-soc'
                        break;

                    case "giam-soc-cuoi-tuan":
                        icon = 'giam-soc-cuoi-tuan'
                        break;
                }

                html.push(" <i class='p-icon-"+icon.trim()+"'></i>");
            })

            $(holder).html(html.join(''));
        } 
    }

    function getProductIds(holder) {
        var productIds = [];

        $(holder).each(function(){
            if ($(this).hasClass('done') == false) {

                productIds.push($(this).attr('data-id'));

                $(this).addClass('done');
            }
        });

        return productIds;
    }
    // End icon khuyến mãi *****
  

</script>  


<!-- box so sanh sp -->
<div class="global-compare-group">
    <div class="title text-22 text-white d-flex align-items-center justify-content-between font-600">
        <p>SO SÁNH SẢN PHẨM</p>
        <a href="javascript:void(0)" class="close-compare text-white fa fa-times" onclick="compare_close()"></a>
    </div>

    <div class="text-center red mt-2 text-18 font-500" id="js-alert"></div>

    <div class="pro-compare-holder">
        <div class="compare-pro-holder clearfix" id="js-compare-holder">
            <!-- <a href=""><img src="images/product-1.jpg"></a> -->
        </div>
        <a href="javascript:void(0)" class="btn-compare" onclick="compare_link()">SO SÁNH</a>
    </div>
</div>


<!-- popup template global
-->




    <script>
    $(document).ready(function(){
        // countdown deal item
        _time_count();

        $('#js-home-slider').owlCarousel({
            items: 1,
            loop: true,
            margin:10,
            autoplay: true,
            autoplayHoverPause:true,
            autoplayTimeout: 4000,
            autoplaySpeed:1000,
            nav: false,
            lazyLoad: true,
            dots: true
        });

        $(".js-product-carousel").owlCarousel(optionProductCarousel); 

    });

    $(window).scroll(function(){
        ajaxLoadProduct();

        if(isOnScreen($("#js-bestsale-container")) && $("#js-bestsale-container").hasClass('loaded')==false){

            getProductBestSale("#js-bestsale-holder-1","#js-bestsale-holder-2")

            $("#js-bestsale-container").addClass('loaded');
        }   
    }); 

    setTimeout(function(){ 
        $(".global-banner-fixed").addClass("on-screen");
    }, 2000);

    
    function _time_count() {
        var current_time = (new Date()).getTime()/1000;

        $(".js-deal-time").each(function(){
            var time_end = $(this).attr("data-end");
            var time_left = time_end - current_time;

            var holder_hour = $(this).find(".js-hour");
            var holder_min = $(this).find(".js-minute");
            var holder_sec = $(this).find(".js-seconds");

            show_time_left(time_left,'',holder_hour,holder_min,holder_sec);
        });
  
        $('.js-deal-start').each(function(){
            var start_time = $(this).attr('data-start');
            var hour = $(this).find('.js-hour');
            var minute = $(this).find('.js-minute');
            var sec = $(this).find('.js-seconds');
            countDownTime(start_time, hour , minute, sec);
        });
    }
</script>





<script>
    function ajaxLoadProduct(){
        $(".js-box-container").each(function(){
            if(isOnScreen($(this)) && $(this).hasClass('loaded')==false){

                var catId       = $(this).find(".p-container").attr("data-id");
                var holder      = $(this).find(".p-container").attr("id");
                var url         = "ajax/get_jsone8f5.html?action=product&amp;action_type=product-list&amp;type=hot&amp;category="+catId+"&sort=order&show=15";

                getProductList_new(url,"#"+ holder)

                $(document).ajaxStop(function(){
                    $("#"+holder).owlCarousel(optionProductCarousel); 
                });

                $(this).addClass('loaded');
            }   
        });  
    }  

    function subscribe_newsletter() {

        alert('Chức năng đang xây dựng xin vui lòng quay lại sau!')
        
    }


    
</script>



    

@stack('js')
  

  
  </body>

