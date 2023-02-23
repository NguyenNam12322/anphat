
@extends('frontend.layouts.apps')

@section('content')

@push('style')

<link rel="stylesheet" type="text/css" href="{{ asset('css/buildpc.css') }}">
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
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1025" data-info="{&quot;id&quot;:1025,&quot;name&quot;:&quot;Bộ vi xử lý&quot;}"><i class="fa fa-plus"></i> Chọn Bộ vi xử lý</span>
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
                        <h3 style="font-size: 14px;border-bottom:none;">4. HDD</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1047" data-info="{&quot;id&quot;:1047,&quot;name&quot;:&quot;HDD&quot;}"><i class="fa fa-plus"></i> Chọn HDD</span>
                        <div id="js-selected-item-1047"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">5. SSD 1</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1030" data-info="{&quot;id&quot;:1030,&quot;name&quot;:&quot;SSD 1&quot;}"><i class="fa fa-plus"></i> Chọn SSD 1</span>
                        <div id="js-selected-item-1030"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">6. SSD 2</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-2296" data-info="{&quot;id&quot;:2296,&quot;name&quot;:&quot;SSD 2&quot;}"><i class="fa fa-plus"></i> Chọn SSD 2</span>
                        <div id="js-selected-item-2296"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">7. VGA</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1155" data-info="{&quot;id&quot;:1155,&quot;name&quot;:&quot;VGA&quot;}"><i class="fa fa-plus"></i> Chọn VGA</span>
                        <div id="js-selected-item-1155"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">8. Nguồn</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1051" data-info="{&quot;id&quot;:1051,&quot;name&quot;:&quot;Nguồn&quot;}"><i class="fa fa-plus"></i> Chọn Nguồn</span>
                        <div id="js-selected-item-1051"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">9. Vỏ Case</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1050" data-info="{&quot;id&quot;:1050,&quot;name&quot;:&quot;Vỏ Case&quot;}"><i class="fa fa-plus"></i> Chọn Vỏ Case</span>
                        <div id="js-selected-item-1050"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">10. Màn hình</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1052" data-info="{&quot;id&quot;:1052,&quot;name&quot;:&quot;Màn hình&quot;}"><i class="fa fa-plus"></i> Chọn Màn hình</span>
                        <div id="js-selected-item-1052"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">11. Màn hình bổ sung</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1692" data-info="{&quot;id&quot;:1692,&quot;name&quot;:&quot;Màn hình bổ sung&quot;}"><i class="fa fa-plus"></i> Chọn Màn hình bổ sung</span>
                        <div id="js-selected-item-1692"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">12. Bộ bàn phím chuột</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1292" data-info="{&quot;id&quot;:1292,&quot;name&quot;:&quot;Bộ bàn phím chuột&quot;}"><i class="fa fa-plus"></i> Chọn Bộ bàn phím chuột</span>
                        <div id="js-selected-item-1292"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">13. Bàn phím</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1027" data-info="{&quot;id&quot;:1027,&quot;name&quot;:&quot;Bàn phím&quot;}"><i class="fa fa-plus"></i> Chọn Bàn phím</span>
                        <div id="js-selected-item-1027"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">14. Chuột Gaming</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1256" data-info="{&quot;id&quot;:1256,&quot;name&quot;:&quot;Chuột Gaming&quot;}"><i class="fa fa-plus"></i> Chọn Chuột Gaming</span>
                        <div id="js-selected-item-1256"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">15. Chuột văn phòng</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1291" data-info="{&quot;id&quot;:1291,&quot;name&quot;:&quot;Chuột văn phòng&quot;}"><i class="fa fa-plus"></i> Chọn Chuột văn phòng</span>
                        <div id="js-selected-item-1291"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">16. Loa</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1042" data-info="{&quot;id&quot;:1042,&quot;name&quot;:&quot;Loa&quot;}"><i class="fa fa-plus"></i> Chọn Loa</span>
                        <div id="js-selected-item-1042"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">17. Tản nhiệt nước All in One</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1390" data-info="{&quot;id&quot;:1390,&quot;name&quot;:&quot;Tản nhiệt nước All in One&quot;}"><i class="fa fa-plus"></i> Chọn Tản nhiệt nước All in One</span>
                        <div id="js-selected-item-1390"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">18. Tản nhiệt nước Custom</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1389" data-info="{&quot;id&quot;:1389,&quot;name&quot;:&quot;Tản nhiệt nước Custom&quot;}"><i class="fa fa-plus"></i> Chọn Tản nhiệt nước Custom</span>
                        <div id="js-selected-item-1389"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">19. Tản nhiệt khí - Aircooling</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1392" data-info="{&quot;id&quot;:1392,&quot;name&quot;:&quot;Tản nhiệt khí - Aircooling&quot;}"><i class="fa fa-plus"></i> Chọn Tản nhiệt khí - Aircooling</span>
                        <div id="js-selected-item-1392"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">20. Quạt tản nhiệt</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1519" data-info="{&quot;id&quot;:1519,&quot;name&quot;:&quot;Quạt tản nhiệt&quot;}"><i class="fa fa-plus"></i> Chọn Quạt tản nhiệt</span>
                        <div id="js-selected-item-1519"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">21. Windows bản quyền</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1101" data-info="{&quot;id&quot;:1101,&quot;name&quot;:&quot;Windows bản quyền&quot;}"><i class="fa fa-plus"></i> Chọn Windows bản quyền</span>
                        <div id="js-selected-item-1101"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">22. tai nghe</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1258" data-info="{&quot;id&quot;:1258,&quot;name&quot;:&quot;tai nghe&quot;}"><i class="fa fa-plus"></i> Chọn tai nghe</span>
                        <div id="js-selected-item-1258"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">23. Vô lăng chơi game</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1261" data-info="{&quot;id&quot;:1261,&quot;name&quot;:&quot;Vô lăng chơi game&quot;}"><i class="fa fa-plus"></i> Chọn Vô lăng chơi game</span>
                        <div id="js-selected-item-1261"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">24. Tay cầm chơi game</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1594" data-info="{&quot;id&quot;:1594,&quot;name&quot;:&quot;Tay cầm chơi game&quot;}"><i class="fa fa-plus"></i> Chọn Tay cầm chơi game</span>
                        <div id="js-selected-item-1594"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">25. Card Wifi</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-399" data-info="{&quot;id&quot;:399,&quot;name&quot;:&quot;Card Wifi&quot;}"><i class="fa fa-plus"></i> Chọn Card Wifi</span>
                        <div id="js-selected-item-399"></div>
                    </div>
                </div>
                <div class="item-drive">
                    <span class="d-name">
                        <h3 style="font-size: 14px;border-bottom:none;">26. Ổ DVD</h3>
                    </span>
                    <div class="drive-checked">
                        <span class="show-popup_select span-last open-selection" id="js-category-info-1048" data-info="{&quot;id&quot;:1048,&quot;name&quot;:&quot;Ổ DVD&quot;}"><i class="fa fa-plus"></i> Chọn Ổ DVD</span>
                        <div id="js-selected-item-1048"></div>
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
</main>

@endsection