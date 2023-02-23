

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
            
            <span class="btn-action_seclect delete_select"><i class="fa fa-trash remove-item" data-id="{{ $dataGroup->id }}"></i></span>
        </div>
    </div>
</div>
<script type="text/javascript">
    
     $('.remove-item').click(function () {
        id = $(this).attr('data-id');
        price = parseInt($('#box'+id+' .d-price').text().replaceAll('.',''));

        totalprice =   parseInt($('.total-price-config').text().replace('&nbsp₫', '').replaceAll('.',''));

        console.log(totalprice);


        totalprice = totalprice - price;


        const formatter = new Intl.NumberFormat('vi', {
          style: 'currency',
          currency: 'VND',

        });
        $('.total-price-config').text(formatter.format(totalprice));

        const data_ar = [];

        data_ar[3] ='Chọn Bộ vi xử lý';
        data_ar[4] ='Chọn Bo mạch chủ';
        data_ar[5] ='Chọn Ram';
        data_ar[6] ='Chọn SSD';
        data_ar[7] ='Chọn VGA';
        data_ar[8] ='Chọn Nguồn';
        data_ar[9] ='Chọn Vỏ case';
        

       
        $('#box'+id+ ' .drive-checked').html('<span class="show-popup_select span-last open-selection" id="js-category-info-1024" data-id="'+id+'" onclick="runs('+id+')"><i class="fa fa-plus"></i> '+data_ar[id]+'</span>');

        
    });

    function runs(id) {
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
     } 


</script>