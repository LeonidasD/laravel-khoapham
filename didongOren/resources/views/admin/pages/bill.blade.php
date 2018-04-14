@extends('admin.layout')
@section('title','Quản lý đơn hàng')
@section('content')
<div id="content">
    <section>
        <div class="section-body">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
            <div class="row">
                <button class="col-md-4 tablinks" onclick="openTab(event, 0)">Chưa xác nhận</button>
                <button class="col-md-4 tablinks" onclick="openTab(event, 1)">Đã xác nhận</button>
                <button class="col-md-4 tablinks" onclick="openTab(event, 2)">Bị huỷ</button>
            </div>
            <div class="row">
                @foreach($bills as $key=> $bill)
                    <table class="table tabcontent" id="table-{{$key}}">
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>    
                                    <th>Sản phẩm</th>   
                                    <th>Đơn giá - Số lượng</th>   
                                    <th>Tổng tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bill as $bill_order)                
                                <tr id="bill-{{$bill_order->id}}">
                                    <td>{{$bill_order->id}}</td>
                                    <td>{{$bill_order->order_date}}</td>
                                    <td>{{$bill_order->Customer->name}}</td>
                                    <td>{{$bill_order->Customer->address}}</td>
                                    <td>{{$bill_order->Customer->phone}}</td>
                                    <td>
                                    @foreach($bill_order->Product as $product)
                                        {{$product->name}} 
                                        <br>
                                        <img src="{{URL::asset('images/product/small/'.$product->image)}}" alt="{{$product->name}}" width="48" height="48"/>
                                        <hr>
                                    @endforeach
                                    </td>
                                    <td>
                                    @foreach($bill_order->BillDetail as $bill_detail)
                                        <br>
                                        <br>
                                        <?= number_format($product->price)?> VNĐ - {{$bill_detail->quantity}}
                                        <br>
                                        <hr>
                                    @endforeach
                                    </td>
                                    <td>
                                        @foreach($bill_order->Product as $product)
                                            <br>
                                            <br>
                                        @endforeach
                                        <?= number_format($bill_order->total) ?> VNĐ
                                    </td>
                                    <td>
                                        @if($key == 0) <a title="Chuyển sang đã xác nhận" class="btn-confirm btn btn-warning" id="btn-confirm-bill" data-toggle="modal" data-id="{{$bill_order->id}}"><span>Chuyển sang đã xác nhận</span></a>
                                            <a title="Xoá sản phẩm" class="btn-delete-item btn btn-danger" id="btn-delete-bill" data-toggle="modal" data-id="{{$bill_order->id}}"><span>Huỷ đơn hàng</span></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                @endforeach
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
            <button type="button" class="btn btn-primary btn-confirm-delete"  data-id="" data-name="">Đồng ý</button>
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
    function openTab(evt, tabNumber) {
        // Declare all variables
        var i, tabcontent, tablinks;
    
        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
    
        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
    
        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById('table-' + tabNumber).style.display = "block";
        evt.currentTarget.className += " active";
    } 

    $('.btn-confirm').click(function(){
        var bill_id = $(this).attr('data-id');
        $.ajax({
            url: "{{route('confirmBill')}}",
            data: {
                id: bill_id
            },
            success: function(data){
                $('#deleteAsk').modal('hide');
                var total = $.trim(data);
                if(total == "success"){
                    var bill_html = document.getElementById('bill-' + bill_id);
                    var remove_button = document.getElementById('btn-confirm-bill');
                    remove_button.parentNode.removeChild(remove_button);
                    var confirmTable = document.getElementById('table-1');
                    confirmTable.innerHTML += bill_html.outerHTML;
                    $('#bill-' + bill_id).hide();
                    //Note, load automatically replaces content. Be sure to include a space before the id selector.
                }
                else {
                    $('.delete_alert').html('Chuyển thất bại ' + bill_id);
                }
            },
            error: function(error){
                alert(error.responseText);
            }
        })
    });


    $('.btn-delete-item').click(function(){
        var bill_id = $(this).attr('data-id');
        $('.delete_question').html('Bạn có chắc chắn muốn huỷ đơn hàng ' + bill_id + '?');
        $('.btn-confirm-delete').attr('data-id',bill_id);
        $('#deleteAsk').modal('show');
    });

    $('.btn-confirm-delete').click(function(){
        var bill_id = $(this).attr('data-id');
        $.ajax({
            url: "{{route('cancelBill')}}",
            data: {
                id: bill_id
            },
            type: "GET",
            success: function(data){
                $('#deleteAsk').modal('hide');
                var total = $.trim(data);
                if(total == "success"){
                    $('.delete_alert').html('Huỷ thành công ' + bill_id);
                    var bill_html = document.getElementById('bill-' + bill_id);
                    var remove_button = document.getElementById('btn-confirm-bill');
                    remove_button.parentNode.removeChild(remove_button);
                    remove_button = document.getElementById('btn-delete-bill');
                    remove_button.parentNode.removeChild(remove_button);
                    var cancelTable = document.getElementById('table-2');
                    cancelTable.innerHTML += bill_html.outerHTML;
                    $('#bill-' + bill_id).hide();
                    //Note, load automatically replaces content. Be sure to include a space before the id selector.
                }
                else {
                    $('.delete_alert').html('Xoá thất bại ' + bill_id);
                }
            },
            error: function(error){
                alert(error.responseText);
            }
        })
    });
</script>
@endsection