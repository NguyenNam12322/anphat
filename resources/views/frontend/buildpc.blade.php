
@extends('frontend.layouts.apps')

@section('content')

@push('style')

<link rel="stylesheet" type="text/css" href="{{ asset('css/buildpc.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('css/build_pc_v2.css') }}">




<style type="text/css">
    
    .p-item .p-img {

        padding-bottom: 0;
    }  

    /*.p-item {
        display: flex;
    } */

    .p-img{
        padding-top: 21%;
    }
</style>

<link rel="stylesheet" type="text/css" href="https://dienmaynguoiviet.vn/css/lib/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/assets/owl.carousel.css">
@endpush


<main class="build-pc pc">
    <div class="container" style="background: white; padding: 20px;">
        <div class="buildpc-banner-container mb-4">
            <div class="owl-carousel owl-theme custom-dots owl-loaded owl-drag" id="js-banner-buildpc">
                <div class="owl-stage-outer">
                    <div class="owl-stage"></div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
                <div class="owl-thumbs"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="build-pc_content" style="margin-top: 0;">
            <h1 style="color: #333; border: none; float: left; margin: 5px 0 15px 0px;font-size: 20px;">Build PC - Xây dựng cấu hình máy tính 2023</h1>
            <ul class="list-btn-action" style="margin: 0; padding: 0; float: right; border: none;">
                <li style="width: auto;">
                    <span onclick="openPopupRebuild()" style="padding: 0 20px;">Làm mới <i class="fa fa-undo"></i></span>
                </li>
            </ul>
            <div class="clear"></div>
            <ul class="list-btn-action list-btn-action-new" style="margin-top: 0; float: left; border: none;">
                <li style="width: auto;" class="active"><span onclick="showBuildId(1);changeTab(this);" style="padding: 0 20px;">Cấu hình 1</span></li>
                <li style="width: auto;"><span onclick="showBuildId(2);changeTab(this);" style="padding: 0 20px;">Cấu hình 2</span></li>
                <li style="width: auto;"><span onclick="showBuildId(3);changeTab(this);" style="padding: 0 20px;">Cấu hình 3</span></li>
                <li style="width: auto;"><span onclick="showBuildId(4);changeTab(this);" style="padding: 0 20px;">Cấu hình 4</span></li>
                <li style="width: auto;"><span onclick="showBuildId(5);changeTab(this);" style="padding: 0 20px;">Cấu hình 5</span></li>
            </ul>
            <div class="clear"></div>
            <hr color="#ddd">
            <h2 style="float: left; margin: 15px 0;font-size: 14px;">Vui lòng chọn linh kiện bạn cần để xây dựng cấu hình máy tính riêng cho bạn</h2>
            <p style="float: right; font-size: 18px; color: #d00; margin-top: 10px;">
                Chi phí dự tính: 
                <span class="js-config-summary">
                    <span class="total-price-config">0 VNĐ</span>
            <p> </p></span></p>
            <div class="clear"></div>
            <div class="list-drive" id="js-buildpc-layout">
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">1. Bộ vi xử lý</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1025" ><i class="fa fa-plus"></i> Chọn Bộ vi xử lý</span>
                        <div id="js-selected-item-1025"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">2. Bo mạch chủ</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1024" data-info="{&quot;id&quot;:1024,&quot;name&quot;:&quot;Bo mạch chủ&quot;}"><i class="fa fa-plus"></i> Chọn Bo mạch chủ</span>
                        <div id="js-selected-item-1024"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">3. RAM</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1234" data-info="{&quot;id&quot;:1234,&quot;name&quot;:&quot;RAM&quot;}"><i class="fa fa-plus"></i> Chọn RAM</span>
                        <div id="js-selected-item-1234"></div>
                    </div>
                </div>
                
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">4. SSD </h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1030" data-info="{&quot;id&quot;:1030,&quot;name&quot;:&quot;SSD 1&quot;}"><i class="fa fa-plus"></i> Chọn SSD</span>
                        <div id="js-selected-item-1030"></div>
                    </div>
                </div>
                
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">5. VGA</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1155" data-info="{&quot;id&quot;:1155,&quot;name&quot;:&quot;VGA&quot;}"><i class="fa fa-plus"></i> Chọn VGA</span>
                        <div id="js-selected-item-1155"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">6. Nguồn</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1051" data-info="{&quot;id&quot;:1051,&quot;name&quot;:&quot;Nguồn&quot;}"><i class="fa fa-plus"></i> Chọn Nguồn</span>
                        <div id="js-selected-item-1051"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">7. Vỏ Case</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1050" data-info="{&quot;id&quot;:1050,&quot;name&quot;:&quot;Vỏ Case&quot;}"><i class="fa fa-plus"></i> Chọn Vỏ Case</span>
                        <div id="js-selected-item-1050"></div>
                    </div>
                </div>
               
            </div>
            <div class="clear"></div>
            <p style="float: right; font-size: 18px; color: #d00; margin-top: 10px;">
                Chi phí dự tính: 
                <span class="js-config-summary">
                    <span class="total-price-config">0 VNĐ</span>
            <p> </p></span></p>
            <div class="clear"></div>
            <!-- <ul class="list-btn-action" id="js-buildpc-action" style="margin-top: 10px;">
                <li>
                    <span data-action="save">lưu cấu hình <i class="fa fa-save"></i></span>
                </li>
                <li>
                    <span data-action="create-image">tải ảnh cấu hình <i class="fa fa-image"></i></span>
                </li>
                <li>
                    <span data-action="share">chia sẻ cấu hình <i class="fa fa-share"></i></span>
                </li>
                <li style="float: right; margin: 0; padding: 0;">
                    <span data-action="add-cart">Thêm vào giỏ hàng <i class="fa fa-cart-plus"></i></span>
                </li>
                <li style="float: right;">
                    <span data-action="view">Xem &amp; In <i class="fa fa-picture-o"></i></span>
                </li>
                <li style="float: right;">
                    <span data-action="download-excel">tải file excel cấu hình <i class="fa fa-file-excel"></i></span>
                </li>
            </ul> -->
        </div>
        <div id="js-modal-popup"></div>
    </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script src="/path/to/bootstrap/js/bootstrap.min.js"></script>
   
 

