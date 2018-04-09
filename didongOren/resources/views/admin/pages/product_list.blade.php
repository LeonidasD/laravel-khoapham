@extends('admin.layout')
@section('title','Quản lý sản phẩm')
@section('content')
<div id="content">
    <section>
        <div class="section-body">
            <a href="{{route('addItem')}}"><button class="btn btn-success">Thêm sản phẩm</button></a>
            <div class="row">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Tên hãng</th>
                                    <th>Tên loại</th>
                                    <th>Mô tả ngắn</th>    
                                    <th width="12%">Thông số kỹ thuật</th>
                                    <th width="9%">Giá</th>
                                    <th>Khuyến mãi</th>
                                    <th>Chi tiết khuyến mãi</th>
                                    <th>Số lượng</th>
                                    <th>Số lượt mua</th>
                                    <th>Ẩn/Hiện</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>                 
                                @foreach($product_list as $product)
                                    <tr id="product-{{$product->id}}">
                                        <td>{{$product->id}}</td>
                                        <td><img class="first_image" src="{{URL::asset('images/product/small/'.$product->image)}}" alt="{{$product->name}}" width="120" height="120"/> </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->ProductBrand->name}}</td>
                                        <td>{{$product->ProductType->name}}</td>
                                        <td>{{$product->summary}}</td>
                                        <td>
											<div>
												@foreach($product->specification as $specs)
													{{$specs}}</br>
												@endforeach
                                            </div>
                                        </td>
                                        <td><?= number_format($product->price)?> VNĐ</td>

                                        @if($product->is_promotion == 1)
                                            <td>Có</td>
                                            <td>{{$product->promotion_description}}</td>
                                        @else
                                            <td>Không</td>
                                            <td>Không</td>
                                        @endif
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->buying_count}}</td>
                                        <td><input type="checkbox" value="1" {{($product->on_sale == 1) ? 'checked' : ''}}></td>
                                        <td width="12%"><a title="Sửa sản phẩm" class="btn-edit-item btn btn-warning" id="btn-edit-cart" data-toggle="modal" data-id="{{$product->id}}" data-name="{{$product->name}}"><span>Sửa</span></a>
                                            <a title="Xoá sản phẩm" class="btn-delete-item btn btn-danger" id="btn-delete-cart" data-toggle="modal" data-id="{{$product->id}}" data-name="{{$product->name}}"><span>Xoá</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
            </div><!--end .row -->
        </div><!--end .section-body -->
    </section>
</div><!--end #content-->
@endsection

@section('modal')
<div class="modal fade" id="deleteAsk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Thông báo</h4>
            </div>
            <div class="modal-body">
                <span class="delete_question"></span>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-confirm-delete"  data-id="{{$product->id}}" data-name="{{$product->name}}">Đồng ý</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Thông báo</h4>
            </div>
            <div class="modal-body">
                <span class="delete_alert"></span>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đồng ý</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('.btn-delete-item').click(function(){
        var product_id = $(this).attr('data-id');
        var product_name = $(this).attr('data-name');
        $('.delete_question').html('Bạn có chắc chắn muốn xoá ' + product_id + '. ' + product_name + '?');
        $('.btn-confirm-delete').attr('data-id',product_id);
        $('.btn-confirm-delete').attr('data-name',product_name);
        $('#deleteAsk').modal('show');
    });

    $('.btn-confirm-delete').click(function(){
        var product_id = $(this).attr('data-id');
        var product_name = $(this).attr('data-name');
        $.ajax({
            url: "{{route('deleteItem')}}",
            data: {
                id: product_id
            },
            type: "GET",
            success: function(data){
                $('#deleteAsk').modal('hide');
                var total = $.trim(data);
                if(total == "success"){
                    $('.delete_alert').html('Xoá thành công ' + product_id + ' ' + product_name);
                    $('#product-' + product_id).hide();
                    //Note, load automatically replaces content. Be sure to include a space before the id selector.
                }
                else {
                    $('.delete_alert').html('Xoá thất bại ' + product_id + ' ' + product_name);
                }
            },
            error: function(error){
                alert(error.responseText);
            }
        })
    });
</script>
@endsection