

<div class="drive-checked">
    <span class="show-popup_select span-last open-selection" id="js-category-info-1025"><i class="fa fa-plus"></i> Chọn {{ $dataGroup->name }}</span>
    <div id="js-selected-item-1025">
        <div class="contain-item-drive" data-category_id="1025" data-product_id="44336">
            <a target="_blank" href="{{ $data->Link }}" class="d-img"><img src="{{ asset($data->Image) }}"></a>
            <span class="d-name">
            <a target="_blank" href="/cpu-intel-core-i5-13500-24m-cache-up-to-4.80ghz-14c20t-socket-1700.html">{{ $data->Name }}  </a> <br>
            Mã sản phẩm: {{ $data->ProductSku }} <br>
            Bảo hành: 36 tháng <br>
            Kho hàng: Còn hàng
            </span>
            <span class="d-price">{{  str_replace(',' ,'.', number_format($data->Price))  }} </span>
            <i>x</i> <span class="d-price">1</span><i>=</i>
            <span class="sum_price">{{  str_replace(',' ,'.', number_format($data->Price))  }} </span>
            <span class="btn-action_seclect show-popup_select"><i class="fa fa-edit edit-item"></i></span>
            <span class="btn-action_seclect delete_select"><i class="fa fa-trash remove-item"></i></span>
        </div>
    </div>
</div>