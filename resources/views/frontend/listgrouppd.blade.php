<div class="modal-body">
    <div class="popup-main_filter w-40 float_l">
        <h4>Lọc sản phẩm theo</h4>
        <div class="list-filter">

            <?php 
                $data = $filter_product = DB::table('filters')->select('value','id')->where('group_product_id', $id)->get()->toArray();

                dd($data);

                $ar =[];

                if(isset($data) && count($data)>0 ){

                    foreach ($data as $key => $val) {

                        // if(!empty($val->id)){
                        //     $ar[$val->id] = json_decode($val->value, true)[$val->id]??'';
                            
                        // }

                        echo $val->id;

                       
                    }

                }

               

            ?>
            
            @if(isset($filter) && $filter->count()>0)
            @foreach($filter as $value)
            <div class="gr-filter brand">
                <!----> 
                <h5 class="title-filter">
                    {{  $value->name }}
                </h5>
                <ul>

                    <?php 
                        $property = App\Models\property::where('filterId', $value->id)->get();
                         
                    ?>   

                    @if(!empty($property) && $property->count()>0)
                    @foreach($property as $val)

                    <li> 
                        <input type="checkbox" id="checked_box_{{ $val->id }}" onclick="checked_box({{ $val->id }})"> 
                        <a href="javascript:void(0)" onclick="objBuildPCVisual.showProductFilter('https://www.anphatpc.com.vn/ajax/get_json.php?action=pcbuilder&amp;action_type=get-product-category&amp;category_id=1030&amp;brand=6')">
                            <span class="value-filter">{{ $val->name }}</span>
                        </a> 
                    </li>
                    @endforeach
                    @endif
                   
                </ul>
            </div>

            @endforeach
            @endif
        </div>
        <!--list-filter--> 
    </div>
    <div class="popup-main_content w-60 float_r">
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
    </div>
</div>