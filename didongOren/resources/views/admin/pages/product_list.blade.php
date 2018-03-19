@extends('admin.layout')
@section('title','Trang quản trị')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h5 class="txt-dark">Data table</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#"><span>table</span></a></li>
                <li class="active"><span>data-table</span></li>
              </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">data Table</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <div id="datable_1_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="datable_1_length"><label>Show <select name="datable_1_length" aria-controls="datable_1" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="datable_1_filter" class="dataTables_filter"><label>Search:<input class="" placeholder="" aria-controls="datable_1" type="search"></label></div><table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 186px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Stt</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 294px;" aria-label="Position: activate to sort column ascending">Tên sản phẩm</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 119px;" aria-label="Start date: activate to sort column ascending">Hình ảnh</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 147px;" aria-label="Office: activate to sort column ascending">Hãng</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 50px;" aria-label="Age: activate to sort column ascending">Loại</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 119px;" aria-label="Start date: activate to sort column ascending">Thông tin kỹ thuật</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 119px;" aria-label="Start date: activate to sort column ascending">Số lượng</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 119px;" aria-label="Start date: activate to sort column ascending">Khuyến mãi</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 119px;" aria-label="Start date: activate to sort column ascending">Thông tin khuyến mãi</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 119px;" aria-label="Salary: activate to sort column ascending">Ẩn / Hiện</th>
                                                <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="2" style="width: 119px;" aria-label="Salary: activate to sort column ascending">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                        </tfoot>
                                        <tbody>   
                                            @foreach($product_list as $product)
                                            <tr role="row" class="odd">
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->name}}</td>
                                                <td><img style="width:100px" src="{{URL::asset('images/product/larg/demo7.jpg')}}"/></td>
                                                <td>{{$product->ProductBrand->name}}</td>
                                                <td>{{$product->ProductType->name}}</td>
                                                <td>{{$product->specification}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->promotion}}</td>
                                                <td>{{$product->promotion_description}}</td>
                                                <td>{{$product->on_sale}}</td>
                                                <td><button class="btn btn-warning edit-btn" id="editItem" data-toggle="modal" data-id="{{$product->id}}" data-name="{{$product->name}}">Sửa</button></td>
                                                <td><button class="btn btn-danger delete-btn" id="deleteAsk" data-toggle="modal" data-id="{{$product->id}}" data-name="{{$product->name}}">Xoá</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$product_list->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer container-fluid pl-30 pr-30">
        <div class="row">
            <div class="col-sm-12">
                <p>2018 &copy; Droopy. Pampered by Hencework</p>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    
</div>
@endsection
@section('modal')
    <script>
    $('.delete-btn').click(function(){
        var product_id = $(this).attr('data-id');
        var product_name = $(this).attr('data-name');
        $('.delete_question').html('Bạn có chắc chắn muốn xoá sản phẩm ' + product_name + '?');
        $('.btn-confirm-delete').attr('data-id',product_id);
        $('.btn-confirm-delete').attr('data-name',product_name);
        $('#deleteAsk').modal('show');
        
    })
    $('#deleteItem').click(function(){
        var product_id = $(this).attr('data-id');
        var product_name = $(this).attr('data-name');
        var product_type = $(this).attr('data-type');
        $.ajax({
            url: "{{route('deleteItem')}}",
            type: GET,
            data: {
                id: product_id,
                type: product_type
            },
            success: {
                
            }
        })
    })
    </script>
@endsection
