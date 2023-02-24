
@extends('frontend.layouts.apps')

@section('content')

@push('style')

<link rel="stylesheet" type="text/css" href="{{ asset('css/buildpc.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('css/build_pc_v2.css') }}">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
    .btn-buy{
        cursor: pointer;
        background: red;
        color: #fff;
        padding: 5px;
        border-radius: 6px;
    }

    .modal-body{
        display: flex;
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
            <!-- <ul class="list-btn-action" style="margin: 0; padding: 0; float: right; border: none;">
                <li style="width: auto;">
                    <span onclick="openPopupRebuild()" style="padding: 0 20px;">Làm mới <i class="fa fa-undo"></i></span>
                </li>
            </ul> -->
            <div class="clear"></div>
            <ul class="list-btn-action list-btn-action-new" style="margin-top: 0; float: left; border: none;">
                <li style="width: auto;" class="active"><span onclick="showBuildId(1);changeTab(this);" style="padding: 0 20px;">Cấu hình 1</span></li>
                
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
                <div class="item-drive" id="box3">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">1. Bộ vi xử lý</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1025" data-id="3"><i class="fa fa-plus"></i> Chọn Bộ vi xử lý</span>
                        <div id="js-selected-item-1025"></div>
                    </div>
                </div>
                <div class="item-drive" id="box4">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">2. Bo mạch chủ</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1024" data-id="4"><i class="fa fa-plus"></i> Chọn Bo mạch chủ</span>
                        <div id="js-selected-item-1024"></div>
                    </div>
                </div>
                <div class="item-drive" id="box5">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">3. RAM</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1234" data-id="5"><i class="fa fa-plus"></i> Chọn RAM</span>
                        <div id="js-selected-item-1234"></div>
                    </div>
                </div>
                
                <div class="item-drive" id="box6">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">4. SSD </h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1030" data-id="6"><i class="fa fa-plus"></i> Chọn SSD</span>
                        <div id="js-selected-item-1030"></div>
                    </div>
                </div>
                
                <div class="item-drive" id="box7">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">5. VGA</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1155" data-id="7"><i class="fa fa-plus"></i> Chọn VGA</span>
                        <div id="js-selected-item-1155"></div>
                    </div>
                </div>
                <div class="item-drive" id="box8">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">6. Nguồn</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1051" data-id="8"><i class="fa fa-plus"></i> Chọn Nguồn</span>
                        <div id="js-selected-item-1051"></div>
                    </div>
                </div>
                <div class="item-drive" id="box9">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">7. Vỏ Case</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1050" data-id="9"><i class="fa fa-plus"></i> Chọn Vỏ Case</span>
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
                <h5 class="modal-title" id="exampleModalLabel">Chọn sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <div class="popup-main_filter w-40 float_l">
                    <h4>Lọc sản phẩm theo</h4>
                    <div class="list-filter">
                        <div class="gr-filter brand">
                            <!--
                                -->
                            <h5 class="title-filter">
                                Hãng sản xuất <!--<span class="show-filter"><i class="fas fa-caret-right"></i></span>-->
                            </h5>
                            <ul>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=6')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=6')"><span class="value-filter">Acer (4)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=8')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=8')"><span class="value-filter">Samsung (33)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=37')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=37')"><span class="value-filter">Adata (12)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=223')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=223')"><span class="value-filter">Apacer (6)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=138')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=138')"><span class="value-filter">Corsair (4)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=53')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=53')"><span class="value-filter">Gigabyte (10)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=262')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=262')"><span class="value-filter">Hikvsion (2)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=304')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=304')"><span class="value-filter">HPE (1)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=51')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=51')"><span class="value-filter">Intel (2)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=43')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=43')"><span class="value-filter">Kingmax (13)</span></a>
                                </li>
                            </ul>
                           
                        </div>

                        <div class="gr-filter brand">
                            <!--
                                -->
                            <h5 class="title-filter">
                                Hãng sản xuất <!--<span class="show-filter"><i class="fas fa-caret-right"></i></span>-->
                            </h5>
                            <ul>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=6')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=6')"><span class="value-filter">Acer (4)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=8')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=8')"><span class="value-filter">Samsung (33)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=37')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=37')"><span class="value-filter">Adata (12)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=223')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=223')"><span class="value-filter">Apacer (6)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=138')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=138')"><span class="value-filter">Corsair (4)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=53')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=53')"><span class="value-filter">Gigabyte (10)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=262')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=262')"><span class="value-filter">Hikvsion (2)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=304')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=304')"><span class="value-filter">HPE (1)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=51')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=51')"><span class="value-filter">Intel (2)</span></a>
                                </li>
                                <li>
                                    <input type="checkbox" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=43')"> 
                                    <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=43')"><span class="value-filter">Kingmax (13)</span></a>
                                </li>
                            </ul>
                           
                        </div>
                       
                    </div>


                    <!--list-filter-->
                </div>
                <div class="popup-main_content w-60 float_r">
                    
                    <div class="list-product-select">
                        
                        
                    </div>
                </div> 


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>





 <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

   

   <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>


    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <script type="text/javascript">

       
    $('.open-selection').click(function () {

        var id = $(this).attr('data-id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('show-product-click') }}",
            data: {
                id: id,
                   
            },
           
            success: function(result){

                $('.list-product-select').html('');
    
                $('.list-product-select').append(result);

                jQuery.noConflict(); 
                $('#modal-show-products').modal('show'); 

                
            }
        });

        

    }) ;


    
    function addPd(group_id, product_id) {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('add-info-pc') }}",
            data: {
                product_id: product_id,
                group_id:group_id,
                   
            },
           
            success: function(result){

                $('#box'+group_id+' .drive-checked').remove();
                $('#box'+group_id).append(result);

                sum = 0;

                $( ".sum_price" ).each(function( index ) {

                    sum += parseInt($( this ).text().replaceAll('.', ''));
                  
                });

                const formatter = new Intl.NumberFormat('vi', {
                  style: 'currency',
                  currency: 'VND',

                });

        
                $('.total-price-config').text(formatter.format(sum));

                jQuery.noConflict(); 
                $('#modal-show-products').modal('hide'); 

                
            }
        });
    }







</script>




@endsection