

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
            <i>x</i> <input class="count-p" type="number" value="1" min="1" max="50" data="{{ $data->Price }}" data-id="{{ $data->id }}"><i>=</i>
            <span class="sum_price show_price_{{ $data->id }}">{{  str_replace(',' ,'.', number_format($data->Price))  }} </span>
            
            <span class="btn-action_seclect delete_select"><i class="fa fa-trash remove-item" data-id="{{ $dataGroup->id }}" onclick="removeItem({{ $dataGroup->id }})"></i></span>

            <input type="hidden" name="price-hide" id="price_hide_all" value="">
        </div>
    </div>
</div>

<script type="text/javascript">
    
    $('.count-p').change(function () {
        
        let price_get = $(this).attr('data');
        let total_sum = parseInt($(this).val())*price_get;

        const formatter = new Intl.NumberFormat('vi', {
          style: 'currency',
          currency: 'VND',

        });
        
        const id = $(this).attr('data-id');

        $('.show_price_'+id).text(formatter.format(total_sum));

        console.log($('.total-price-config').text());

        // $('')
        // alert($(this).val())
    })
</script>
