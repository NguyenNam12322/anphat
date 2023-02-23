
@extends('frontend.layouts.apps')

@section('content') 

<style type="text/css">
    
    .header-menu-holder{
        display: none;
    }
</style>
<section class="product-detail-page">
    <div class="container">
        <div id="breadcrumb">
            <ol class="ul clearfix" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="https://www.anphatpc.com.vn/" itemprop="item" class="nopad-l">
                    <span itemprop="name"><span style="font-size: 0px">Home</span> <i class="icon icon-home"></i></span>
                    </a>  
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh.html-1" itemprop="item"> <span itemprop="name"> Màn Hình Máy Tính </span> </a>
                    <meta itemprop="position" content="2" />
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm24-a200-23.6-inch-fhd-va.html" itemprop="item"> <span itemprop="name"> Màn hình máy tính Dahua DHI-LM24-A200 23.6 inch FHD VA </span> </a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
        <div class="bg-white product-info-container">
            <!-- pro images-left -->
            <div class="pro-image-gallery">
                <div class="box-anh-sp" id="js-box-anh">
                    <div class="owl-carousel owl-2019 custom-nav owl-loaded owl-drag" id="list-image-slider">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3570px;">
                                <div class="owl-item active" style="width: 500px; margin-right: 10px;">
                                    <div class="item" style="text-align:center"><img src="https://anphat.com.vn/media/product/43427_laptop_dell_inspiron_15_3520_70296960__co__1_.jpg"> </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div>
                        <div class="owl-dots disabled"></div>
                        <div class="owl-thumbs"></div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="box-gallery d-block text-center blue text-12" id="box-open-gallery" onclick="openBoxGallery(this);" data-id="anh_sp">
                    <i class="fa fa-search-plus"></i> 
                    <p class="m-0 d-inline-block"> Phóng to  Hình sản phẩm </p>
                    <span class="count js-dots" style="color: #222;">1 / 7</span> 
                </a>
                <!-- box dieu huong -->
                <!--  
                    -->
                <div class="image-type-container clearfix list-image-title">
                    <a href="javascript:void(0)" onclick="openBoxGallery(this);" data-id="anh_sp" data-name="Hình sản phẩm" class="js-img-type current">
                    <span class="img">
                    <img src="https://anphat.com.vn/media/product/75_43427_laptop_dell_inspiron_15_3520_70296960__co__1_.jpg" alt="Hình sản phẩm" class="fit-img">
                    </span>
                    <span class="name"> Hình sản phẩm </span>
                    </a>
                    <a href="javascript:void(0)" class="video" onclick="openVideoBox()" data-name="Video" data-key="video">
                    <span class="img"> <i class="fa fa-play-circle"></i> </span>
                    <span class="name"> Video </span>
                    </a>
                    <a href="javascript:void(0)" class="blue text-center" data-fancybox="" data-src="#pro-spec">
                    <i class="fa fa-exclamation-circle d-block" style="transform: rotate(180deg);"></i>
                    Xem thông số kỹ thuật
                    </a>
                </div>
                <!-- <div class="product-spec-group mb-4 font-300">
                    <div class="item-content position-relative">
                        <table style="width: 100.0%;" border="1" width="100%">
                            <tbody>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="line-height: 115%; color: black;">Hãng sản xuất</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><a href="https://www.anphatpc.com.vn/laptop-dell_dm1012.html">Laptop Dell</a></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="line-height: 115%; color: black;">Tên sản phẩm&nbsp; &nbsp;</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: 0.75pt; text-align: center;" width="771">
                                        <h3 align="center"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><a href="https://www.anphatpc.com.vn/laptop-dell-inspiron-15-3520-70296960.html" target="_blank" class="current">Dell Inspiron 15 3520 70296960</a></span></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="line-height: 115%; color: black;">Dòng Laptop</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="line-height: 115%; color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><a href="https://www.anphatpc.com.vn/may-tinh-xach-tay-laptop.html">Laptop</a>&nbsp;|&nbsp;<a href="https://www.anphatpc.com.vn/laptop-dell-inspiron_dm1618.html" target="_blank">Laptop Dell Inspiron</a>&nbsp;|&nbsp;&nbsp;<a href="https://www.anphatpc.com.vn/laptop-van-phong-gia-re_dm1613.html">Laptop Văn Phòng</a>&nbsp;|&nbsp;<a href="https://www.anphatpc.com.vn/laptop-cho-sinh-vien-kinh-te_dm1904.html" target="_blank">Laptop cho sinh viên kinh tế</a></strong><br></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Bộ vi xử lý</span></strong><span style="color: black;">&nbsp;</span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Công nghệ CPU</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Intel Core i5-1235U</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Số nhân</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">10</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Số luồng</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">12</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Tốc độ tối đa</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">4.40 GHz</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Bộ nhớ đệm</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">12 MB</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Bộ nhớ trong (RAM)</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">RAM</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">8GB&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Loại RAM</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">DDR4</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Tốc độ Bus RAM</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">3200MHz</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Số khe cắm</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;">2 khe&nbsp;</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Hỗ trợ RAM tối đa</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">-</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Ổ cứng&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Dung lượng</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">512GB M.2 PCIe NVMe SSD</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Tốc độ vòng quay</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Khe cắm SSD mở rộng</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm 0cm 0.0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">-</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Ổ đĩa quang (ODD)&nbsp;</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Không có</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Màn hình</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Kích thước màn hình</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">15.6 FHD&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Độ phân giải</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">FHD (1920 x 1080)</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Tần số quét</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">-</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Công nghệ màn hình</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">WVA, LED-Backlit, 250 nit, Narrow Border</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Đồ Họa (VGA)&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Card màn hình</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">nVidia GeForce MX550 2GB</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Kết nối (Network)&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Wireless</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">802.11ax</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">LAN</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Bluetooth</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">&nbsp;Bluetooth 5.2</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Bàn phím , Chuột&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Kiểu bàn phím</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Bàn phím tiêu chuẩn</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Chuột</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Cảm ứng đa điểm</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Giao tiếp mở rộng&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Kết nối USB</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">1 x USB 3.2 Gen 1 Type-C,</span></p>
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"> 1 x USB 3.2 Gen 1, </span></p>
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">2 x USB 3.2 Gen 1 ports (on systems configured with non Type-C) 1 x USB 2.0,&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Kết nối HDMI/VGA</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">1 HDMI 1.4 port</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Tai nghe</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">1 Audio jack</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Camera</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">720p at 30 fps HD camera, single-integrated microphone</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Card mở rộng</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">1 SD Media Card Reader&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">LOA</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">2 Loa</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Kiểu Pin</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">3 Cell,&nbsp;41Wh</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Sạc pin</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Đi kèm</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Hệ điều hành&nbsp;(bản quyền) đi kèm&nbsp;</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Windows 11 Home + Office Home and Student 2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Kích thước (Dài x Rộng x Cao)</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">21.07mm x 358.50mm x 235.56mm</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Trọng Lượng</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">1.65 kg </span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Màu sắc</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Bạc</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Xuất Xứ</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Trung Quốc</span></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="javascript:void(0)" class="blue item-button" data-fancybox="" data-src="#pro-spec"> XEM THÊM THÔNG SỐ <i class="fa fa-angle-double-down"></i></a>
                </div> -->
                <div class="d-flex align-items-center justify-content-center">
                    <div class="fb-like fb_iframe_widget" style="height: 19px;margin-right: 10px;" data-href="https://www.anphatpc.com.vn/laptop-dell-inspiron-15-3520-70296960.html" data-width="" data-layout="button" data-action="like" data-size="small" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=173939288101609&amp;container_width=0&amp;href=https%3A%2F%2Fwww.anphatpc.com.vn%2Flaptop-dell-inspiron-15-3520-70296960.html&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;size=small&amp;width="><span style="vertical-align: bottom; width: 60px; height: 28px;"><iframe name="f2dea30428025e8" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v11.0/plugins/like.php?action=like&amp;app_id=173939288101609&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3d368c91bd69d%26domain%3Dwww.anphatpc.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.anphatpc.com.vn%252Ff32b38984f36b4%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.anphatpc.com.vn%2Flaptop-dell-inspiron-15-3520-70296960.html&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;size=small&amp;width=" style="border: none; visibility: visible; width: 60px; height: 28px;" class=""></iframe></span></div>
                    <div class="fb-share-button fb_iframe_widget" data-href="https://www.anphatpc.com.vn/laptop-dell-inspiron-15-3520-70296960.html" data-layout="button" data-size="small" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=173939288101609&amp;container_width=47&amp;href=https%3A%2F%2Fwww.anphatpc.com.vn%2Flaptop-dell-inspiron-15-3520-70296960.html&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;size=small"><span style="vertical-align: bottom; width: 67px; height: 20px;"><iframe name="f2f3221810ffe78" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v11.0/plugins/share_button.php?app_id=173939288101609&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df25ff925069b24%26domain%3Dwww.anphatpc.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.anphatpc.com.vn%252Ff32b38984f36b4%26relation%3Dparent.parent&amp;container_width=47&amp;href=https%3A%2F%2Fwww.anphatpc.com.vn%2Flaptop-dell-inspiron-15-3520-70296960.html&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 67px; height: 20px;" class=""></iframe></span></div>
                </div>
            </div>
            <!-- pro-info-center -->
            <div class="pro-info-center">
                <h1 class="pro-name js-product-name"> {{ $data->Name }} </h1>
                <div style="border-bottom: 1px solid #edeef2;margin-bottom: 7px;padding-bottom: 3px;font-size: 13px;">
                    <span>
                    <b>Mã SP: </b><span class="js-product-sku">{{  $data->ProductSku }}</span>
                    </span>
                    <span style="margin-left: 20px;">
                    <i class="icon-star star-0"></i>
                    0 đánh giá
                    </span>
                    <span style="margin: 0 20px;">
                    Lượt xem: 14.440
                    </span>
                    <a href="javascript:void(0)" class="js-p-compare blue" id="js-pd-item" onclick="compare_addProduct(41446,'https://anphat.com.vn/media/product/250_41446_dhi_lm24_a200.jpg', this)" ><i class="fa fa-plus-circle"></i> So sánh</a>
                </div>
                <div class="pro-info-summary">
                    <!--0-->
                    <span class="item ">
                    <i class="fa fa-check-circle"></i>Loại màn hình: Màn hình phẳng
                    </span>
                    <!--1-->
                    <span class="item ">
                    <i class="fa fa-check-circle"></i>Tỉ lệ: 16:09
                    </span>
                    <!--2-->
                    <span class="item ">
                    <i class="fa fa-check-circle"></i>Kích thước: 23.6 inch
                    </span>
                    <!--3-->
                    <span class="item ">
                    <i class="fa fa-check-circle"></i>Tấm nền: VA 
                    </span>
                    <!--4-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>Độ phân giải: FHD (1920 x 1080) 
                    </span>
                    <!--5-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>Tốc độ làm mới: max 75Hz
                    </span>
                    <!--6-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>Thời gian đáp ứng: 6.5ms
                    </span>
                    <!--7-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>Cổng kết nối: VGA, HDMI
                    </span>
                    <!--8-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>Phụ kiện: Cáp nguồn, cáp HDMI
                    </span>
                </div>
                <p><a href="javascript:void(0)" id="js-viewmore-summary" class="red">Xem thêm ></a></p>
                <div class="store-address-container">
                    <b class="d-block mb-2"> 
                    Bảo hành: 36 Tháng, chế độ bảo hành 1 đổi 1 trong 12 tháng đầu 
                    </b>
                </div>

                <!-- <div class="pro-special-offer-container">
                    <div class="spec-title d-flex align-items-center justify-content-between">
                        <div class="spec-price font-weight-bold">
                            KHUYẾN MÃI 
                        </div>
                        
                    </div>
                    <ul class="ul">
                        <li>
                            <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                            </span>
                        </li>
                        <li>
                            <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                            </span>
                        </li>
                        <li>
                            <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                        </li>
                    </ul>
                </div> -->

                <br/>
              <!--   <div class="pd-addon-group" style="margin:15px 0;border: 0 !important">
                    <p style="color: #428bca;"><b>Dịch vụ bảo hành (tùy chọn) <a href="https://www.anphatpc.com.vn/bao-hanh-mo-uu-dai-rong.html" target="_blank"> <font color="Red">Xem chi tiết</font> </a></b></p>
                    <div class="d-flex flex-wrap">
                        <label class="item">
                            <p class="title">Thêm 1 năm bảo hành (BHMR0073) <span class="price">(+179.000 ₫)</span></p>
                            <i class="checkbox-square"></i>
                            <input type="checkbox" value="77" data-price="179000" class="js-addon-select">                       
                        </label>
                        <label class="item">
                            <p class="title">Thêm 2 năm bảo hành (BHMR0101) <span class="price">(+249.000 ₫)</span></p>
                            <i class="checkbox-square"></i>
                            <input type="checkbox" value="100" data-price="249000" class="js-addon-select">                       
                        </label>
                    </div>
                </div> -->
                <!-- button -->
                <div class="pro-button-container d-flex flex-wrap text-center justify-content-between">
                    <!-- Button Mua hàng -->
                    <a href="javascript:void(0)" class="w-100 btn-buyNow js-buy-now" onclick="addToCartRedirect({{ $data->id }})">
                    <b class="d-block text-18 font-500"> ĐẶT MUA NGAY </b>
                    <span class="text-12 d-block"> Nhanh chóng, thuận tiện </span>
                    </a>
                    <a href="javascript:void(0)" class="btn-addCart blue order-1 js-addCart" onclick="addToCart({{ $data->id }})">
                    <b class="d-block text-18 font-500" > CHO VÀO GIỎ </b>
                    <span class="text-12 d-block"> Mua tiếp sản phẩm khác </span>
                    </a>
                    <!-- End Button Mua hàng -->
                    <!-- Button trả góp -->
                    <a href="javascript:void(0)" class="btn-payinstall order-0">
                    <b class="d-block text-18 font-500"> MUA TRẢ GÓP </b>
                    <span class="text-12 d-block"> Thủ tục đơn giản </span>
                    </a>
                    <!-- End Button trả góp -->
                </div>
                <p class="blue icon-payment-container">
                    <b>Chấp nhận thanh toán:</b>
                    <i class="icon icon-payment"></i>
                </p>
            </div>
            <div class="product-detail-info-right">
                <div class="store-address-container">
                    <p style="display: flex;">
                        <i class="fa fa-map-marker" style="margin: 4px 10px 0 0;"></i>
                        <b style="color:red;display: inline-block;">Mua hàng Online toàn quốc: <br> (Hotline: 1900.0323 - Phím 1)</b>
                    </p>
                    <div id="js-out-stock" style="display: none;font-weight: bold;">
                        Kho hàng: <span class="red">Liên hệ</span>
                    </div>
                </div>
                <p><b>Trợ giúp</b></p>
                <div style="line-height:25px;">
                    <ul class="ul">
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/tin-khuyen-mai/huong-dan-dat-hang-flash-sale_idtin5339.html" target="blank">Hướng dẫn đặt hàng Flash Sale</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/huong-dan-dat-hang.html" target="blank">Hướng dẫn mua hàng</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/trung-tam-bao-hanh.html" target="blank">Chính sách bảo hành đổi trả</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/mua-tra-gop.html"target="blank">Chính sách mua trả góp</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/giao-hang.html" target="blank">Chính sách giao hàng</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/chinh-sach-bao-hanh-tan-nha.html" target="blank">Chính sách bảo hành tận nhà</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/phong-du-an-va-khach-hang-doanh-nghiep.html" target="blank">Hỗ trợ khách hàng dự án, doanh nghiệp </a> </li>
                    </ul>
                </div>
                <br>
                <!--  <br><br><p><b><font color="red">➤ KHUYẾN MẠI CỰC HOT ĐỪNG BỎ LỠ !!!</font></b></p>
                    <a href="https://www.anphatpc.com.vn/media/marketing/Buffet-CN/CTKM.html" target="new"><img src="https://anphat.com.vn/media/lib/03-01-2023/bfcn-500x654.jpg" ></a> -->
            </div>
        </div>
        <style type="text/css">
            .overflow-hidden{
            height: 600px !important;
            }
            .js-showless-button{
            display: none !important;
            }
        </style>
        <!-- mô tả + thông số + video + tin liên quan -->
        <div class="pro-desc-spec-container bg-white clearfix">
            <div class="item item-desc js-static-container">
                <p class="title"> MÔ TẢ SẢN PHẨM </p>
                {!! $data->Detail   !!}         
                <div class="text-center btn-html-content">
                    <a href="javascript:void(0)" class="js-showless-buttons">Xem thêm <i class="fa fa-angle-double-up"></i></a>
                </div>
            </div>
        </div>
        <div class="pro-video-art-container d-flex justify-content-between container">
            <div class="item item-left  h-100">
                <div class="pro-comment-container bg-white d-none">
                    <p class="title"> ĐÁNH GIÁ VÀ NHẬN XÉT </p>
                    <div class="new-box-comment">
                        <div class="comment-form">
                            <img src="https://www.anphatpc.com.vn/template/anphat_2020v2/images/noavatar.jpg" alt="avatar" class="img-avatar"/>
                            <form action="https://www.anphatpc.com.vn/ajax/post_comment.php" method="post" enctype="multipart/form-data"  onsubmit="return check_field(0)" class="form-post">
                                <input type=hidden name='user_post[item_type]' value='product'/>
                                <input type=hidden name='user_post[item_id]' value='41446'/>
                                <input type=hidden name='user_post[item_title]' value='Màn hình máy tính Dahua DHI-LM24-A200 23.6 inch FHD VA'/>
                                <input type=hidden name='user_post[rate]' value='0'/>
                                <input type=hidden name='user_post[title]' value='Màn hình máy tính Dahua DHI-LM24-A200 23.6 inch FHD VA'/>
                                <input type=hidden name='user_post[user_avatar]' value='0'/>
                                <div class="relative">
                                    <textarea name="user_post[content]" placeholder="Nội dung"  id="content0"></textarea>
                                    <div class="form-input">
                                        <a href="javascript:closeFormCommentInput();" class="close">x</a>
                                        <table style="width:100%;" class="tbl-common">
                                            <tr class="font14">
                                                <td colspan="2">
                                                    Đánh giá:
                                                    <div class="rating" id="rating-review0" style="display: inline-block; vertical-align:bottom;">
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-5" value="5" name="user_post[rate]" checked />
                                                        <label for="rating-input-review-0-5" class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-4" value="4" name="user_post[rate]" />
                                                        <label for="rating-input-review-0-4" class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-3" value="3" name="user_post[rate]" />
                                                        <label for="rating-input-review-0-3" class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-2" value="2" name="user_post[rate]" />
                                                        <label for="rating-input-review-0-2" class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-1" value="1" name="user_post[rate]"/>
                                                        <label for="rating-input-review-0-1" class="rating-star"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" id="name0" name='user_post[user_name]' class="inputText" placeholder="Họ tên" value=""/>
                                                </td>
                                                <td>
                                                    <input type="text" id="email0" name='user_post[user_email]' class="inputText" placeholder="Email" value=""/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="button" onclick="postReview('0','')" value="Gửi đánh giá của bạn" class="btn-comment-blue" /></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--form-input-->
                                </div>
                                <!--relative-->
                            </form>
                        </div>
                        <!--comment-form-->
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="pro-comment-container bg-white">
                    <p class="title"> HỎI ĐÁP </p>
                    <div id="comment" class="new-box-comment">
                        <div class="comment-form">
                            <img src="https://www.anphatpc.com.vn/template/anphat_2020v2/images/noavatar.jpg" alt="avatar" class="img-avatar"/>
                            <form action="https://www.anphatpc.com.vn/ajax/post_comment.php" method="post" enctype="multipart/form-data"  onsubmit="return check_field(0)" class="form-post js-comment-post">
                                <input type=hidden name='user_post[item_type]' value='product'/>
                                <input type=hidden name='user_post[item_id]' value='41446'/>
                                <input type=hidden name='user_post[item_title]' value='Màn hình máy tính Dahua DHI-LM24-A200 23.6 inch FHD VA'/>
                                <input type=hidden name='user_post[rate]' value='0'/>
                                <input type=hidden name='user_post[title]' value='Màn hình máy tính Dahua DHI-LM24-A200 23.6 inch FHD VA'/>
                                <input type=hidden name='user_post[user_avatar]' value='0'/>
                                <div class="relative">
                                    <textarea name="user_post[content]" placeholder="Nội dung"  id="contentcomment0"></textarea>
                                    <div class="form-input">
                                        <a href="javascript:closeFormCommentInput();" class="close">x</a>
                                        <table style="width:100%;" class="tbl-common">
                                            <tr class="font14">
                                                <td colspan="2">
                                                    Đánh giá:
                                                    <div class="rating" id="rating-review0" style="display: inline-block; vertical-align:bottom;">
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-5" value="5" name="user_post[rate]" checked />
                                                        <label for="rating-input-review-0-5" class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-4" value="4" name="user_post[rate]" />
                                                        <label for="rating-input-review-0-4" class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-3" value="3" name="user_post[rate]" />
                                                        <label for="rating-input-review-0-3" class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-2" value="2" name="user_post[rate]" />
                                                        <label for="rating-input-review-0-2" class="rating-star"></label>
                                                        <input type="radio" class="rating-input" id="rating-input-review-0-1" value="1" name="user_post[rate]"/>
                                                        <label for="rating-input-review-0-1" class="rating-star"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" id="namecomment0" name='user_post[user_name]' class="inputText" placeholder="Họ tên" value=""/>
                                                </td>
                                                <td>
                                                    <input type="text" id="telcomment0" name='user_post[user_tel]' class="inputText" placeholder="Số điện thoại" value=""/>
                                                </td>
                                                <td>
                                                    <input type="text" id="emailcomment0" name='user_post[user_email]' class="inputText" placeholder="Email" value=""/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="javascript:void(0);" class="uploadImage  js-upload-image js-test-upload-image" data-id="0" data-actions="comment" id="js-select-file-comment0"><i class="fa fa-camera" style="margin-right: 5px"></i>Gửi ảnh
                                                    <input class="js-preview-upload-ids" type="hidden" size="40" value="" accept="image/*;capture=camera"/>
                                                    </a>
                                                    <div class="js-preview-upload" id="js-preview-file-upload-comment-0" style=""></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="text" size="10" name="register_captcha" class="form-control" style="width:100px; float:left;" onkeyup="check_user_captcha(this.value)"/>
                                                    <img src="https://www.anphatpc.com.vn/includes/captcha/captcha.php?v=" id="captchaimg" style="height:50px;margin-top: -9px;float:left;margin-left: 5px;"/>
                                                    <a id="change-image" onclick="document.getElementById('captchaimg').src='https://www.anphatpc.com.vn/includes/captcha/captcha.php?'+Math.random();" href="javascript:;" style="float:left;margin-top: 8px;">[Xem mã khác]</a>
                                                    <div style="clear: both;"></div>
                                                    <p id="check_user2" style="color: #ff0000;"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="button" onclick="postComment('0','')" value="Gửi câu hỏi của bạn" class="btn-comment-blue btn-send-2021 js-btn-comment" style="pointer-events: none;background: grey;"/></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--form-input-->
                                </div>
                                <!--relative-->
                            </form>
                        </div>
                        <!--comment-form-->
                    </div>
                    <div class="clear"></div>
                </div>
                <!--   <div style="background: #fff;padding: 20px;">
                    <div class="fb-comments" data-href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm24-a200-23.6-inch-fhd-va.html" data-width="780" data-numposts="5"></div>
                    </div> -->
            </div>
            <!-- <div class="item item-art-related bg-white product-page h-100" id="js-art-related-container">
                <p class="title"> TIN TỨC LIÊN QUAN </p>
                
                
                <div class="p-cate-news" id="js-art-related">
                    
                </div>
                
                </div> -->
        </div>
        <!-- Sp tương tự - cùng hãng - liên quan -->

        <div class="container">
            <div class="product-related-container bg-white">
                <div class="pro-tab-title clearfix">
                    <a href="javascript:void(0)" data-id="js-tab-1" class="js-tab-title"> SẢN PHẨM TƯƠNG TỰ </a>
                    <a href="javascript:void(0)" data-id="js-tab-2" class="js-tab-title"> SẢN PHẨM CÙNG HÃNG </a>
                    <a href="javascript:void(0)" data-id="js-tab-3" class="js-tab-title"> SẢN PHẨM LIÊN QUAN </a>
                </div>
                <div class="pro-tab-items">
                    <!-- SẢN PHẨM TƯƠNG TỰ-->
                    <div class="custom-nav owl-carousel owl-theme js-product-carousel product-tab-item" id="js-tab-1">
                        <div class='p-item  js-p-item' data-id="44412">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-e-dra-egm24f75-24-inch-fhd-ips-75hz.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_44412_m__n_h__nh_m__y_t__nh_e_dra_egm24f75_24_inch_fhd_ips_75hz_ap_9_.jpg" alt="Màn hình máy tính E-DRA EGM24F75 24 inch FHD IPS 75Hz" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-44412">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOED0004 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-e-dra-egm24f75-24-inch-fhd-ips-75hz.html" class="p-name">
                                    <h3>Màn hình máy tính E-DRA EGM24F75 24 inch FHD IPS 75Hz</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 2.499.000 đ </del>
                                    <span class="p-discount"> -21% </span>
                                    <span class="p-price">
                                    1.999.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(44412,'https://anphat.com.vn/media/product/250_44412_m__n_h__nh_m__y_t__nh_e_dra_egm24f75_24_inch_fhd_ips_75hz_ap_9_.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(44412)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính E-DRA EGM24F75 24 inch FHD IPS 75Hz </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ
                                                <a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> 
                                                <font color="DodgerBlue">Xem chi tiết</font> 
                                                </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình
                                                <a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> 
                                                <font color="DodgerBlue">Xem chi tiết</font> 
                                                </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920x1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 2.499.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -21% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            1.999.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="44317">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p24v-g5-64w18aa-23.8-inch-fhd-va-75-hz.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_44317_m__n_h__nh_m__y_t__nh_hp_p24v_g5_64w18aa_23_8_inch_fhd_va_75_hz__1_.jpg" alt="Màn hình máy tính HP P24v G5 64W18AA 23.8 inch FHD-75 Hz" class="fit-img lazy" />
                                <span class="icon-new"></span>
                                <span class="p-icon-holder js-icon-44317">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOHP0121 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p24v-g5-64w18aa-23.8-inch-fhd-va-75-hz.html" class="p-name">
                                    <h3>Màn hình máy tính HP P24v G5 64W18AA 23.8 inch FHD-75 Hz</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 4.299.000 đ </del>
                                    <span class="p-discount"> -16% </span>
                                    <span class="p-price">
                                    3.649.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(44317,'https://anphat.com.vn/media/product/250_44317_m__n_h__nh_m__y_t__nh_hp_p24v_g5_64w18aa_23_8_inch_fhd_va_75_hz__1_.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(44317)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính HP P24v G5 64W18AA 23.8 inch FHD-75 Hz </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: VA
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920 x 1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 4.299.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -16% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            3.649.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="39028">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dell-p2422h-23.8-inch-fhd-ips.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_39028_dell_p2422h_3_900x.jpg" alt="Màn hình máy tính Dell P2422H 23.8 inch FHD IPS " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-39028">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MODE0140 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dell-p2422h-23.8-inch-fhd-ips.html" class="p-name">
                                    <h3>Màn hình máy tính Dell P2422H 23.8 inch FHD IPS </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 6.099.000 đ </del>
                                    <span class="p-discount"> -13% </span>
                                    <span class="p-price">
                                    5.339.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(39028,'https://anphat.com.vn/media/product/250_39028_dell_p2422h_3_900x.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(39028)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính Dell P2422H 23.8 inch FHD IPS  </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: Full HD (1920x1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 6.099.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -13% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            5.339.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="37123">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-asus-proart-pa247cv-23.8-inch-fhd-ips-chuyen-do-hoa.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_37123_m__n_h__nh_m__y_t__nh_asus_proart_pa247cv_23_8_inch_fhd_ips___chuy__n_______h___a.jpg" alt="Màn hình máy tính Asus ProArt PA247CV 23.8 inch FHD IPS - chuyên đồ họa" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-37123">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOAS0098 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-asus-proart-pa247cv-23.8-inch-fhd-ips-chuyen-do-hoa.html" class="p-name">
                                    <h3>Màn hình máy tính Asus ProArt PA247CV 23.8 inch FHD IPS - chuyên đồ họa</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 7.999.000 đ </del>
                                    <span class="p-discount"> -21% </span>
                                    <span class="p-price">
                                    6.399.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(37123,'https://anphat.com.vn/media/product/250_37123_m__n_h__nh_m__y_t__nh_asus_proart_pa247cv_23_8_inch_fhd_ips___chuy__n_______h___a.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(37123)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính Asus ProArt PA247CV 23.8 inch FHD IPS - chuyên đồ họa </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">🎁Áp dụng 06/01 đến 28/02/2023 hoặc đến khi hết quà : Tặng đèn bảo vệ mắt gắn màn hình: </span><a href="https://www.asus.com/vn/events/infoM/activity_ChuanDoHoa/"><span style="color: red"><b> Đăng ký tại đây </span></a></b>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">🎁Áp dụng 01/02 đến 28/02/2023 hoặc đến khi hết quà : Tặng 01 áo thun Asus ProArt (PKKH1024)
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">🎁Áp dụng 01/01 đến 31/08/2023 : Tặng ngay bộ Adobe Creative Cloud lên đến 3 tháng  <a href="https://www.asus.com/vn/events/infoM/activity_2913/"><span style="color: red"><b> Chi tiết xem tại đây </span></a></b>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    
                                                </li>
                                                
                                                <li>
                                                    
                                                </li>
                                                
                                                <li>
                                                    
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> 🎁Áp dụng 06/01 đến 28/02/2023 hoặc đến khi hết quà : Tặng đèn bảo vệ mắt gắn màn hình: </span><a href="https://www.asus.com/vn/events/infoM/activity_ChuanDoHoa/"><span style="color: red"><b> Đăng ký tại đây </span></a></b>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> 🎁Áp dụng 01/02 đến 28/02/2023 hoặc đến khi hết quà : Tặng 01 áo thun Asus ProArt (PKKH1024)
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <!--3-->
                                            <li>
                                            </li>
                                            <!--4-->
                                            <li>
                                            </li>
                                            <!--5-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;"> ... 
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920x1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 7.999.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -21% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            6.399.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="34818">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-viewsonic-vx2718-pc-mhd-27-inch-fhd-cong.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_34818_54636_vx2718__4_.png" alt="Màn hình máy tính Viewsonic VX2718-PC-MHD 27 inch FHD Cong Gaming 165Hz" class="fit-img lazy" />
                                <span class="btn-outStock"> LIÊN HỆ </span>        
                                <span class="p-icon-holder js-icon-34818">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOVI0044 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-viewsonic-vx2718-pc-mhd-27-inch-fhd-cong.html" class="p-name">
                                    <h3>Màn hình máy tính Viewsonic VX2718-PC-MHD 27 inch FHD Cong Gaming 165Hz</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 6.499.000 đ </del>
                                    <span class="p-discount"> -24% </span>
                                    <span class="p-price">
                                    4.999.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(34818,'https://anphat.com.vn/media/product/250_34818_54636_vx2718__4_.png', this)">So sánh</a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính Viewsonic VX2718-PC-MHD 27 inch FHD Cong Gaming 165Hz </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Cong
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 27 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: VA Technology
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: Full HD (1920x1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 6.499.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -24% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            4.999.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="35531">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-viewsonic-va2732-h-27-inch-fhd-ips.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_35531_va2732_h_f02_pc_h.jpg" alt="Màn hình máy tính Viewsonic VA2732-H 27 inch FHD IPS " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-35531">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOVI0048 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-viewsonic-va2732-h-27-inch-fhd-ips.html" class="p-name">
                                    <h3>Màn hình máy tính Viewsonic VA2732-H 27 inch FHD IPS </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 4.999.000 đ </del>
                                    <span class="p-discount"> -35% </span>
                                    <span class="p-price">
                                    3.299.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(35531,'https://anphat.com.vn/media/product/250_35531_va2732_h_f02_pc_h.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(35531)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính Viewsonic VA2732-H 27 inch FHD IPS  </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình Phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 27 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: Full HD (1920x1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 4.999.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -35% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            3.299.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="44067">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p22-g5-64x86aa-21.5-inch-fhd-ips.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_44067_c08223043.png" alt="Màn hình máy tính HP P22 G5 64X86AA 21.5 inch FHD IPS" class="fit-img lazy" />
                                <span class="icon-new"></span>
                                <span class="p-icon-holder js-icon-44067">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOHP0122 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p22-g5-64x86aa-21.5-inch-fhd-ips.html" class="p-name">
                                    <h3>Màn hình máy tính HP P22 G5 64X86AA 21.5 inch FHD IPS</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 3.999.000 đ </del>
                                    <span class="p-discount"> -28% </span>
                                    <span class="p-price">
                                    2.899.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(44067,'https://anphat.com.vn/media/product/250_44067_c08223043.png', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(44067)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính HP P22 G5 64X86AA 21.5 inch FHD IPS </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a> </span>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 21.5 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920 x 1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 3.999.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -28% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            2.899.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="35200">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p22v-g4-21.5-inch-fhd-9tt53aa.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_35200_b45cd11876917dd1e7691590d6324174.jpg" alt="Màn hình máy tính HP P22v G4 21.5 inch FHD (9TT53AA)" class="fit-img lazy" />
                                <span class="btn-outStock"> LIÊN HỆ </span>        
                                <span class="p-icon-holder js-icon-35200">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOHP0093 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p22v-g4-21.5-inch-fhd-9tt53aa.html" class="p-name">
                                    <h3>Màn hình máy tính HP P22v G4 21.5 inch FHD (9TT53AA)</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 3.890.000 đ </del>
                                    <span class="p-discount"> -27% </span>
                                    <span class="p-price">
                                    2.849.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(35200,'https://anphat.com.vn/media/product/250_35200_b45cd11876917dd1e7691590d6324174.jpg', this)">So sánh</a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính HP P22v G4 21.5 inch FHD (9TT53AA) </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a> </span>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 21.5 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: TN 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920 x 1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 3.890.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -27% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            2.849.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="35533">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p24-g4-1a7e5aa-23-8-inch-fhd-ips.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_35533_thumb650_hp_p24_g4_1a7e5aa_1.png" alt="Màn hình máy tính HP P24 G4 1A7E5AA 23.8 inch FHD IPS " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-35533">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOHP0096 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p24-g4-1a7e5aa-23-8-inch-fhd-ips.html" class="p-name">
                                    <h3>Màn hình máy tính HP P24 G4 1A7E5AA 23.8 inch FHD IPS </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 5.099.000 đ </del>
                                    <span class="p-discount"> -26% </span>
                                    <span class="p-price">
                                    3.799.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(35533,'https://anphat.com.vn/media/product/250_35533_thumb650_hp_p24_g4_1a7e5aa_1.png', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(35533)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính HP P24 G4 1A7E5AA 23.8 inch FHD IPS  </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình Phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: Full HD (1920x1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 5.099.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -26% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            3.799.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="42650">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-samsung-viewfinity-s8-ls27b800pxexxv-27-inch-4k-ips-60hz-usc-c-rj45.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_42650_m__n_h__nh_m__y_t__nh_samsung_viewfinity_s8_27_inch_4k_ips_60hz_ls27b800pxexxv___5_.jpg" alt="Màn hình máy tính Samsung ViewFinity S8 LS27B800PXEXXV 27 inch 4k IPS 60Hz USC-C RJ45" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-42650">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOSS0148 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-samsung-viewfinity-s8-ls27b800pxexxv-27-inch-4k-ips-60hz-usc-c-rj45.html" class="p-name">
                                    <h3>Màn hình máy tính Samsung ViewFinity S8 LS27B800PXEXXV 27 inch 4k IPS 60Hz USC-C RJ45</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 14.999.000 đ </del>
                                    <span class="p-discount"> -34% </span>
                                    <span class="p-price">
                                    9.999.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(42650,'https://anphat.com.vn/media/product/250_42650_m__n_h__nh_m__y_t__nh_samsung_viewfinity_s8_27_inch_4k_ips_60hz_ls27b800pxexxv___5_.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(42650)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính Samsung ViewFinity S8 LS27B800PXEXXV 27 inch 4k IPS 60Hz USC-C RJ45 </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: màn hình phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 27 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền:IPS 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: UHD(3840 x 2160) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 14.999.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -34% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            9.999.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SẢN PHẨM CÙNG HÃNG -->
                    <div class="custom-nav owl-carousel owl-theme js-product-carousel product-tab-item " id="js-tab-2">
                        <div class='p-item  js-p-item' data-id="41450">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm27-a200-27-inch-fhd-va.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41450_41446_dhi_lm24_a200.jpg" alt="Màn hình máy tính Dahua DHI-LM27-A200 27 inch FHD VA" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-41450">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MODH0007 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm27-a200-27-inch-fhd-va.html" class="p-name">
                                    <h3>Màn hình máy tính Dahua DHI-LM27-A200 27 inch FHD VA</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 3.999.000 đ </del>
                                    <span class="p-discount"> -28% </span>
                                    <span class="p-price">
                                    2.899.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41450,'https://anphat.com.vn/media/product/250_41450_41446_dhi_lm24_a200.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41450)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính Dahua DHI-LM27-A200 27 inch FHD VA </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:09
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 27 inch
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: VA 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920 x 1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 3.999.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -28% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            2.899.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="30902">
                            <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-b2a21p.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_30902_camera_dahua_dh_hac_b2a21p_1.jpg" alt="Camera Dahua DH-HAC-B2A21P  " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-30902">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: CAME0254 </span>
                                <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-b2a21p.html" class="p-name">
                                    <h3>Camera Dahua DH-HAC-B2A21P    </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 675.000 đ </del>
                                    <span class="p-discount"> -12% </span>
                                    <span class="p-price">
                                    599.000 đ
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(30902,'https://anphat.com.vn/media/product/250_30902_camera_dahua_dh_hac_b2a21p_1.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(30902)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera Dahua DH-HAC-B2A21P     </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải 2.0Megapixel cảm biến CMOS kích thước 1/2.7"", 30fps@1080P
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Thời gian thực không trễ hình, độ nhạy sáng tối thiểu  0.04Lux/F1.85, 0Lux IR on, chế độ ngày đêm(ICR), tự động cân bằng trắng (AWB),tự động bù tín hiệu ảnh (AGC), bù sáng(BLC), Chống nhiễu (2D-DNR),
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tầm xa hồng ngoại 20m với công nghệ hồng ngoại thông minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Thiết kế mới nhỏ gọn, thẩm mỹ, dễ dàng lắp đặt
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Ống kính cố định 3.6mm, chuẩn kháng nước IP67, vỏ kim loại. </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 675.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -12% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            599.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="30910">
                            <a href="https://www.anphatpc.com.vn/dau-ghi-hinh-dahua-dh-xvr1a08.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_30910_dahua_dh_xvr1a08_1.png" alt="Đầu ghi hình Dahua DH-XVR1A08 " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-30910">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: CAME0260 </span>
                                <a href="https://www.anphatpc.com.vn/dau-ghi-hinh-dahua-dh-xvr1a08.html" class="p-name">
                                    <h3>Đầu ghi hình Dahua DH-XVR1A08  </h3>
                                </a>
                                <div class="price-container">
                                    <span class="p-price">
                                    1.350.000 đ
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(30910,'https://anphat.com.vn/media/product/250_30910_dahua_dh_xvr1a08_1.png', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(30910)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Đầu ghi hình Dahua DH-XVR1A08  </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Đầu ghi hình 8 kênh, hỗ trợ camera HDCVI/Analog/IP/TVI/AHD, chuẩn nén hình ảnh H.264, độ phân giải 1080N/720P/960H/D1(1-25fps)
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hỗ trợ ghi hình tất cả các kênh 1080N, cổng ra tín hiệu video đồng thời HDMI/VGA, hỗ trợ xem lại 4/8 kênh đồng thời với chế độ tìm kiếm thông minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hỗ trợ kết nối nhiều nhãn hiệu camera IP(8+2) hỗ trợ lên đến camera 2MP đầu 4 kênh và 5MP đầu 8, với chuẩn tương tích Onvif 16.12, hỗ trợ 1 ổ cứng 6TB, 2 cổng usb 2.0, 1 cổng mạng RJ45(100M), hỗ trợ điều kiển quay quét 3D thông minh với giao thức Dahua
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hỗ trợ xem lại và trực tiếp qua mạng máy tính, thiết bị di động, hỗ trợ cấu hình thông minh qua P2P,  Hỗ trợ Camera tích hợp Mic ghi âm tất cả các kênh, 1 cổng audio vào ra hỗ trợ đàm thoại hai chiều, chế độ chia màn hình 1/4 đối với đầu 4 cổng và 1/4/8/9 đối với đầu 8 cổng , quản lý đồng thời 128 tài khoản kết nối, điện áp DC 12V/1.5A công suất không ổ cứng 10W
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Môi trường làm việc -10 ~ 55 độ C, kích thước 197mm×192mm×41mm, trọng lượng không ổ cứng 1KG. Chất liệu kim loại" </span>
                                    </div>
                                    <div class="position-relative">
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            1.350.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="41655">
                            <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-hfw1200tp-s5-2mp-ngoai-troi.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41655_" alt="Camera Dahua DH-HAC-HFW1200TP-S5 2MP ngoài trời" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-41655">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: CAME0887 </span>
                                <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-hfw1200tp-s5-2mp-ngoai-troi.html" class="p-name">
                                    <h3>Camera Dahua DH-HAC-HFW1200TP-S5 2MP ngoài trời</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 899.000 đ </del>
                                    <span class="p-discount"> -46% </span>
                                    <span class="p-price">
                                    489.000 đ
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41655,'https://anphat.com.vn/media/product/250_41655_', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41655)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera Dahua DH-HAC-HFW1200TP-S5 2MP ngoài trời </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Camera hỗ trợ HDCVI/HDTVI/AHD/ANALOG, tích hợp OSD
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải 2Megapixel, cảm biến CMOS 1/2.7" 25/30fps@1080P(1920×1080), cho phân giải HD trên đường truyền analog.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Thời gian thực không trễ hình, độ nhạy sáng tối thiểu 0.02Lux@F1.85(0Lux IR LED on), chế độ ngày đêm(ICR), tự động cân bằng trắng (AWB), tự động bù tín hiệu ảnh (AGC), bù sáng(BLC), chống nhiễu (3D-DNR), tầm xa hồng ngoại 30m với công nghệ hồng ngoại thông minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Ống kính cố định 3.6mm, chuẩn ngâm nước IP67,  điện áp DC12V, công suất 3,6W. 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Chất liệu vỏ kim loại, môi trường làm việc từ -30°C~+60°C, khoảng cách truyền tải trên cáp đồng trục lên đến 500m với cáp 75-3 ôm,kích thước 176mm×72.4mm×72.5mm  trọng lượng 0.46KG </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 899.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -46% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            489.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="41978">
                            <a href="https://www.anphatpc.com.vn/dau-ghi-hinh-camera-ip-4-kenh-dahua-nvr2104hs-4ks2.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41978______u_ghi_h__nh_camera_ip_4_k__nh_dahua_nvr2104hs_4ks2.jpg" alt="Đầu ghi hình camera IP 4 kênh DAHUA NVR2104HS-4KS2" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-41978">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: CAME0194 </span>
                                <a href="https://www.anphatpc.com.vn/dau-ghi-hinh-camera-ip-4-kenh-dahua-nvr2104hs-4ks2.html" class="p-name">
                                    <h3>Đầu ghi hình camera IP 4 kênh DAHUA NVR2104HS-4KS2</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 3.180.000 đ </del>
                                    <span class="p-discount"> -50% </span>
                                    <span class="p-price">
                                    1.590.000 đ
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41978,'https://anphat.com.vn/media/product/250_41978______u_ghi_h__nh_camera_ip_4_k__nh_dahua_nvr2104hs_4ks2.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41978)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Đầu ghi hình camera IP 4 kênh DAHUA NVR2104HS-4KS2 </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Chuẩn nén hình ảnh: H.265/H.264.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hai luồng dữ liệu hỗ trợ hiển thị 1CH 8MP và 4CH 1080P.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Băng thông đầu vào tối đa là 80Mbps.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hỗ trợ camera có độ phân giải lên đến 8 Megapixel.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tương thích với tín hiệu ngõ ra: HDMI/VGA.
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 3.180.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -50% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            1.590.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="30904">
                            <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-hdw1200mp-s4_id30904.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_30904_camera_dahua_dh_hac_hdw1200mp_s4_1.jpg" alt="Camera Dahua DH-HAC-HDW1200MP-S4  " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-30904">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: CAME0249 </span>
                                <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-hdw1200mp-s4_id30904.html" class="p-name">
                                    <h3>Camera Dahua DH-HAC-HDW1200MP-S4    </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 889.000 đ </del>
                                    <span class="p-discount"> -45% </span>
                                    <span class="p-price">
                                    489.000 đ
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(30904,'https://anphat.com.vn/media/product/250_30904_camera_dahua_dh_hac_hdw1200mp_s4_1.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(30904)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera Dahua DH-HAC-HDW1200MP-S4   </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Camera hỗ trợ HDCVI/HDTVI/AHD/ANALOG, tích hợp OSD
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải 2.0Megapixel cảm biến CMOS 1/2.7"" 25/30fps@1080P(1920×1080)
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Cho phân giải HD trên đường truyền analog, thời gian thực không trễ hình
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>• Độ nhạy sáng tối thiểu 0.02Lux/F1,85, 0Lux IR on, chế độ ngày đêm(ICR), tự động cân bằng trắng (AWB),tự động bù tín hiệu ảnh(AGC), bù sáng(BLC), chống nhiễu (3D-DNR), tầm xa hồng ngoại 30m với công nghệ hồng ngoại thông minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Ống kính cố định 3.6mm, chuẩn ngâm nước IP67,  điện áp DC12V, công suất 3,3W
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 889.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -45% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            489.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="36355">
                            <a href="https://www.anphatpc.com.vn/camera-ip-hong-ngoai-2mp-dahua-dh-ipc-hfw1230sp-s4.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_36355_3212e477c13110a54cb65cca6c0a28f6.jpg" alt="Camera IP hồng ngoại 2MP Dahua DH-IPC-HFW1230SP-S4" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-36355">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: CAME0281 </span>
                                <a href="https://www.anphatpc.com.vn/camera-ip-hong-ngoai-2mp-dahua-dh-ipc-hfw1230sp-s4.html" class="p-name">
                                    <h3>Camera IP hồng ngoại 2MP Dahua DH-IPC-HFW1230SP-S4</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 1.449.000 đ </del>
                                    <span class="p-discount"> -39% </span>
                                    <span class="p-price">
                                    890.000 đ
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(36355,'https://anphat.com.vn/media/product/250_36355_3212e477c13110a54cb65cca6c0a28f6.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(36355)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera IP hồng ngoại 2MP Dahua DH-IPC-HFW1230SP-S4 </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải 2 Megapixel cảm biến CMOS 1/2.7”, Max 25/30fps@1080P
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hỗ trợ mã hóa 2 luồng với định dạng H.265 và H.264
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Chế độ ngày đêm (ICR), Chống ngược sáng DWDR, tự động cân bằng trắng (AWB), tự động bù tín hiệu ảnh (AGC), bù sáng (BLC), chống nhiễu (3D-DNR), tầm xa hồng ngoại 30m với công nghệ hồng ngoại thông minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hỗ trợ xem hình bằng nhiều công cụ: Web, phần mềm CMS (DSS/PSS) và DMSS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Ống kính cố định 3.6mm, chuẩn tương thích Onvif 2.4, chuẩn chống nước IP67,  điện áp DC12V hoặc PoE (802.3af), công suất 5,5W </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 1.449.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -39% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            890.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="41424">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm22-a200-21.45-inch-fhd-va.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41424_" alt="Màn hình máy tính Dahua DHI-LM22-A200 21.45 inch FHD VA" class="fit-img lazy" />
                                <span class="icon-new"></span>
                                <span class="p-icon-holder js-icon-41424">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MODH0005 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm22-a200-21.45-inch-fhd-va.html" class="p-name">
                                    <h3>Màn hình máy tính Dahua DHI-LM22-A200 21.45 inch FHD VA</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 2.599.000 đ </del>
                                    <span class="p-discount"> -29% </span>
                                    <span class="p-price">
                                    1.869.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    2 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41424,'https://anphat.com.vn/media/product/250_41424_', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41424)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính Dahua DHI-LM22-A200 21.45 inch FHD VA </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!--0-->
                                            <li>
                                                <span class="text" style="white-space: pre-line;">🎁 Giá Cực Sốc dành riêng cho chi nhánh Băc Ninh: Từ 10/02/2023 đến hết ngày 28/2/2023 giá  chỉ còn <b><font color ="red"> 1.699.000đ </font></b>.</span>
                                            </li>
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">🎁Áp dụng từ 01/02 đến 28/02/2023 : Giảm thêm 100.000 VNĐ khi mua cùng PC bất kỳ hoặc Laptop 
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    
                                                </li>
                                                
                                                --->
                                            <!--1-->
                                            <li>
                                                <span class="text"> 🎁Áp dụng từ 01/02 đến 28/02/2023 : Giảm thêm 100.000 VNĐ khi mua cùng PC bất kỳ hoặc Laptop 
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--3-->
                                            <li>
                                            </li>
                                            <!--4-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;"> ... 
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:09
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 21.45 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: VA
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920 x 1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 2.599.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -29% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            1.869.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="41465">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhl32-s200-31.5-inch-fhd-va-gaming.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41465_ytuu.jpg" alt="Màn hình máy tính Dahua DHL32-S200 31.5 inch FHD VA Gaming" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-41465">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MODH0008 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhl32-s200-31.5-inch-fhd-va-gaming.html" class="p-name">
                                    <h3>Màn hình máy tính Dahua DHL32-S200 31.5 inch FHD VA Gaming</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 9.999.000 đ </del>
                                    <span class="p-discount"> -31% </span>
                                    <span class="p-price">
                                    6.999.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41465,'https://anphat.com.vn/media/product/250_41465_ytuu.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41465)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính Dahua DHL32-S200 31.5 inch FHD VA Gaming </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:09
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 31.5 inch
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: VA 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920 x 1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 9.999.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -31% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            6.999.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="36356">
                            <a href="https://www.anphatpc.com.vn/camera-ip-hong-ngoai-2mp-dahua-dh-ipc-hdw1230sp-s4.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_36356_24579adb95d5561eb07e013d9318d0bc.jpg" alt="Camera IP hồng ngoại 2MP Dahua DH-IPC-HDW1230SP-S4" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-36356">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: CAME0282 </span>
                                <a href="https://www.anphatpc.com.vn/camera-ip-hong-ngoai-2mp-dahua-dh-ipc-hdw1230sp-s4.html" class="p-name">
                                    <h3>Camera IP hồng ngoại 2MP Dahua DH-IPC-HDW1230SP-S4</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 1.449.000 đ </del>
                                    <span class="p-discount"> -39% </span>
                                    <span class="p-price">
                                    890.000 đ
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(36356,'https://anphat.com.vn/media/product/250_36356_24579adb95d5561eb07e013d9318d0bc.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(36356)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera IP hồng ngoại 2MP Dahua DH-IPC-HDW1230SP-S4 </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải 2 Megapixel cảm biến CMOS 1/2.7”, Max 25/30fps@1080P
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hỗ trợ mã hóa 2 luồng với định dạng H.265 và H.264
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Chế độ ngày đêm (ICR), Chống ngược sáng DWDR, tự động cân bằng trắng (AWB), tự động bù tín hiệu ảnh (AGC), bù sáng (BLC), chống nhiễu (3D-DNR), tầm xa hồng ngoại 30m với công nghệ hồng ngoại thông minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hỗ trợ xem hình bằng nhiều công cụ: Web, phần mềm CMS (DSS/PSS) và DMSS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Ống kính cố định 3.6mm, chuẩn tương thích Onvif 2.4, chuẩn chống nước IP67,  điện áp DC12V hoặc PoE (802.3af), công suất 5,5W </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 1.449.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -39% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            890.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SẢN PHẨM LIÊN QUAN - cùng giá-->
                    <div class="custom-nav owl-carousel owl-theme js-product-carousel product-tab-item " id="js-tab-3">
                        <div class='p-item  js-p-item' data-id="44412">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-e-dra-egm24f75-24-inch-fhd-ips-75hz.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_44412_m__n_h__nh_m__y_t__nh_e_dra_egm24f75_24_inch_fhd_ips_75hz_ap_9_.jpg" alt="Màn hình máy tính E-DRA EGM24F75 24 inch FHD IPS 75Hz" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-44412">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOED0004 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-e-dra-egm24f75-24-inch-fhd-ips-75hz.html" class="p-name">
                                    <h3>Màn hình máy tính E-DRA EGM24F75 24 inch FHD IPS 75Hz</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 2.499.000 đ </del>
                                    <span class="p-discount"> -21% </span>
                                    <span class="p-price">
                                    1.999.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(44412,'https://anphat.com.vn/media/product/250_44412_m__n_h__nh_m__y_t__nh_e_dra_egm24f75_24_inch_fhd_ips_75hz_ap_9_.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(44412)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính E-DRA EGM24F75 24 inch FHD IPS 75Hz </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Loại màn hình: Màn hình phẳng 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tỉ lệ: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: FHD (1920x1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 2.499.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -21% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            1.999.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="23462">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-aoc-e2070swn-195.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_23462_produto_aoc_1_serie_70_f_90_mh.jpg" alt="Màn hình máy tính AOC E2070SWN 19.5''" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-23462">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">Mã SP: MOAO0033 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-aoc-e2070swn-195.html" class="p-name">
                                    <h3>Màn hình máy tính AOC E2070SWN 19.5''</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 2.799.000 đ </del>
                                    <span class="p-discount"> -27% </span>
                                    <span class="p-price">
                                    2.050.000 đ
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuyến mại
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(23462,'https://anphat.com.vn/media/product/250_23462_produto_aoc_1_serie_70_f_90_mh.jpg', this)">So sánh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(23462)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Màn hình máy tính AOC E2070SWN 19.5'' </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUYẾN MÃI</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">✦ Giảm 10% cáp Displayport cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ✦ HOT Giảm ngay 5% giá treo màn hình đa năng khi mua cùng màn hình bất kỳ<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ✦ Giảm 10% cáp HDMI Vention cao cấp khi mua kèm màn hình<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi tiết</font> </a>
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Kích thước: 19,5" Wide Screen 170/160 (CR≥10)
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ phân giải: 1600×900@60Hz
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Độ sáng (Max): 200 cd/m2;
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Tấm nền : TN
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Góc nhìn (Ngang/Dọc) :90/50 º
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Giá niêm yết:
                                        <del class="p-old-price" style="display: inline-block;"> 2.799.000 đ </del>
                                        </span>
                                        <span class="p-discount"> -27% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                            2.050.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- popup thong so-->
    <div class="popup-spec" id="pro-spec" style="display: none;">
        <table style="width: 100%;" border="1">
            <tbody>
                <tr>
                    <td style="width: 373.5pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="498">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;"><strong><span style="color: black;">M&ocirc; tả&nbsp;chi tiết</span></strong><span style="color: black;">&nbsp;</span><a href="https://www.anphatpc.com.vn/man-hinh-vi-tinh_dm1052.html"><strong>M&agrave;n h&igrave;nh vi t&iacute;nh</strong></a></span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">H&atilde;ng sản xuất</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Dahua&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Model</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">DHI-LM24-A200</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">K&iacute;ch thước m&agrave;n h&igrave;nh</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">23.6&nbsp;inch</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Độ ph&acirc;n giải</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">FHD (1920 x 1080)&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Tỉ lệ</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">16:9</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Tấm nền m&agrave;n h&igrave;nh</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">VA</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Độ s&aacute;ng</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">220cd/m2 (Typ)</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">M&agrave;u sắc hiển thị</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">16,7 Triệu m&agrave;u</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Độ tương phản</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">3000:1 (Typ)</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Tần số qu&eacute;t</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;">TYP. 60Hz, MAX. 75Hz</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Cổng kết nối</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">VGA, HDMI</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Thời gian đ&aacute;p ứng</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">6.5ms</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">G&oacute;c nh&igrave;n</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">178&deg;(Ngang)/178&deg;(Dọc)</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">T&iacute;nh năng</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">-</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Điện năng ti&ecirc;u thụ</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">25w</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">K&iacute;ch thước</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">-</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">C&acirc;n nặng</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">3kg</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Phụ kiện</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">C&aacute;p nguồn</span></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- popup mo ta -->
    <div id="pro-desc" style="display: none;max-width: 1100px;">
        <p>&nbsp;</p>
        <article class="featureContent_caption">
            <article class="featureContent_caption"></article>
        </article>
        <article class="featureContent_caption">
            <article class="featureContent_caption"></article>
        </article>
    </div>

    @push('js')

    <script type="text/javascript">

        function addToCartRedirect(id) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            $.ajax({
                type: 'POST',
                url: "{{ route('addCart') }}",
                data: {
                    product_id: id,
                    gift_check:''
                       
                },
                beforeSend: function() {
                   
                    $('.loader').show();

                },
                success: function(result){

                    window.location.href= "{{ route('cart') }}";
                    
                }
            });
            
        }
        
    </script>
    
    

    @endpush
</section>

@endsection