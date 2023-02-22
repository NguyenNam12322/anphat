
@extends('frontend.layouts.apps')

@section('content')
<section class="homepage">
    <div class="container">
        <div class="home-banner-container clearfix position-relative">
            <div class="banner-slider-top">
                <div class="home-banner-left">
                    <div class="custom-dots owl-carousel owl-theme" id="js-home-slider">
                      
                       <?php 
                            $banner = App\Models\banner::select('image', 'link')->where('active', 1)->where('option', 0)->get();
                        ?>

                        @if($banner->count()>0)

                        @foreach($banner as $banners)
                      
                        <div class="item">
                            <a href="{{ route('details', $banners->link) }}" target='_blank' rel='nofollow'>
                                <img border=0 src="{{ asset($banners->image) }}"  alt=""/></a>
                        </div>
                        @endforeach
                        @endif
                  </div>
                </div>
                <div class="home-banner-right">
                  
                       <a href="collection/man-hinh-sinh-nhat-ap-2023.html?id=2320" target='_blank' rel='nofollow'><img src="../anphat.com.vn/media/banner/15_Feb7a2de340cf9e97a704d21ff2cb5ee8c8.png"  alt="" width="385" height="252"/></a>
                  
                       <a href="media/marketing/SN19-PC/CTKM.html?id=2319" target='_blank' rel='nofollow'><img src="../anphat.com.vn/media/banner/15_Feb8a74524c53f5d28f4c1964b7bc5409c6.png"  alt="" width="385" height="252"/></a>
                  
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="banner-slider-bottom">
              
                <a href="laptop-acer-gaming_dm1675.html?id=2330" target='_blank' rel='nofollow'><img src="../anphat.com.vn/media/banner/15_Febbe5f01de9f2f4f26cf9982c33777ed30.png"  alt="" width="437" height="180"/></a>
              
                <a href="media/marketing/Lenovo-Buffet/CTKM.html?id=2331" target='_blank' rel='nofollow'><img src="../anphat.com.vn/media/banner/15_Feb39e3169302ee5371e5fac653e24c7aaa.png"  alt="" width="437" height="180"/></a>
              
                <a href="collection/thiet-bi-van-phong-sinh-nhat-ap-2023.html?id=2332" target='_blank' rel='nofollow'><img src="../anphat.com.vn/media/banner/15_Feb90127f3ef930468dbb951164ecc23040.png"  alt="" width="437" height="180"/></a>
              
            </div>
          
        </div>

        <div class="banner-under-slider d-flex justify-content-between">
            
           <a href="tiec-sinh-nhat-linh-dinh-qua-doc-quyen-bac-ninh.html?id=2333" target='_blank' rel='nofollow'><img src="../anphat.com.vn/media/banner/15_Febbeb7ef1f65e6a412d93f81675f02b5c8.png"  alt="" width="534" height="285"/></a>
        
           <a href="quet-qr-code-nhan-ngay-uu-dai-len-toi-1-trieu-2023.html?id=2334" target='_blank' rel='nofollow'><img src="../anphat.com.vn/media/banner/15_Febedb4f93429297d20fefe75cdc7d97985.png"  alt="" width="534" height="285"/></a>
        
           <a href="collection/gear-sinh-nhat.html?id=2335" target='_blank' rel='nofollow'><img src="../anphat.com.vn/media/banner/15_Feb16094a0b20cc0598e4440d68fef69aef.png"  alt="" width="534" height="285"/></a>
            
        </div>

        <!-- product_bestsale -->
        @if(!empty($product_sale)&&$product_sale->count()>0)
        <div class="home-pro-hot box-pro-container bg-white pb-2" id="js-bestsale-container">
            <div class="box-title-container">
                <h2 class="box-title"> top sản phẩm bán chạy </h2>

                <div class="child-title">
                    <a href="pcap-gaming.html"> PC gaming </a>
                    <a href="gaming-laptop.html"> Laptop gaming </a>
                    <a href="apple_dm1064.html"> Macbook Apple </a>
                    <a href="may-in-canon_dm1121.html"> máy in canon </a>
                    <a href="man-hinh-may-tinh.html"> màn hình máy tính </a>
                    <a href="man-hinh-may-tinh-chuyen-gaming_dm1694.html"> màn hình gaming </a>
                </div>
            </div>

            <div class="p-container" style="min-height: 850px">
                
                <div class="d-flex flex-wrap" id="js-bestsale-holder-2">

                    @foreach($product_sale as  $value)
                    @if($value->active==1)
                    <div class="p-item js-p-item done" data-id="43316">
                        <a href="{{ route('details', $value->Link) }}" class="p-img">
                        <img src="{{ asset($value->Image) }}" alt="{{ $value->title }}" class="fit-img">
                        <span class="icon-new"></span>
                        <span class="p-isSaleOff"></span>
                        <span class="p-icon-holder js-icon-43316"> <i class="p-icon-"></i></span>
                        </a>
                        <div class="p-text">
                            <span class="p-sku" style="font-size: 12px;">Mã SP: NBDE0820</span>
                            <a href="/laptop-dell-inspiron-15-3520-i3u082w11blu.html" class="p-name"> Laptop Dell Inspiron 15 3520 i3U082W11BLU (Core i3-1215U | 8GB | 256GB | Intel UHD | 15.6 inch FHD | Win 11 | Office | Đen) </a>
                            <div class="price-container">
                                <del class="p-old-price"> 15.190.000 đ </del>
                                <span class="p-discount"> -10% </span>
                                <span class="p-price"> 13.790.000 đ </span>
                            </div>
                            <div class="p-special-container">1 khuyến mại</div>
                            <div class="d-flex align-items-centet justify-content-between">
                                <a href="javascript:void(0)" class="p-conpare js-p-compare" onclick="compare_addProduct(43316,'https://anphat.com.vn/media/product/250_43316_laptop_dell_inspiron_15_3520_i3u082w11blu.jpg', this)">So sánh</a>
                                <a href="javascript:void(0)" class="p-add-btn fa fa-shopping-cart" onclick="addProduct(43316)"></a>
                            </div>
                        </div>
                        <div class="p-tooltip">
                            <p class="tooltip-title"> {{ $value->title }} </p>
                            <div class="tooltip-content">
                                <div class="tooltip-specialOffer">
                                    <div class="spec-title"><span class="title-text"> KHUYẾN MÃI</span></div>
                                    <ul class="ul">
                                        <li> <span class="text">🎁 <b><font color="red"> Gói quà tặng bao gồm :</font></b>
                                            </span>
                                        </li>
                                        <li> <span class="text">✦ <b>Hỗ trợ mua ram DDR4 Kingston 8GB DDR4 3200Mhz Notebook (RAKT0099) chỉ với 599.000đ</b>
                                            </span>
                                        </li>
                                        <li> <span class="text">✦ Ba lô An Phát cho laptop (TUNB0097)
                                            </span>
                                        </li>
                                        <li> <span class="text">✦ Chuột không dây AP2021(MUKH0061) hoặc Chuột không dây Konig KM919 (MUKM0021)
                                            </span>
                                        </li>
                                        <li> <span class="text">✦ Túi chống sốc 15"(TUNB0001)
                                            </span>
                                        </li>
                                        <li> <span class="text">🎁 <b><font color="red"> Ưu đãi mua kèm hấp dẫn </font></b>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tooltip-summary"><span class="item"><i class="fa fa-check-circle"></i>{{ $value->title }}
                                    </span><span class="item"><i class="fa fa-check-circle"></i>RAM: 8GB (1x8GB) DDR4 3200mhz( 2 khe)
                                    </span><span class="item"><i class="fa fa-check-circle"></i>Ổ cứng: 256GB M.2 PCIe NVMe SSD
                                    </span><span class="item"><i class="fa fa-check-circle"></i>VGA: Intel UHD Graphics
                                    </span><span class="item"><i class="fa fa-check-circle"></i>Màn hình: 15.6 inch FHD 120Hz 250nits
                                    </span>
                                </div>
                                <div class="position-relative">
                                    <span>
                                    Giá niêm yết:
                                    <del class="p-old-price" style="display: inline-block;"> 
                                        {{  @str_replace(',' ,'.', number_format($value->Price))  }} đ </del>
                                    </span>
                                    <span class="p-discount"> -10% </span>
                                    <p class="p-price" style="margin: 0;">
                                        <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                        13.790.000 đ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                    
                </div>
               
                <a href="/san-pham-ban-chay" class="view-all"> xem tất cả sản phẩm </a>
            </div>
        </div>
         @endif
        

        <!-- Banner under product-hot -->
        <div class="banner-under-product-hot d-flex justify-content-between">
            
            <a href="media/marketing/Nvidia-Geforce/CTKM.html?id=1792" target='_blank' rel='nofollow'><img border=0 src="../anphat.com.vn/media/banner/21_Dec2f8c5163627f0836d99f02767143a0a1.jpg" width='798' height='232' alt="NVIDIA PAF Q4 2021"/></a>
            
            <a href="laptop-asus-zenbook-14-ux433_dm1686.html?id=1885" target='_blank' rel='nofollow'><img border=0 src="../anphat.com.vn/media/banner/20_Apr50726dde2040fd91b47b296177a2c227.jpg" width='798' height='232' alt="Asus"/></a>
            
        </div>
        

        <!-- product feated -->

        @if($group->count()>0)

        @foreach($group as $key => $groups)

        <?php

            $hot = Cache::rememberForever('hot'.$groups->id, function() use($groups){

                $hot = DB::table('hot')->select('product_id')->where('group_id', $groups->id)->orderBy('orders', 'asc')->get()->pluck('product_id');

                return $hot;
            });

            // xử lý khi không có cache

            if(Cache::has('product_search'))
            {
                $data = Cache::get('product_search')->whereIn('id', $hot->toArray())->sortByDesc('orders_hot');
            }
            else{


                $productss = App\Models\product::select('Link', 'Name', 'Image', 'Price', 'id', 'ProductSku', 'promotion', 'promotion_box')->where('active', 1)->get();

                Cache::forever('product_search',$productss);

                $data = Cache::get('product_search')->whereIn('id', $hot->toArray())->sortByDesc('orders_hot');
            }
           
        ?>
        
        <div class="box-pro-container bg-white js-box-container" style="min-height: 400px">
            <div class="box-title-container">
                <h2 class="box-title">{{  @$groups->name }} </h2>
            </div>

            <div class="p-container custom-nav owl-carousel owl-theme owl-loaded owl-drag" id="js-holder-1064" data-id="1064">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1610px;">



                        @if(!empty($data) && $data->count()>0)

                        @foreach($data as $datas)


                        <div class="owl-item active" style="width: 258.333px; margin-right: 10px;">
                            <div class="p-item js-p-item done" data-id="43358">
                                <a href="{{ route('details', $datas->Link) }}" class="p-img">
                                <img src="{{ asset($datas->Image) }}" alt="{{ $datas->title }}" class="fit-img">
                                <span class="icon-new"></span>
                                <span class="p-isSaleOff"></span>
                                <span class="p-icon-holder js-icon-43358"> <i class="p-icon-"></i></span>
                                </a>
                                <div class="p-text">
                                    <span class="p-sku" style="font-size: 12px;">Mã SP: DTIP0040</span>
                                    <a href="{{ route('details', $datas->Link) }}" class="p-name"> 
                                        {{ $datas->Name }} </a>
                                    <div class="price-container">

                                        @if(!empty($datas->manuPrice))

                                        <?php
                                        $discount =  round(((intval($datas->manuPrice) - intval($datas->Price))/intval($datas->manuPrice))*100)
                                        ?>

                                        <del class="p-old-price"> {{ @number_format($datas->manuPrice , 0, ',', '.')}} đ </del>

                                        <span class="p-discount"> -{{ $discount }}% </span>
                                        @endif

                                        <span class="p-price"> {{ @number_format($datas->Price , 0, ',', '.')}}  đ </span>
                                        
                                        
                                      
                                    </div>
                                    
                                    
                                </div>
                                <div class="p-tooltip">
                                    <p class="tooltip-title"> {{  @$datas->Name }} </p>
                                    <div class="tooltip-content">
                                        <div class="tooltip-specialOffer">
                                            <div class="spec-title"><span class="title-text"> KHUYẾN MÃI</span></div>
                                            <ul class="ul">
                                                <li> <span class="text">Giá bán không áp dụng với các chương trình khuyến mại, ưu đãi khác  </span></li>
                                            </ul>
                                        </div>
                                        <div class="tooltip-summary"><span class="item"><i class="fa fa-check-circle"></i>{{  @$datas->Name }}
                                            
                                            </span><span class="item"><i class="fa fa-check-circle"></i>Camera sau: 48MP, 2x 12MP
                                            </span><span class="item"><i class="fa fa-check-circle"></i>Camera trước: 12MP
                                            </span><span class="item"><i class="fa fa-check-circle"></i>CPU: A16 Bionic
                                            </span><span class="item"><i class="fa fa-check-circle"></i>Bộ nhớ: 128GB
                                            </span>
                                        </div>
                                        <div class="position-relative">
                                            <span>
                                            Giá niêm yết:
                                            <del class="p-old-price" style="display: inline-block;">  {{ @number_format($datas->manuPrice , 0, ',', '.')}} đ </del>
                                            </span>
                                            <span class="p-discount"> -18% </span>
                                            <p class="p-price" style="margin: 0;">
                                                <span style="font-size: 14px;color: #000;font-weight: normal;">Giá khuyến mãi:</span>
                                                {{ @number_format($datas->Price , 0, ',', '.')}} đ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @endif
                       
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-right"></i></button></div>
                <div class="owl-dots disabled"></div>
                <div class="owl-thumbs"></div>
            </div>

            <a href="{{ route('details', $groups->link) }}" class="view-cate"> XEM TẤT CẢ <i class="fa fa-angle-double-right"></i> </a>
           
        </div>

         @endforeach
         @endif
    </div>
</section>
@endsection