
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
                    <a href="{{ route('details', $data->Link) }}" itemprop="item"> 
                        <span itemprop="name">{{  $data->Name }} </span> </a>
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
                    <!-- <p class="m-0 d-inline-block"> Ph??ng to  Hi??nh sa??n ph????m </p>
                    <span class="count js-dots" style="color: #222;">1 / 7</span>  -->
                </a>
                <!-- box dieu huong -->
                <!--  
                    -->
                <div class="image-type-container clearfix list-image-title">
                    <a href="javascript:void(0)" onclick="openBoxGallery(this);" data-id="anh_sp" data-name="Hi??nh sa??n ph????m" class="js-img-type current">
                    <span class="img">
                    <img src="https://anphat.com.vn/media/product/75_43427_laptop_dell_inspiron_15_3520_70296960__co__1_.jpg" alt="H??nh s???n ph???m" class="fit-img">
                    </span>
                    <span class="name"> H??nh s???n ph???m </span>
                    </a>
                    
                   <!--  <a href="javascript:void(0)" class="blue text-center" data-fancybox="" data-src="#pro-spec">
                    <i class="fa fa-exclamation-circle d-block" style="transform: rotate(180deg);"></i>
                    Xem th??ng s??? k??? thu???t
                    </a> -->
                </div>
                <!-- <div class="product-spec-group mb-4 font-300">
                    <div class="item-content position-relative">
                        <table style="width: 100.0%;" border="1" width="100%">
                            <tbody>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="line-height: 115%; color: black;">H??ng s???n xu???t</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><a href="https://www.anphatpc.com.vn/laptop-dell_dm1012.html">Laptop Dell</a></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="line-height: 115%; color: black;">T??n s???n ph???m&nbsp; &nbsp;</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: 0.75pt; text-align: center;" width="771">
                                        <h3 align="center"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><a href="https://www.anphatpc.com.vn/laptop-dell-inspiron-15-3520-70296960.html" target="_blank" class="current">Dell Inspiron 15 3520 70296960</a></span></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="line-height: 115%; color: black;">D??ng Laptop</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="line-height: 115%; color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><a href="https://www.anphatpc.com.vn/may-tinh-xach-tay-laptop.html">Laptop</a>&nbsp;|&nbsp;<a href="https://www.anphatpc.com.vn/laptop-dell-inspiron_dm1618.html" target="_blank">Laptop Dell Inspiron</a>&nbsp;|&nbsp;&nbsp;<a href="https://www.anphatpc.com.vn/laptop-van-phong-gia-re_dm1613.html">Laptop V??n Ph??ng</a>&nbsp;|&nbsp;<a href="https://www.anphatpc.com.vn/laptop-cho-sinh-vien-kinh-te_dm1904.html" target="_blank">Laptop cho sinh vi??n kinh t???</a></strong><br></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">B??? vi x??? l??</span></strong><span style="color: black;">&nbsp;</span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">C??ng ngh??? CPU</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Intel Core i5-1235U</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">S??? nh??n</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">10</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">S??? lu???ng</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">12</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">T???c ????? t???i ??a</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">4.40 GHz</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">B??? nh??? ?????m</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">12 MB</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">B??? nh??? trong (RAM)</span></strong></span></p>
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
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Lo???i RAM</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">DDR4</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">T???c ????? Bus RAM</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">3200MHz</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">S??? khe c???m</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;">2 khe&nbsp;</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">H??? tr??? RAM t???i ??a</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">-</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">??? c???ng&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Dung l?????ng</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">512GB M.2 PCIe NVMe SSD</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">T???c ????? v??ng quay</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Khe c???m SSD m??? r???ng</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm 0cm 0.0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">-</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">??? ????a quang (ODD)&nbsp;</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Kh??ng c??</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">M??n h??nh</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">K??ch th?????c m??n h??nh</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">15.6 FHD&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">????? ph??n gi???i</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">FHD (1920 x 1080)</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">T???n s??? qu??t</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">-</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">C??ng ngh??? m??n h??nh</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">WVA, LED-Backlit, 250 nit, Narrow Border</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">????? H???a (VGA)&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Card m??n h??nh</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">nVidia GeForce MX550 2GB</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">K???t n???i (Network)&nbsp;</span></strong></span></p>
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
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">B??n ph??m , Chu???t&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Ki???u b??n ph??m</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">B??n ph??m ti??u chu???n</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Chu???t</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">C???m ???ng ??a ??i???m</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 806.65pt; padding: .75pt .75pt .75pt .75pt;" colspan="2" width="1076">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Giao ti???p m??? r???ng&nbsp;</span></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">K???t n???i USB</span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">1 x USB 3.2 Gen 1 Type-C,</span></p>
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"> 1 x USB 3.2 Gen 1, </span></p>
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">2 x USB 3.2 Gen 1 ports (on systems configured with non Type-C) 1 x USB 2.0,&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">K???t n???i HDMI/VGA</span></p>
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
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Card m??? r???ng</span></p>
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
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Ki???u Pin</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">3 Cell,&nbsp;41Wh</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">S???c pin</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">??i k??m</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">H??? ??i???u h??nh&nbsp;(b???n quy???n) ??i k??m&nbsp;</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Windows 11 Home + Office Home and Student 2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">K??ch th?????c (D??i x R???ng x Cao)</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">21.07mm x 358.50mm x 235.56mm</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Tr???ng L?????ng</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">1.65 kg </span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">M??u s???c</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">B???c</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 226.95pt; padding: .75pt .75pt .75pt .75pt;" width="303">
                                        <p style="margin: 0cm; margin-bottom: .0001pt;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong><span style="color: black;">Xu???t X???</span></strong></span></p>
                                    </td>
                                    <td style="width: 578.2pt; padding: .75pt .75pt .75pt .75pt;" width="771">
                                        <p style="margin: 0cm; margin-bottom: .0001pt; text-align: center;"><span style="color: black; font-family: arial, helvetica, sans-serif; font-size: 10pt;">Trung Qu???c</span></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="javascript:void(0)" class="blue item-button" data-fancybox="" data-src="#pro-spec"> XEM TH??M TH??NG S??? <i class="fa fa-angle-double-down"></i></a>
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
                    <b>M?? SP: </b><span class="js-product-sku">{{  $data->ProductSku }}</span>
                    </span>
                    <span style="margin-left: 20px;">
                    <i class="icon-star star-0"></i>
                    0 ????nh gi??
                    </span>
                    <span style="margin: 0 20px;">
                    L?????t xem: 14.440
                    </span>
                    <a href="javascript:void(0)" class="js-p-compare blue" id="js-pd-item" onclick="compare_addProduct(41446,'https://anphat.com.vn/media/product/250_41446_dhi_lm24_a200.jpg', this)" ><i class="fa fa-plus-circle"></i> So s??nh</a>
                </div>
                <div class="pro-info-summary">
                    <!--0-->
                    <span class="item ">
                    <i class="fa fa-check-circle"></i>Lo???i m??n h??nh: M??n h??nh ph???ng
                    </span>
                    <!--1-->
                    <span class="item ">
                    <i class="fa fa-check-circle"></i>T??? l???: 16:09
                    </span>
                    <!--2-->
                    <span class="item ">
                    <i class="fa fa-check-circle"></i>K??ch th?????c: 23.6 inch
                    </span>
                    <!--3-->
                    <span class="item ">
                    <i class="fa fa-check-circle"></i>T???m n???n: VA 
                    </span>
                    <!--4-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>????? ph??n gi???i: FHD (1920 x 1080) 
                    </span>
                    <!--5-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>T???c ????? l??m m???i: max 75Hz
                    </span>
                    <!--6-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>Th???i gian ????p ???ng: 6.5ms
                    </span>
                    <!--7-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>C???ng k???t n???i: VGA, HDMI
                    </span>
                    <!--8-->
                    <span class="item hide">
                    <i class="fa fa-check-circle"></i>Ph??? ki???n: C??p ngu???n, c??p HDMI
                    </span>
                </div>
                <p><a href="javascript:void(0)" id="js-viewmore-summary" class="red">Xem th??m ></a></p>
                <div class="store-address-container">
                    <b class="d-block mb-2"> 
                    B???o h??nh: 36 Th??ng, ch??? ????? b???o h??nh 1 ?????i 1 trong 12 th??ng ?????u 
                    </b>
                </div>

                <div class="pro_info-price-container">
                    
                    <div class="spec-count" id="js-promotion-price-countdown">
           
        </div>
                    
                  
                    <table>
                            @if(!empty($data->manuPrice))
                            
                            <tbody><tr>
                                <td width="135px" class="font-500"> Gi?? ni??m y???t: </td>
                                <td> 
                                    <del style="color: #888888;" class="font-500"> {{ @number_format($datas->manuPrice , 0, ',', '.')}} ?? </del>
                                </td>
                            </tr>

                            @endif
                            

                            <tr>
                                <td width="135px" class="font-500"> Gi?? {{ !empty($data->manuPrice)?'khuy???n m???i':'' }} : </td>
                                <td>
                                    <b style="color: #ce0707" class="text-18 js-pro-total-price" data-price="6689000">
                                        {{  @str_replace(',' ,'.', number_format($data->Price))  }} ?? 
                                      
                                    </b>
                                    
                                </td>
                            </tr>
        
                    </tbody></table>
                </div>

                <!-- <div class="pro-special-offer-container">
                    <div class="spec-title d-flex align-items-center justify-content-between">
                        <div class="spec-price font-weight-bold">
                            KHUY???N M??I 
                        </div>
                        
                    </div>
                    <ul class="ul">
                        <li>
                            <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                            </span>
                        </li>
                        <li>
                            <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                            </span>
                        </li>
                        <li>
                            <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                        </li>
                    </ul>
                </div> -->

                <br/>
              <!--   <div class="pd-addon-group" style="margin:15px 0;border: 0 !important">
                    <p style="color: #428bca;"><b>D???ch v??? b???o h??nh (t??y ch???n) <a href="https://www.anphatpc.com.vn/bao-hanh-mo-uu-dai-rong.html" target="_blank"> <font color="Red">Xem chi ti???t</font> </a></b></p>
                    <div class="d-flex flex-wrap">
                        <label class="item">
                            <p class="title">Th??m 1 n??m b???o h??nh (BHMR0073) <span class="price">(+179.000 ???)</span></p>
                            <i class="checkbox-square"></i>
                            <input type="checkbox" value="77" data-price="179000" class="js-addon-select">                       
                        </label>
                        <label class="item">
                            <p class="title">Th??m 2 n??m b???o h??nh (BHMR0101) <span class="price">(+249.000 ???)</span></p>
                            <i class="checkbox-square"></i>
                            <input type="checkbox" value="100" data-price="249000" class="js-addon-select">                       
                        </label>
                    </div>
                </div> -->
                <!-- button -->
                <div class="pro-button-container d-flex flex-wrap text-center justify-content-between">
                    <!-- Button Mua h??ng -->
                    <a href="javascript:void(0)" class="w-100 btn-buyNow js-buy-now" onclick="addToCartRedirect({{ $data->id }})">
                    <b class="d-block text-18 font-500"> ?????T MUA NGAY </b>
                    <span class="text-12 d-block"> Nhanh ch??ng, thu???n ti???n </span>
                    </a>
                    <a href="javascript:void(0)" class="btn-addCart blue order-1 js-addCart" onclick="addToCart({{ $data->id }})">
                    <b class="d-block text-18 font-500" > CHO V??O GI??? </b>
                    <span class="text-12 d-block"> Mua ti???p s???n ph???m kh??c </span>
                    </a>
                    <!-- End Button Mua h??ng -->
                    <!-- Button tr??? g??p -->
                    <a href="javascript:void(0)" class="btn-payinstall order-0">
                    <b class="d-block text-18 font-500"> MUA TR??? G??P </b>
                    <span class="text-12 d-block"> Th??? t???c ????n gi???n </span>
                    </a>
                    <!-- End Button tr??? g??p -->
                </div>
                
            </div>
            <div class="product-detail-info-right">
                <div class="store-address-container">
                    <p style="display: flex;">
                        <i class="fa fa-map-marker" style="margin: 4px 10px 0 0;"></i>
                        <b style="color:red;display: inline-block;">Mua h??ng Online to??n qu???c: <br> (Hotline: 1900.0323 - Ph??m 1)</b>
                    </p>
                    <div id="js-out-stock" style="display: none;font-weight: bold;">
                        Kho h??ng: <span class="red">Li??n h???</span>
                    </div>
                </div>
                <p><b>Tr??? gi??p</b></p>
                <div style="line-height:25px;">
                    <ul class="ul">
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/tin-khuyen-mai/huong-dan-dat-hang-flash-sale_idtin5339.html" target="blank">H?????ng d???n ?????t h??ng Flash Sale</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/huong-dan-dat-hang.html" target="blank">H?????ng d???n mua h??ng</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/trung-tam-bao-hanh.html" target="blank">Ch??nh s??ch b???o h??nh ?????i tr???</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/mua-tra-gop.html"target="blank">Ch??nh s??ch mua tr??? g??p</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/giao-hang.html" target="blank">Ch??nh s??ch giao h??ng</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/chinh-sach-bao-hanh-tan-nha.html" target="blank">Ch??nh s??ch b???o h??nh t???n nh??</a> </li>
                        <li> <i class="fa fa-check"></i> <a href="https://www.anphatpc.com.vn/phong-du-an-va-khach-hang-doanh-nghiep.html" target="blank">H??? tr??? kh??ch h??ng d??? ??n, doanh nghi???p </a> </li>
                    </ul>
                </div>
                <br>
                <!--  <br><br><p><b><font color="red">??? KHUY???N M???I C???C HOT ?????NG B??? L??? !!!</font></b></p>
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
        <!-- m?? t??? + th??ng s??? + video + tin li??n quan -->
        <div class="pro-desc-spec-container bg-white clearfix">
            <div class="item item-desc js-static-container">
                <p class="title"> M?? T??? S???N PH???M </p>
                {!! $data->Detail   !!}         
                <div class="text-center btn-html-content">
                    <a href="javascript:void(0)" class="js-showless-buttons">Xem th??m <i class="fa fa-angle-double-up"></i></a>
                </div>
            </div>
        </div>
        <div class="pro-video-art-container d-flex justify-content-between container">
            <div class="item item-left  h-100">
                <div class="pro-comment-container bg-white d-none">
                    <p class="title"> ????NH GI?? V?? NH???N X??T </p>
                    <div class="new-box-comment">
                        <div class="comment-form">
                            <img src="https://www.anphatpc.com.vn/template/anphat_2020v2/images/noavatar.jpg" alt="avatar" class="img-avatar"/>
                            <form action="https://www.anphatpc.com.vn/ajax/post_comment.php" method="post" enctype="multipart/form-data"  onsubmit="return check_field(0)" class="form-post">
                                <input type=hidden name='user_post[item_type]' value='product'/>
                                <input type=hidden name='user_post[item_id]' value='41446'/>
                                <input type=hidden name='user_post[item_title]' value='M??n h??nh m??y t??nh Dahua DHI-LM24-A200 23.6 inch FHD VA'/>
                                <input type=hidden name='user_post[rate]' value='0'/>
                                <input type=hidden name='user_post[title]' value='M??n h??nh m??y t??nh Dahua DHI-LM24-A200 23.6 inch FHD VA'/>
                                <input type=hidden name='user_post[user_avatar]' value='0'/>
                                <div class="relative">
                                    <textarea name="user_post[content]" placeholder="N???i dung"  id="content0"></textarea>
                                    <div class="form-input">
                                        <a href="javascript:closeFormCommentInput();" class="close">x</a>
                                        <table style="width:100%;" class="tbl-common">
                                            <tr class="font14">
                                                <td colspan="2">
                                                    ????nh gi??:
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
                                                    <input type="text" id="name0" name='user_post[user_name]' class="inputText" placeholder="H??? t??n" value=""/>
                                                </td>
                                                <td>
                                                    <input type="text" id="email0" name='user_post[user_email]' class="inputText" placeholder="Email" value=""/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="button" onclick="postReview('0','')" value="G???i ????nh gi?? c???a b???n" class="btn-comment-blue" /></td>
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
                    <p class="title"> H???I ????P </p>
                    <div id="comment" class="new-box-comment">
                        <div class="comment-form">
                            <img src="https://www.anphatpc.com.vn/template/anphat_2020v2/images/noavatar.jpg" alt="avatar" class="img-avatar"/>
                            <form action="https://www.anphatpc.com.vn/ajax/post_comment.php" method="post" enctype="multipart/form-data"  onsubmit="return check_field(0)" class="form-post js-comment-post">
                                <input type=hidden name='user_post[item_type]' value='product'/>
                                <input type=hidden name='user_post[item_id]' value='41446'/>
                                <input type=hidden name='user_post[item_title]' value='M??n h??nh m??y t??nh Dahua DHI-LM24-A200 23.6 inch FHD VA'/>
                                <input type=hidden name='user_post[rate]' value='0'/>
                                <input type=hidden name='user_post[title]' value='M??n h??nh m??y t??nh Dahua DHI-LM24-A200 23.6 inch FHD VA'/>
                                <input type=hidden name='user_post[user_avatar]' value='0'/>
                                <div class="relative">
                                    <textarea name="user_post[content]" placeholder="N???i dung"  id="contentcomment0"></textarea>
                                    <div class="form-input">
                                        <a href="javascript:closeFormCommentInput();" class="close">x</a>
                                        <table style="width:100%;" class="tbl-common">
                                            <tr class="font14">
                                                <td colspan="2">
                                                    ????nh gi??:
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
                                                    <input type="text" id="namecomment0" name='user_post[user_name]' class="inputText" placeholder="H??? t??n" value=""/>
                                                </td>
                                                <td>
                                                    <input type="text" id="telcomment0" name='user_post[user_tel]' class="inputText" placeholder="S??? ??i???n tho???i" value=""/>
                                                </td>
                                                <td>
                                                    <input type="text" id="emailcomment0" name='user_post[user_email]' class="inputText" placeholder="Email" value=""/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="javascript:void(0);" class="uploadImage  js-upload-image js-test-upload-image" data-id="0" data-actions="comment" id="js-select-file-comment0"><i class="fa fa-camera" style="margin-right: 5px"></i>G???i ???nh
                                                    <input class="js-preview-upload-ids" type="hidden" size="40" value="" accept="image/*;capture=camera"/>
                                                    </a>
                                                    <div class="js-preview-upload" id="js-preview-file-upload-comment-0" style=""></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="text" size="10" name="register_captcha" class="form-control" style="width:100px; float:left;" onkeyup="check_user_captcha(this.value)"/>
                                                    <img src="https://www.anphatpc.com.vn/includes/captcha/captcha.php?v=" id="captchaimg" style="height:50px;margin-top: -9px;float:left;margin-left: 5px;"/>
                                                    <a id="change-image" onclick="document.getElementById('captchaimg').src='https://www.anphatpc.com.vn/includes/captcha/captcha.php?'+Math.random();" href="javascript:;" style="float:left;margin-top: 8px;">[Xem m?? kh??c]</a>
                                                    <div style="clear: both;"></div>
                                                    <p id="check_user2" style="color: #ff0000;"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="button" onclick="postComment('0','')" value="G???i c??u h???i c???a b???n" class="btn-comment-blue btn-send-2021 js-btn-comment" style="pointer-events: none;background: grey;"/></td>
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
                <p class="title"> TIN T???C LI??N QUAN </p>
                
                
                <div class="p-cate-news" id="js-art-related">
                    
                </div>
                
                </div> -->
        </div>
        <!-- Sp t????ng t??? - c??ng h??ng - li??n quan -->

        <div class="container">
            <div class="product-related-container bg-white">
                <div class="pro-tab-title clearfix">
                    <a href="javascript:void(0)" data-id="js-tab-1" class="js-tab-title"> S???N PH???M T????NG T??? </a>
                    <a href="javascript:void(0)" data-id="js-tab-2" class="js-tab-title"> S???N PH???M C??NG H??NG </a>
                    <a href="javascript:void(0)" data-id="js-tab-3" class="js-tab-title"> S???N PH???M LI??N QUAN </a>
                </div>
                <div class="pro-tab-items">
                    <!-- S???N PH???M T????NG T???-->
                    <div class="custom-nav owl-carousel owl-theme js-product-carousel product-tab-item" id="js-tab-1">
                        <div class='p-item  js-p-item' data-id="44412">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-e-dra-egm24f75-24-inch-fhd-ips-75hz.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_44412_m__n_h__nh_m__y_t__nh_e_dra_egm24f75_24_inch_fhd_ips_75hz_ap_9_.jpg" alt="M??n h??nh m??y t??nh E-DRA EGM24F75 24 inch FHD IPS 75Hz" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-44412">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOED0004 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-e-dra-egm24f75-24-inch-fhd-ips-75hz.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh E-DRA EGM24F75 24 inch FHD IPS 75Hz</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 2.499.000 ?? </del>
                                    <span class="p-discount"> -21% </span>
                                    <span class="p-price">
                                    1.999.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(44412,'https://anphat.com.vn/media/product/250_44412_m__n_h__nh_m__y_t__nh_e_dra_egm24f75_24_inch_fhd_ips_75hz_ap_9_.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(44412)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh E-DRA EGM24F75 24 inch FHD IPS 75Hz </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???
                                                <a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> 
                                                <font color="DodgerBlue">Xem chi ti???t</font> 
                                                </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh
                                                <a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> 
                                                <font color="DodgerBlue">Xem chi ti???t</font> 
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920x1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 2.499.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -21% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            1.999.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="44317">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p24v-g5-64w18aa-23.8-inch-fhd-va-75-hz.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_44317_m__n_h__nh_m__y_t__nh_hp_p24v_g5_64w18aa_23_8_inch_fhd_va_75_hz__1_.jpg" alt="M??n h??nh m??y t??nh HP P24v G5 64W18AA 23.8 inch FHD-75 Hz" class="fit-img lazy" />
                                <span class="icon-new"></span>
                                <span class="p-icon-holder js-icon-44317">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOHP0121 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p24v-g5-64w18aa-23.8-inch-fhd-va-75-hz.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh HP P24v G5 64W18AA 23.8 inch FHD-75 Hz</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 4.299.000 ?? </del>
                                    <span class="p-discount"> -16% </span>
                                    <span class="p-price">
                                    3.649.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(44317,'https://anphat.com.vn/media/product/250_44317_m__n_h__nh_m__y_t__nh_hp_p24v_g5_64w18aa_23_8_inch_fhd_va_75_hz__1_.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(44317)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh HP P24v G5 64W18AA 23.8 inch FHD-75 Hz </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: VA
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920 x 1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 4.299.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -16% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            3.649.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="39028">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dell-p2422h-23.8-inch-fhd-ips.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_39028_dell_p2422h_3_900x.jpg" alt="M??n h??nh m??y t??nh Dell P2422H 23.8 inch FHD IPS " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-39028">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MODE0140 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dell-p2422h-23.8-inch-fhd-ips.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh Dell P2422H 23.8 inch FHD IPS </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 6.099.000 ?? </del>
                                    <span class="p-discount"> -13% </span>
                                    <span class="p-price">
                                    5.339.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(39028,'https://anphat.com.vn/media/product/250_39028_dell_p2422h_3_900x.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(39028)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh Dell P2422H 23.8 inch FHD IPS  </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: Full HD (1920x1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 6.099.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -13% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            5.339.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="37123">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-asus-proart-pa247cv-23.8-inch-fhd-ips-chuyen-do-hoa.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_37123_m__n_h__nh_m__y_t__nh_asus_proart_pa247cv_23_8_inch_fhd_ips___chuy__n_______h___a.jpg" alt="M??n h??nh m??y t??nh Asus ProArt PA247CV 23.8 inch FHD IPS - chuy??n ????? h???a" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-37123">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOAS0098 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-asus-proart-pa247cv-23.8-inch-fhd-ips-chuyen-do-hoa.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh Asus ProArt PA247CV 23.8 inch FHD IPS - chuy??n ????? h???a</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 7.999.000 ?? </del>
                                    <span class="p-discount"> -21% </span>
                                    <span class="p-price">
                                    6.399.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(37123,'https://anphat.com.vn/media/product/250_37123_m__n_h__nh_m__y_t__nh_asus_proart_pa247cv_23_8_inch_fhd_ips___chuy__n_______h___a.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(37123)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh Asus ProArt PA247CV 23.8 inch FHD IPS - chuy??n ????? h???a </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??????p d???ng 06/01 ?????n 28/02/2023 ho???c ?????n khi h???t qu?? : T???ng ????n b???o v??? m???t g???n m??n h??nh: </span><a href="https://www.asus.com/vn/events/infoM/activity_ChuanDoHoa/"><span style="color: red"><b> ????ng k?? t???i ????y </span></a></b>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??????p d???ng 01/02 ?????n 28/02/2023 ho???c ?????n khi h???t qu?? : T???ng 01 ??o thun Asus ProArt (PKKH1024)
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??????p d???ng 01/01 ?????n 31/08/2023 : T???ng ngay b??? Adobe Creative Cloud l??n ?????n 3 th??ng  <a href="https://www.asus.com/vn/events/infoM/activity_2913/"><span style="color: red"><b> Chi ti???t xem t???i ????y </span></a></b>
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
                                                <span class="text"> ??????p d???ng 06/01 ?????n 28/02/2023 ho???c ?????n khi h???t qu?? : T???ng ????n b???o v??? m???t g???n m??n h??nh: </span><a href="https://www.asus.com/vn/events/infoM/activity_ChuanDoHoa/"><span style="color: red"><b> ????ng k?? t???i ????y </span></a></b>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??????p d???ng 01/02 ?????n 28/02/2023 ho???c ?????n khi h???t qu?? : T???ng 01 ??o thun Asus ProArt (PKKH1024)
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920x1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 7.999.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -21% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            6.399.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="34818">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-viewsonic-vx2718-pc-mhd-27-inch-fhd-cong.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_34818_54636_vx2718__4_.png" alt="M??n h??nh m??y t??nh Viewsonic VX2718-PC-MHD 27 inch FHD Cong Gaming 165Hz" class="fit-img lazy" />
                                <span class="btn-outStock"> LI??N H??? </span>        
                                <span class="p-icon-holder js-icon-34818">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOVI0044 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-viewsonic-vx2718-pc-mhd-27-inch-fhd-cong.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh Viewsonic VX2718-PC-MHD 27 inch FHD Cong Gaming 165Hz</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 6.499.000 ?? </del>
                                    <span class="p-discount"> -24% </span>
                                    <span class="p-price">
                                    4.999.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(34818,'https://anphat.com.vn/media/product/250_34818_54636_vx2718__4_.png', this)">So s??nh</a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh Viewsonic VX2718-PC-MHD 27 inch FHD Cong Gaming 165Hz </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: Cong
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 27 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: VA Technology
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: Full HD (1920x1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 6.499.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -24% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            4.999.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="35531">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-viewsonic-va2732-h-27-inch-fhd-ips.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_35531_va2732_h_f02_pc_h.jpg" alt="M??n h??nh m??y t??nh Viewsonic VA2732-H 27 inch FHD IPS " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-35531">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOVI0048 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-viewsonic-va2732-h-27-inch-fhd-ips.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh Viewsonic VA2732-H 27 inch FHD IPS </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 4.999.000 ?? </del>
                                    <span class="p-discount"> -35% </span>
                                    <span class="p-price">
                                    3.299.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(35531,'https://anphat.com.vn/media/product/250_35531_va2732_h_f02_pc_h.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(35531)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh Viewsonic VA2732-H 27 inch FHD IPS  </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh Ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 27 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: Full HD (1920x1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 4.999.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -35% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            3.299.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="44067">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p22-g5-64x86aa-21.5-inch-fhd-ips.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_44067_c08223043.png" alt="M??n h??nh m??y t??nh HP P22 G5 64X86AA 21.5 inch FHD IPS" class="fit-img lazy" />
                                <span class="icon-new"></span>
                                <span class="p-icon-holder js-icon-44067">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOHP0122 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p22-g5-64x86aa-21.5-inch-fhd-ips.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh HP P22 G5 64X86AA 21.5 inch FHD IPS</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 3.999.000 ?? </del>
                                    <span class="p-discount"> -28% </span>
                                    <span class="p-price">
                                    2.899.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(44067,'https://anphat.com.vn/media/product/250_44067_c08223043.png', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(44067)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh HP P22 G5 64X86AA 21.5 inch FHD IPS </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a> </span>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 21.5 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920 x 1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 3.999.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -28% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            2.899.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="35200">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p22v-g4-21.5-inch-fhd-9tt53aa.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_35200_b45cd11876917dd1e7691590d6324174.jpg" alt="M??n h??nh m??y t??nh HP P22v G4 21.5 inch FHD (9TT53AA)" class="fit-img lazy" />
                                <span class="btn-outStock"> LI??N H??? </span>        
                                <span class="p-icon-holder js-icon-35200">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOHP0093 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p22v-g4-21.5-inch-fhd-9tt53aa.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh HP P22v G4 21.5 inch FHD (9TT53AA)</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 3.890.000 ?? </del>
                                    <span class="p-discount"> -27% </span>
                                    <span class="p-price">
                                    2.849.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(35200,'https://anphat.com.vn/media/product/250_35200_b45cd11876917dd1e7691590d6324174.jpg', this)">So s??nh</a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh HP P22v G4 21.5 inch FHD (9TT53AA) </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a> </span>
                                            </li>
                                            <li style="padding-left: 30px;font-size: 20px;">
                                            <li>
                                        </ul>
                                    </div>
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: Ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 21.5 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: TN 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920 x 1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 3.890.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -27% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            2.849.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="35533">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p24-g4-1a7e5aa-23-8-inch-fhd-ips.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_35533_thumb650_hp_p24_g4_1a7e5aa_1.png" alt="M??n h??nh m??y t??nh HP P24 G4 1A7E5AA 23.8 inch FHD IPS " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-35533">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOHP0096 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-hp-p24-g4-1a7e5aa-23-8-inch-fhd-ips.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh HP P24 G4 1A7E5AA 23.8 inch FHD IPS </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 5.099.000 ?? </del>
                                    <span class="p-discount"> -26% </span>
                                    <span class="p-price">
                                    3.799.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(35533,'https://anphat.com.vn/media/product/250_35533_thumb650_hp_p24_g4_1a7e5aa_1.png', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(35533)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh HP P24 G4 1A7E5AA 23.8 inch FHD IPS  </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh Ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: Full HD (1920x1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 5.099.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -26% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            3.799.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="42650">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-samsung-viewfinity-s8-ls27b800pxexxv-27-inch-4k-ips-60hz-usc-c-rj45.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_42650_m__n_h__nh_m__y_t__nh_samsung_viewfinity_s8_27_inch_4k_ips_60hz_ls27b800pxexxv___5_.jpg" alt="M??n h??nh m??y t??nh Samsung ViewFinity S8 LS27B800PXEXXV 27 inch 4k IPS 60Hz USC-C RJ45" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-42650">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOSS0148 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-samsung-viewfinity-s8-ls27b800pxexxv-27-inch-4k-ips-60hz-usc-c-rj45.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh Samsung ViewFinity S8 LS27B800PXEXXV 27 inch 4k IPS 60Hz USC-C RJ45</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 14.999.000 ?? </del>
                                    <span class="p-discount"> -34% </span>
                                    <span class="p-price">
                                    9.999.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(42650,'https://anphat.com.vn/media/product/250_42650_m__n_h__nh_m__y_t__nh_samsung_viewfinity_s8_27_inch_4k_ips_60hz_ls27b800pxexxv___5_.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(42650)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh Samsung ViewFinity S8 LS27B800PXEXXV 27 inch 4k IPS 60Hz USC-C RJ45 </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: m??n h??nh ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 27 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n:IPS 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: UHD(3840 x 2160) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 14.999.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -34% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            9.999.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- S???N PH???M C??NG H??NG -->
                    <div class="custom-nav owl-carousel owl-theme js-product-carousel product-tab-item " id="js-tab-2">
                        <div class='p-item  js-p-item' data-id="41450">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm27-a200-27-inch-fhd-va.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41450_41446_dhi_lm24_a200.jpg" alt="M??n h??nh m??y t??nh Dahua DHI-LM27-A200 27 inch FHD VA" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-41450">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MODH0007 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm27-a200-27-inch-fhd-va.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh Dahua DHI-LM27-A200 27 inch FHD VA</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 3.999.000 ?? </del>
                                    <span class="p-discount"> -28% </span>
                                    <span class="p-price">
                                    2.899.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41450,'https://anphat.com.vn/media/product/250_41450_41446_dhi_lm24_a200.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41450)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh Dahua DHI-LM27-A200 27 inch FHD VA </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:09
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 27 inch
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: VA 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920 x 1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 3.999.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -28% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            2.899.000 ??
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
                                <span class="p-sku" style="font-size: 12px;">M?? SP: CAME0254 </span>
                                <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-b2a21p.html" class="p-name">
                                    <h3>Camera Dahua DH-HAC-B2A21P    </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 675.000 ?? </del>
                                    <span class="p-discount"> -12% </span>
                                    <span class="p-price">
                                    599.000 ??
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(30902,'https://anphat.com.vn/media/product/250_30902_camera_dahua_dh_hac_b2a21p_1.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(30902)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera Dahua DH-HAC-B2A21P     </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i 2.0Megapixel c???m bi???n CMOS k??ch th?????c 1/2.7"", 30fps@1080P
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Th???i gian th???c kh??ng tr??? h??nh, ????? nh???y s??ng t???i thi???u  0.04Lux/F1.85, 0Lux IR on, ch??? ????? ng??y ????m(ICR), t??? ?????ng c??n b???ng tr???ng (AWB),t??? ?????ng b?? t??n hi???u ???nh (AGC), b?? s??ng(BLC), Ch???ng nhi???u (2D-DNR),
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m xa h???ng ngo???i 20m v???i c??ng ngh??? h???ng ngo???i th??ng minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Thi???t k??? m???i nh??? g???n, th???m m???, d??? d??ng l???p ?????t
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>???ng k??nh c??? ?????nh 3.6mm, chu???n kh??ng n?????c IP67, v??? kim lo???i. </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 675.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -12% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            599.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="30910">
                            <a href="https://www.anphatpc.com.vn/dau-ghi-hinh-dahua-dh-xvr1a08.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_30910_dahua_dh_xvr1a08_1.png" alt="?????u ghi h??nh Dahua DH-XVR1A08 " class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-30910">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: CAME0260 </span>
                                <a href="https://www.anphatpc.com.vn/dau-ghi-hinh-dahua-dh-xvr1a08.html" class="p-name">
                                    <h3>?????u ghi h??nh Dahua DH-XVR1A08  </h3>
                                </a>
                                <div class="price-container">
                                    <span class="p-price">
                                    1.350.000 ??
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(30910,'https://anphat.com.vn/media/product/250_30910_dahua_dh_xvr1a08_1.png', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(30910)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> ?????u ghi h??nh Dahua DH-XVR1A08  </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>?????u ghi h??nh 8 k??nh, h??? tr??? camera HDCVI/Analog/IP/TVI/AHD, chu???n n??n h??nh ???nh H.264, ????? ph??n gi???i 1080N/720P/960H/D1(1-25fps)
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>H??? tr??? ghi h??nh t???t c??? c??c k??nh 1080N, c???ng ra t??n hi???u video ?????ng th???i HDMI/VGA, h??? tr??? xem l???i 4/8 k??nh ?????ng th???i v???i ch??? ????? t??m ki???m th??ng minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>H??? tr??? k???t n???i nhi???u nh??n hi???u camera IP(8+2) h??? tr??? l??n ?????n camera 2MP ?????u 4 k??nh v?? 5MP ?????u 8, v???i chu???n t????ng t??ch Onvif 16.12, h??? tr??? 1 ??? c???ng 6TB, 2 c???ng usb 2.0, 1 c???ng m???ng RJ45(100M), h??? tr??? ??i???u ki???n quay qu??t 3D th??ng minh v???i giao th???c Dahua
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>H??? tr??? xem l???i v?? tr???c ti???p qua m???ng m??y t??nh, thi???t b??? di ?????ng, h??? tr??? c???u h??nh th??ng minh qua P2P,  H??? tr??? Camera t??ch h???p Mic ghi ??m t???t c??? c??c k??nh, 1 c???ng audio v??o ra h??? tr??? ????m tho???i hai chi???u, ch??? ????? chia m??n h??nh 1/4 ?????i v???i ?????u 4 c???ng v?? 1/4/8/9 ?????i v???i ?????u 8 c???ng , qu???n l?? ?????ng th???i 128 t??i kho???n k???t n???i, ??i???n ??p DC 12V/1.5A c??ng su???t kh??ng ??? c???ng 10W
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>M??i tr?????ng l??m vi???c -10 ~ 55 ????? C, k??ch th?????c 197mm??192mm??41mm, tr???ng l?????ng kh??ng ??? c???ng 1KG. Ch???t li???u kim lo???i" </span>
                                    </div>
                                    <div class="position-relative">
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            1.350.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="41655">
                            <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-hfw1200tp-s5-2mp-ngoai-troi.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41655_" alt="Camera Dahua DH-HAC-HFW1200TP-S5 2MP ngo??i tr???i" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-41655">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: CAME0887 </span>
                                <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-hfw1200tp-s5-2mp-ngoai-troi.html" class="p-name">
                                    <h3>Camera Dahua DH-HAC-HFW1200TP-S5 2MP ngo??i tr???i</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 899.000 ?? </del>
                                    <span class="p-discount"> -46% </span>
                                    <span class="p-price">
                                    489.000 ??
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41655,'https://anphat.com.vn/media/product/250_41655_', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41655)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera Dahua DH-HAC-HFW1200TP-S5 2MP ngo??i tr???i </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Camera h??? tr??? HDCVI/HDTVI/AHD/ANALOG, t??ch h???p OSD
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i 2Megapixel, c???m bi???n CMOS 1/2.7" 25/30fps@1080P(1920??1080), cho ph??n gi???i HD tr??n ???????ng truy???n analog.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Th???i gian th???c kh??ng tr??? h??nh, ????? nh???y s??ng t???i thi???u 0.02Lux@F1.85(0Lux IR LED on), ch??? ????? ng??y ????m(ICR), t??? ?????ng c??n b???ng tr???ng (AWB), t??? ?????ng b?? t??n hi???u ???nh (AGC), b?? s??ng(BLC), ch???ng nhi???u (3D-DNR), t???m xa h???ng ngo???i 30m v???i c??ng ngh??? h???ng ngo???i th??ng minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>???ng k??nh c??? ?????nh 3.6mm, chu???n ng??m n?????c IP67,  ??i???n ??p DC12V, c??ng su???t 3,6W. 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Ch???t li???u v??? kim lo???i, m??i tr?????ng l??m vi???c t??? -30??C~+60??C, kho???ng c??ch truy???n t???i tr??n c??p ?????ng tr???c l??n ?????n 500m v???i c??p 75-3 ??m,k??ch th?????c 176mm??72.4mm??72.5mm  tr???ng l?????ng 0.46KG </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 899.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -46% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            489.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="41978">
                            <a href="https://www.anphatpc.com.vn/dau-ghi-hinh-camera-ip-4-kenh-dahua-nvr2104hs-4ks2.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41978______u_ghi_h__nh_camera_ip_4_k__nh_dahua_nvr2104hs_4ks2.jpg" alt="?????u ghi h??nh camera IP 4 k??nh DAHUA NVR2104HS-4KS2" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-41978">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: CAME0194 </span>
                                <a href="https://www.anphatpc.com.vn/dau-ghi-hinh-camera-ip-4-kenh-dahua-nvr2104hs-4ks2.html" class="p-name">
                                    <h3>?????u ghi h??nh camera IP 4 k??nh DAHUA NVR2104HS-4KS2</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 3.180.000 ?? </del>
                                    <span class="p-discount"> -50% </span>
                                    <span class="p-price">
                                    1.590.000 ??
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41978,'https://anphat.com.vn/media/product/250_41978______u_ghi_h__nh_camera_ip_4_k__nh_dahua_nvr2104hs_4ks2.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41978)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> ?????u ghi h??nh camera IP 4 k??nh DAHUA NVR2104HS-4KS2 </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Chu???n n??n h??nh ???nh: H.265/H.264.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Hai lu???ng d??? li???u h??? tr??? hi???n th??? 1CH 8MP v?? 4CH 1080P.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>B??ng th??ng ?????u v??o t???i ??a l?? 80Mbps.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>H??? tr??? camera c?? ????? ph??n gi???i l??n ?????n 8 Megapixel.
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T????ng th??ch v???i t??n hi???u ng?? ra: HDMI/VGA.
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 3.180.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -50% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            1.590.000 ??
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
                                <span class="p-sku" style="font-size: 12px;">M?? SP: CAME0249 </span>
                                <a href="https://www.anphatpc.com.vn/camera-dahua-dh-hac-hdw1200mp-s4_id30904.html" class="p-name">
                                    <h3>Camera Dahua DH-HAC-HDW1200MP-S4    </h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 889.000 ?? </del>
                                    <span class="p-discount"> -45% </span>
                                    <span class="p-price">
                                    489.000 ??
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(30904,'https://anphat.com.vn/media/product/250_30904_camera_dahua_dh_hac_hdw1200mp_s4_1.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(30904)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera Dahua DH-HAC-HDW1200MP-S4   </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Camera h??? tr??? HDCVI/HDTVI/AHD/ANALOG, t??ch h???p OSD
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i 2.0Megapixel c???m bi???n CMOS 1/2.7"" 25/30fps@1080P(1920??1080)
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Cho ph??n gi???i HD tr??n ???????ng truy???n analog, th???i gian th???c kh??ng tr??? h??nh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>??? ????? nh???y s??ng t???i thi???u 0.02Lux/F1,85, 0Lux IR on, ch??? ????? ng??y ????m(ICR), t??? ?????ng c??n b???ng tr???ng (AWB),t??? ?????ng b?? t??n hi???u ???nh(AGC), b?? s??ng(BLC), ch???ng nhi???u (3D-DNR), t???m xa h???ng ngo???i 30m v???i c??ng ngh??? h???ng ngo???i th??ng minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>???ng k??nh c??? ?????nh 3.6mm, chu???n ng??m n?????c IP67,  ??i???n ??p DC12V, c??ng su???t 3,3W
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 889.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -45% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            489.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="36355">
                            <a href="https://www.anphatpc.com.vn/camera-ip-hong-ngoai-2mp-dahua-dh-ipc-hfw1230sp-s4.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_36355_3212e477c13110a54cb65cca6c0a28f6.jpg" alt="Camera IP h???ng ngo???i 2MP Dahua DH-IPC-HFW1230SP-S4" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-36355">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: CAME0281 </span>
                                <a href="https://www.anphatpc.com.vn/camera-ip-hong-ngoai-2mp-dahua-dh-ipc-hfw1230sp-s4.html" class="p-name">
                                    <h3>Camera IP h???ng ngo???i 2MP Dahua DH-IPC-HFW1230SP-S4</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 1.449.000 ?? </del>
                                    <span class="p-discount"> -39% </span>
                                    <span class="p-price">
                                    890.000 ??
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(36355,'https://anphat.com.vn/media/product/250_36355_3212e477c13110a54cb65cca6c0a28f6.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(36355)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera IP h???ng ngo???i 2MP Dahua DH-IPC-HFW1230SP-S4 </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i 2 Megapixel c???m bi???n CMOS 1/2.7???, Max 25/30fps@1080P
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>H??? tr??? m?? h??a 2 lu???ng v???i ?????nh d???ng H.265 v?? H.264
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Ch??? ????? ng??y ????m (ICR), Ch???ng ng?????c s??ng DWDR, t??? ?????ng c??n b???ng tr???ng (AWB), t??? ?????ng b?? t??n hi???u ???nh (AGC), b?? s??ng (BLC), ch???ng nhi???u (3D-DNR), t???m xa h???ng ngo???i 30m v???i c??ng ngh??? h???ng ngo???i th??ng minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>H??? tr??? xem h??nh b???ng nhi???u c??ng c???: Web, ph???n m???m CMS (DSS/PSS) v?? DMSS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>???ng k??nh c??? ?????nh 3.6mm, chu???n t????ng th??ch Onvif 2.4, chu???n ch???ng n?????c IP67,  ??i???n ??p DC12V ho???c PoE (802.3af), c??ng su???t 5,5W </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 1.449.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -39% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            890.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="41424">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm22-a200-21.45-inch-fhd-va.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41424_" alt="M??n h??nh m??y t??nh Dahua DHI-LM22-A200 21.45 inch FHD VA" class="fit-img lazy" />
                                <span class="icon-new"></span>
                                <span class="p-icon-holder js-icon-41424">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MODH0005 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhi-lm22-a200-21.45-inch-fhd-va.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh Dahua DHI-LM22-A200 21.45 inch FHD VA</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 2.599.000 ?? </del>
                                    <span class="p-discount"> -29% </span>
                                    <span class="p-price">
                                    1.869.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    2 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41424,'https://anphat.com.vn/media/product/250_41424_', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41424)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh Dahua DHI-LM22-A200 21.45 inch FHD VA </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!--0-->
                                            <li>
                                                <span class="text" style="white-space: pre-line;">???? Gi?? C???c S???c d??nh ri??ng cho chi nh??nh B??c Ninh: T??? 10/02/2023 ?????n h???t ng??y 28/2/2023 gi??  ch??? c??n <b><font color ="red"> 1.699.000?? </font></b>.</span>
                                            </li>
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??????p d???ng t??? 01/02 ?????n 28/02/2023 : Gi???m th??m 100.000 VN?? khi mua c??ng PC b???t k??? ho???c Laptop 
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    
                                                </li>
                                                
                                                --->
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??????p d???ng t??? 01/02 ?????n 28/02/2023 : Gi???m th??m 100.000 VN?? khi mua c??ng PC b???t k??? ho???c Laptop 
                                                </span>
                                            </li>
                                            <!--2-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:09
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 21.45 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: VA
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920 x 1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 2.599.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -29% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            1.869.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="41465">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhl32-s200-31.5-inch-fhd-va-gaming.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_41465_ytuu.jpg" alt="M??n h??nh m??y t??nh Dahua DHL32-S200 31.5 inch FHD VA Gaming" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-41465">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MODH0008 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-dahua-dhl32-s200-31.5-inch-fhd-va-gaming.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh Dahua DHL32-S200 31.5 inch FHD VA Gaming</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 9.999.000 ?? </del>
                                    <span class="p-discount"> -31% </span>
                                    <span class="p-price">
                                    6.999.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(41465,'https://anphat.com.vn/media/product/250_41465_ytuu.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(41465)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh Dahua DHL32-S200 31.5 inch FHD VA Gaming </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:09
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 31.5 inch
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: VA 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920 x 1080) 
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 9.999.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -31% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            6.999.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="36356">
                            <a href="https://www.anphatpc.com.vn/camera-ip-hong-ngoai-2mp-dahua-dh-ipc-hdw1230sp-s4.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_36356_24579adb95d5561eb07e013d9318d0bc.jpg" alt="Camera IP h???ng ngo???i 2MP Dahua DH-IPC-HDW1230SP-S4" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-36356">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: CAME0282 </span>
                                <a href="https://www.anphatpc.com.vn/camera-ip-hong-ngoai-2mp-dahua-dh-ipc-hdw1230sp-s4.html" class="p-name">
                                    <h3>Camera IP h???ng ngo???i 2MP Dahua DH-IPC-HDW1230SP-S4</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 1.449.000 ?? </del>
                                    <span class="p-discount"> -39% </span>
                                    <span class="p-price">
                                    890.000 ??
                                    </span>
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(36356,'https://anphat.com.vn/media/product/250_36356_24579adb95d5561eb07e013d9318d0bc.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(36356)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> Camera IP h???ng ngo???i 2MP Dahua DH-IPC-HDW1230SP-S4 </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-summary" style="white-space: unset">
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i 2 Megapixel c???m bi???n CMOS 1/2.7???, Max 25/30fps@1080P
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>H??? tr??? m?? h??a 2 lu???ng v???i ?????nh d???ng H.265 v?? H.264
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Ch??? ????? ng??y ????m (ICR), Ch???ng ng?????c s??ng DWDR, t??? ?????ng c??n b???ng tr???ng (AWB), t??? ?????ng b?? t??n hi???u ???nh (AGC), b?? s??ng (BLC), ch???ng nhi???u (3D-DNR), t???m xa h???ng ngo???i 30m v???i c??ng ngh??? h???ng ngo???i th??ng minh
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>H??? tr??? xem h??nh b???ng nhi???u c??ng c???: Web, ph???n m???m CMS (DSS/PSS) v?? DMSS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>???ng k??nh c??? ?????nh 3.6mm, chu???n t????ng th??ch Onvif 2.4, chu???n ch???ng n?????c IP67,  ??i???n ??p DC12V ho???c PoE (802.3af), c??ng su???t 5,5W </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 1.449.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -39% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            890.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- S???N PH???M LI??N QUAN - c??ng gi??-->
                    <div class="custom-nav owl-carousel owl-theme js-product-carousel product-tab-item " id="js-tab-3">
                        <div class='p-item  js-p-item' data-id="44412">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-e-dra-egm24f75-24-inch-fhd-ips-75hz.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_44412_m__n_h__nh_m__y_t__nh_e_dra_egm24f75_24_inch_fhd_ips_75hz_ap_9_.jpg" alt="M??n h??nh m??y t??nh E-DRA EGM24F75 24 inch FHD IPS 75Hz" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-44412">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOED0004 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-e-dra-egm24f75-24-inch-fhd-ips-75hz.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh E-DRA EGM24F75 24 inch FHD IPS 75Hz</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 2.499.000 ?? </del>
                                    <span class="p-discount"> -21% </span>
                                    <span class="p-price">
                                    1.999.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(44412,'https://anphat.com.vn/media/product/250_44412_m__n_h__nh_m__y_t__nh_e_dra_egm24f75_24_inch_fhd_ips_75hz_ap_9_.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(44412)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh E-DRA EGM24F75 24 inch FHD IPS 75Hz </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>Lo???i m??n h??nh: M??n h??nh ph???ng 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T??? l???: 16:9
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 23.8 inch 
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n: IPS
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: FHD (1920x1080)
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 2.499.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -21% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            1.999.000 ??
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='p-item  js-p-item' data-id="23462">
                            <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-aoc-e2070swn-195.html" class="p-img">
                                <img data-src="https://anphat.com.vn/media/product/250_23462_produto_aoc_1_serie_70_f_90_mh.jpg" alt="M??n h??nh m??y t??nh AOC E2070SWN 19.5''" class="fit-img lazy" />
                                <span class="p-icon-holder js-icon-23462">
                                    <!-- // icon promotion -->
                                </span>
                            </a>
                            <div class="p-text">
                                <span class="p-sku" style="font-size: 12px;">M?? SP: MOAO0033 </span>
                                <a href="https://www.anphatpc.com.vn/man-hinh-may-tinh-aoc-e2070swn-195.html" class="p-name">
                                    <h3>M??n h??nh m??y t??nh AOC E2070SWN 19.5''</h3>
                                </a>
                                <div class="price-container">
                                    <del class="p-old-price"> 2.799.000 ?? </del>
                                    <span class="p-discount"> -27% </span>
                                    <span class="p-price">
                                    2.050.000 ??
                                    </span>
                                </div>
                                <div class="p-special-container">
                                    1 khuy???n m???i
                                </div>
                                <div class="d-flex align-items-centet justify-content-between">
                                    <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(23462,'https://anphat.com.vn/media/product/250_23462_produto_aoc_1_serie_70_f_90_mh.jpg', this)">So s??nh</a>
                                    <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(23462)"></a>
                                </div>
                            </div>
                            <div class="p-tooltip">
                                <p class="tooltip-title"> M??n h??nh m??y t??nh AOC E2070SWN 19.5'' </p>
                                <div class="tooltip-content">
                                    <div class="tooltip-specialOffer">
                                        <div class="spec-title">
                                            <span class="title-text"> KHUY???N M??I</span>
                                        </div>
                                        <ul class="ul">
                                            <!---                  
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                                </li>
                                                
                                                <li>
                                                    <span class="text" style="white-space: pre-line;">??? Gi???m 10% c??p Displayport cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-displayport.html" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a></span>
                                                </li>
                                                
                                                --->
                                            <!--0-->
                                            <li>
                                                <span class="text"> ??? HOT Gi???m ngay 5% gi?? treo m??n h??nh ??a n??ng khi mua c??ng m??n h??nh b???t k???<a href="https://www.anphatpc.com.vn/gia-treo-man-hinh_dm2241.html?sort=price-desc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
                                                </span>
                                            </li>
                                            <!--1-->
                                            <li>
                                                <span class="text"> ??? Gi???m 10% c??p HDMI Vention cao c???p khi mua k??m m??n h??nh<a href="https://www.anphatpc.com.vn/cap-hdmi.html?brand=206&amp;sort=price-asc" target="_blank"> <font color="DodgerBlue">Xem chi ti???t</font> </a>
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
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>K??ch th?????c: 19,5" Wide Screen 170/160 (CR???10)
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? ph??n gi???i: 1600??900@60Hz
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>????? s??ng (Max): 200 cd/m2;
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>T???m n???n : TN
                                        </span>
                                        <span class="item d-block"> <i class="fa fa-check-circle" style="color: #ff9900;margin-right: 5px;"></i>G??c nh??n (Ngang/D???c) :90/50 ??
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <span>
                                        Gi?? ni??m y???t:
                                        <del class="p-old-price" style="display: inline-block;"> 2.799.000 ?? </del>
                                        </span>
                                        <span class="p-discount"> -27% </span>
                                        <p class="p-price" style="margin: 0;">
                                            <span style="font-size: 14px;color: #000;font-weight: normal;">Gi?? khuy???n m??i:</span>
                                            2.050.000 ??
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
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;"><strong><span style="color: black;">M&ocirc; t???&nbsp;chi ti???t</span></strong><span style="color: black;">&nbsp;</span><a href="https://www.anphatpc.com.vn/man-hinh-vi-tinh_dm1052.html"><strong>M&agrave;n h&igrave;nh vi t&iacute;nh</strong></a></span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">H&atilde;ng s???n xu???t</span></p>
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
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">K&iacute;ch th?????c m&agrave;n h&igrave;nh</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">23.6&nbsp;inch</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">????? ph&acirc;n gi???i</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">FHD (1920 x 1080)&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">T??? l???</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">16:9</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">T???m n???n m&agrave;n h&igrave;nh</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">VA</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">????? s&aacute;ng</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">220cd/m2 (Typ)</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">M&agrave;u s???c hi???n th???</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">16,7 Tri???u m&agrave;u</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">????? t????ng ph???n</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">3000:1 (Typ)</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">T???n s??? qu&eacute;t</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;">TYP. 60Hz, MAX. 75Hz</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">C???ng k???t n???i</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">VGA, HDMI</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Th???i gian ??&aacute;p ???ng</span></p>
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
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">178&deg;(Ngang)/178&deg;(D???c)</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">T&iacute;nh n??ng</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">-</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">??i???n n??ng ti&ecirc;u th???</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">25w</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">K&iacute;ch th?????c</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">-</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">C&acirc;n n???ng</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">3kg</span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 108.75pt; padding: .75pt .75pt .75pt .75pt;" width="145">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">Ph??? ki???n</span></p>
                    </td>
                    <td style="width: 264.75pt; padding: .75pt .75pt .75pt .75pt;" width="353">
                        <p style="line-height: normal;"><span style="font-size: 10pt; color: black; font-family: arial, helvetica, sans-serif;">C&aacute;p ngu???n</span></p>
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