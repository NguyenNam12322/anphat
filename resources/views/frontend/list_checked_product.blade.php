<div class="list-product-select">
            
    @if($product->count()>0)

    @foreach($product as $value)
    <div class="p-item">
        <a href="{{ route('details', $value->Link) }}" class="p-img" target="_blank">
        <img src="{{ asset($value->Image) }}">
        </a>
        <div class="info">
            <a href="{{ route('details', $value->Link) }}" class="p-name" target="_blank">
                {{ $value->Name }}</a>
            <table>
                <tbody>
                    <tr>
                        <td width="80"><b>Mã SP:</b></td>
                        <td>{{ $value->ProductSku }}</td>
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
            <span class="p-price">{{  str_replace(',' ,'.', number_format($value->Price))  }}</span>
        </div>
        <span class="btn-buy js-select-product" onclick="addPd({{ $id }}, {{ $value->id }})">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
    </div>

    @endforeach
    @endif
</div>