</main>




<div class="modal fade" id="modal-show-products" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="popup-main_content  float_r">
                    <div class="sort-paging clear">
                        <div class="sort-block float_l">
                            <span>Sắp xếp: </span>
                            <select onchange="if(this.value != '') { objBuildPCVisual.showProductFilter(this.value) }">
                                <option value="">Tùy chọn</option>
                                <option value="https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;other_filter=in-stock">Còn hàng</option>
                                <option value="https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;sort=new">Mới nhất</option>
                                <option value="https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;sort=price-asc">Giá tăng dần</option>
                                <option value="https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;sort=price-desc">Giá giảm dần</option>
                                <option value="https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;sort=view">Lượt xem</option>
                                <option value="https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;sort=rating">Đánh giá</option>
                                <option value="https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;sort=name">Tên A-&gt;Z</option>
                            </select>
                        </div>
                        <div class="paging-block float_r paging-ajax">
                            <table cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td class="pagingIntact"><a>Xem</a></td>
                                        <td class="pagingSpace"></td>
                                        <td class="pagingViewed">1</td>
                                        <td class="pagingSpace"></td>
                                        <td class="pagingIntact"><a href="javascript:;" onclick="loadAjaxContent('', '/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;storeId=&amp;&amp;page=2')">2</a></td>
                                        <td class="pagingSpace"></td>
                                        <td class="pagingIntact"><a href="javascript:;" onclick="loadAjaxContent('', '/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;storeId=&amp;&amp;page=3')">3</a></td>
                                        <td class="pagingSpace"></td>
                                        <td class="pagingIntact"><a href="javascript:;" onclick="loadAjaxContent('', '/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;storeId=&amp;&amp;page=4')">4</a></td>
                                        <td class="pagingSpace"></td>
                                        <td class="pagingIntact"><a href="javascript:;" onclick="loadAjaxContent('', '/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;storeId=&amp;&amp;page=5')">5</a></td>
                                        <td class="pagingSpace"></td>
                                        <td class="pagingIntact"><a href="javascript:;" onclick="loadAjaxContent('', '/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1047&amp;pc_part_id=44432-1024%2C44463-1234&amp;storeId=&amp;&amp;page=2')">&gt;&gt;</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="list-product-select">
                        <div class="p-item">
                            <a href="/o-cung-western-digital-red-plus-4tb-3.5-inch-128mb-cache-5400rpm-wd40efzx.html" class="p-img" target="_blank">
                            <img src="https://anphat.com.vn/media/product/120_44477_46791_wd40efzx_ha2.jpg" alt="Ổ cứng Western Digital Red Plus 4TB 3.5 inch 256MB Cache 5400RPM WD40EFPX">
                            </a>
                            <div class="info">
                                <a href="/o-cung-western-digital-red-plus-4tb-3.5-inch-128mb-cache-5400rpm-wd40efzx.html" class="p-name" target="_blank">Ổ cứng Western Digital Red Plus 4TB 3.5 inch 256MB Cache 5400RPM WD40EFPX</a>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="80"><b>Mã SP:</b></td>
                                            <td>OCWD0245</td>
                                        </tr>
                                        <tr>
                                            <td><b>Bảo hành:</b></td>
                                            <td>36 tháng</td>
                                        </tr>
                                        <tr>
                                            <td valign="top"><b>Kho hàng:</b></td>
                                            <td>
                                                Còn hàng
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span class="p-price">2.999.000</span>
                            </div>
                            <span class="btn-buy js-select-product" data-id="44477">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="p-item">
                            <a href="/o-cung-western-digital-red-plus-6tb-3.5-inch-256mb-cache-5400rpm-wd60efpx.html" class="p-img" target="_blank">
                            <img src="https://anphat.com.vn/media/product/120_44186_" alt="Ổ cứng Western Digital Red Plus 6TB 3.5 inch 256MB Cache 5400RPM WD60EFPX">
                            </a>
                            <div class="info">
                                <a href="/o-cung-western-digital-red-plus-6tb-3.5-inch-256mb-cache-5400rpm-wd60efpx.html" class="p-name" target="_blank">Ổ cứng Western Digital Red Plus 6TB 3.5 inch 256MB Cache 5400RPM WD60EFPX</a>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="80"><b>Mã SP:</b></td>
                                            <td>OCWD0244</td>
                                        </tr>
                                        <tr>
                                            <td><b>Bảo hành:</b></td>
                                            <td>36 tháng</td>
                                        </tr>
                                        <tr>
                                            <td valign="top"><b>Kho hàng:</b></td>
                                            <td>
                                                Còn hàng
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span class="p-price">4.789.000</span>
                            </div>
                            <span class="btn-buy js-select-product" data-id="44186">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="p-item">
                            <a href="/o-cung-western-digital-caviar-blue-2tb-256mb-cache-7200rpm-wd20ezbx.html" class="p-img" target="_blank">
                            <img src="https://anphat.com.vn/media/product/120_43114_417_o_cung_hdd_wd_blue_2tb_wd20ezbx_vcom.jpg" alt="Ổ cứng Western Digital Caviar Blue 2TB 256MB Cache 7200rpm ( WD20EZBX)">
                            </a>
                            <div class="info">
                                <a href="/o-cung-western-digital-caviar-blue-2tb-256mb-cache-7200rpm-wd20ezbx.html" class="p-name" target="_blank">Ổ cứng Western Digital Caviar Blue 2TB 256MB Cache 7200rpm ( WD20EZBX)</a>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="80"><b>Mã SP:</b></td>
                                            <td>OCWD0239</td>
                                        </tr>
                                        <tr>
                                            <td><b>Bảo hành:</b></td>
                                            <td>24 tháng</td>
                                        </tr>
                                        <tr>
                                            <td valign="top"><b>Kho hàng:</b></td>
                                            <td>
                                                Còn hàng
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span class="p-price">1.469.000</span>
                            </div>
                            <span class="btn-buy js-select-product" data-id="43114">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="p-item">
                            <a href="/o-cung-western-digital-purple-4tb-256mb-cache-5400rpm-wd42purz.html" class="p-img" target="_blank">
                            <img src="https://anphat.com.vn/media/product/120_41257_18466_8e89ca7772228b499a6db249096cf5ff__1_.jpg" alt="Ổ cứng Western Digital Purple 4TB 256MB Cache 5400RPM WD42PURZ">
                            </a>
                            <div class="info">
                                <a href="/o-cung-western-digital-purple-4tb-256mb-cache-5400rpm-wd42purz.html" class="p-name" target="_blank">Ổ cứng Western Digital Purple 4TB 256MB Cache 5400RPM WD42PURZ</a>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="80"><b>Mã SP:</b></td>
                                            <td>OCWD0223</td>
                                        </tr>
                                        <tr>
                                            <td><b>Bảo hành:</b></td>
                                            <td>36 tháng</td>
                                        </tr>
                                        <tr>
                                            <td valign="top"><b>Kho hàng:</b></td>
                                            <td>
                                                Còn hàng
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span class="p-price">2.499.000</span>
                            </div>
                            <span class="btn-buy js-select-product" data-id="41257">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                        </div>
                        
                    </div>
                </div> 


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>





 <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

   

   

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <script type="text/javascript">


    $('.open-selection').click(function () {

            $('#modal-show-products').modal('show');

        })    

      
    
  
</script>




@endsection