@extends('frontend.layouts.apps')

@section('content') 


<section class="product-page">
    <div class="container">
        <div id="breadcrumb">
            <ol class="ul clearfix" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{ route('homeFe') }}" itemprop="item" class="nopad-l">
                    <span itemprop="name"><span style="font-size: 0px">Home</span><i class="icon icon-home"></i></span>
                    </a>  
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="may-tinh-may-chu.html" itemprop="item" class="nopad-l">
                    <span itemprop="name">Máy tính - Máy chủ</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
               <!--  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="may-tinh-workstation-may-tram_dm1469.html" itemprop="item" class="nopad-l">
                    <span itemprop="name">Máy trạm Workstation</span>
                    </a>
                    <meta itemprop="position" content="3" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="dell-workstation_dm1453.html" itemprop="item" class="nopad-l">
                    <span itemprop="name">Dell Workstation</span>
                    </a>
                    <meta itemprop="position" content="4" />
                </li> -->
            </ol>
        </div>
        <!--  -->
        <!-- filter -->
        <div class="product-filter-container bg-white position-relative">
            <!-- <p class="title text-20"> BỘ LỌC </p> -->
           
            <div class="filter-box overflow-hidden" id="js-filter-height">
               <!--  <table>
                    
                    <tr class="js-filter-row">
                        <td width="190px"> <b>Hãng sản xuất</b> </td>
                        <td>
                            <div class="filter-list">
                                <a href="dell-workstation_dm1453e16a.html?brand=4" > Dell </a>
                            </div>
                        </td>
                        <td width="95px">
                            <a href="javascript:void(0)" class="js-toggle-filter toggle-filter">
                            <i class="fa fa-angle-down"></i>
                            </a> 
                        </td>
                    </tr>
                    
                    <tr class="js-filter-row">
                        <td width="190"> <b> Bộ vi xử lý </b> </td>
                        <td>
                            <div class="filter-list">
                                <a href="dell-workstation_dm1453c5c5.html?filter=156" > Core i5 </a>
                                <a href="dell-workstation_dm145389fa.html?filter=157" > Core i7 </a>
                                <a href="dell-workstation_dm1453a18c.html?filter=2495" > Core i9 </a>
                                <a href="dell-workstation_dm1453d504.html?filter=1677" > Intel Xeon </a>
                            </div>
                        </td>
                        <td width="95px">
                            <a href="javascript:void(0)" class="js-toggle-filter toggle-filter">
                            <i class="fa fa-angle-down"></i>
                            </a> 
                        </td>
                    </tr>
                    
                    <tr class="js-filter-row">
                        <td width="190"> <b> Dung lượng RAM </b> </td>
                        <td>
                            <div class="filter-list">
                                <a href="dell-workstation_dm14534818.html?filter=1226" > 32 GB </a>
                                <a href="dell-workstation_dm14534148.html?filter=1225" > 16 GB </a>
                                <a href="dell-workstation_dm1453910b.html?filter=1224" > 8 GB </a>
                                <a href="dell-workstation_dm14530acc.html?filter=3153" > 2x8GB </a>
                            </div>
                        </td>
                        <td width="95px">
                            <a href="javascript:void(0)" class="js-toggle-filter toggle-filter">
                            <i class="fa fa-angle-down"></i>
                            </a> 
                        </td>
                    </tr>
                    
                    <tr class="js-filter-row">
                        <td width="190"> <b> Dung lượng ổ cứng </b> </td>
                        <td>
                            <div class="filter-list">
                                <a href="dell-workstation_dm145331e9.html?filter=542" > 2TB </a>
                                <a href="dell-workstation_dm1453e06a.html?filter=540" > 1TB </a>
                                <a href="dell-workstation_dm14533142.html?filter=2206" > 256GB </a>
                                <a href="dell-workstation_dm1453cecd.html?filter=2341" > 256GB SSD </a>
                            </div>
                        </td>
                        <td width="95px">
                            <a href="javascript:void(0)" class="js-toggle-filter toggle-filter">
                            <i class="fa fa-angle-down"></i>
                            </a> 
                        </td>
                    </tr>
                    
                    <tr class="js-filter-row">
                        <td width="190"> <b> Dung lượng VGA </b> </td>
                        <td>
                            <div class="filter-list">
                                <a href="dell-workstation_dm14538c9d.html?filter=1710" > 8GB </a>
                                <a href="dell-workstation_dm145304fd.html?filter=1432" > 6GB </a>
                                <a href="dell-workstation_dm14539d96.html?filter=1614" > 5GB </a>
                                <a href="dell-workstation_dm14538be7.html?filter=1004" > 4GB </a>
                                <a href="dell-workstation_dm1453992a.html?filter=2210" > Intel HD Graphics </a>
                            </div>
                        </td>
                        <td width="95px">
                            <a href="javascript:void(0)" class="js-toggle-filter toggle-filter">
                            <i class="fa fa-angle-down"></i>
                            </a> 
                        </td>
                    </tr>
                    
                    <tr class="js-filter-row">
                        <td width="190"> <b> Hệ điều hành </b> </td>
                        <td>
                            <div class="filter-list">
                                <a href="dell-workstation_dm14536cf0.html?filter=2021" > Windows 10 </a>
                                <a href="dell-workstation_dm1453b5c3.html?filter=2250" > Ubuntu </a>
                                <a href="dell-workstation_dm14532f9f.html?filter=3212" > Non-OS </a>
                                <a href="dell-workstation_dm14537321.html?filter=2481" > Fedora </a>
                                <a href="dell-workstation_dm145365c4.html?filter=3254" > Windows 11 Pro </a>
                                <a href="dell-workstation_dm14535060.html?filter=945" > Linux </a>
                                <a href="dell-workstation_dm1453caf3.html?filter=2562" > FreeDos </a>
                                <a href="dell-workstation_dm1453c263.html?filter=323" > PC Dos </a>
                            </div>
                        </td>
                        <td width="95px">
                            <a href="javascript:void(0)" class="js-toggle-filter toggle-filter">
                            <i class="fa fa-angle-down"></i>
                            </a> 
                        </td>
                    </tr>
                </table> -->
            </div>
            <!-- <a href="javascript:void(0)" class="button-show-filter blue" id="js-show-filter"> 
            Xem tất cả <i class="fa fa-angle-double-down"></i>
            </a>
            <a href="javascript:void(0)" class="button-show-filter blue" id="js-hide-filter"> 
            Thu gọn <i class="fa fa-angle-double-up"></i>
            </a> -->
        </div>
        <!-- end filter -->
        <div class="product-list-container bg-white">
            <div class="sort-container d-flex align-items-center justify-content-between flex-wrap">
                <b style="width: 90px"> Sắp xếp theo </b>
                <div class="d-flex align-items-center justify-content-end flex-wrap" style="width: calc(100% - 90px)">
                    <div class="sort-list clearfix">
                        <a href="{{url()->current()}}?action=desc&sort=Quantily" > Còn hàng </a> 
                        <a href="{{url()->current()}}?action=desc&sort=id" > Mới nhất </a> 
                        <a href="{{url()->current()}}?action=asc&sort=Price" > Giá tăng dần </a> 
                        <a href="{{url()->current()}}?action=desc&sort=Price" > Giá giảm dần </a> 
                        
                        <a href="dell-workstation_dm1453099b.html?sort=name" > Tên A->Z </a> 
                    </div>
                    <div class="choose-price-holder">
                        <input type="text" placeholder="Giá thấp nhất" value="" onkeyup="this.value = Hura.Util.writeStringToPrice(this.value)" size="9" class="text-center price-range js-price-range" id="js-min-range" />
                        - 
                        <input type="text" placeholder="Giá cao nhất" value="" onkeyup="this.value = Hura.Util.writeStringToPrice(this.value)" size="9" class="text-center price-range js-price-range" id="js-max-range" />
                        <a href="javascript:void(0)" class="submit-filter" id="js-submit-filter">Tìm</a>
                    </div>
                </div>
                <span style="display: block;width: 100%;text-align: right;margin-top: 10px;color: #f00;font-weight: 600;display: none;" id="js-filter-note"></span>
            </div>
            <div class="p-list-container d-flex flex-wrap">

               
                @if(!empty($data) && $data->count()>0)

                @foreach($data as $value)
                <div class="p-item  js-p-item done" data-id="41201">
                    <a href="{{ route('details', $value->Link) }}" class="p-img">
                    <img data-src="{{ asset($value->Image) }}" alt="{{  $value->Name }}" class="fit-img lazy loaded" src="{{ asset($value->Image) }}" data-was-processed="true">
                    <!-- <span class="icon-new"></span> -->
                    <span class="p-isSaleOff"></span>
                    <span class="p-icon-holder js-icon-41201"> <i class="p-icon-"></i></span>
                    </a>
                    <div class="p-text">
                        <span class="p-sku" style="font-size: 12px;">Mã SP: {{ $value->ProductSku }} </span>
                        <a href="{{ route('details', $value->Link) }}" class="p-name">
                            <h3>{{ $value->Name }}</h3>
                        </a>
                        <div class="price-container">
                            @if(!empty($datas->manuPrice))

                            <?php
                    
                                $discount =  round(((intval($value->manuPrice) - intval($value->Price))/intval($value->manuPrice))*100)
                            ?>
                            <del class="p-old-price"> {{ @number_format($datas->manuPrice , 0, ',', '.')}}  đ </del>
                            <span class="p-discount"> -{{ $discount }}%  </span>
                            @endif


                            <span class="p-price">
                            {{  @str_replace(',' ,'.', number_format($value->Price))  }} đ
                            </span>
                        </div>
                       
                    </div>
                   
                </div>
                @endforeach
                @endif      
                
            </div>
            <!-- paging -->
            <div class="paging">
            </div>
        </div>
    </div>
</section>
@endsection