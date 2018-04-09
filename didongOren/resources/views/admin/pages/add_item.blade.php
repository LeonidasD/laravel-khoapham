@extends('admin.layout')
@section('title','Thêm sản phẩm')
@section('content')
<div id="content">
    <section class="section-body">
        <div class="row">
            <div class="col-centered col-md-6 col-md-offset-6">
                    <form class="form" action="" method="" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-head style-primary"><header>Thêm sản phẩm</header></div>
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" type="text">
                                    <label for="name">Tên sản phẩm: <label>
                                </div>
                                <div class="form-group">
                                    <select name="brand">
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->name}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="brand">Tên hãng: <label>
                                </div>
                                <div class="form-group">
                                    <select name="type">
                                        @foreach($types as $type)
                                        <option value="{{$type->name}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="type">Tên loại: <label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="summary" name="summary" type="text">
                                    <label for="summary">Mô tả ngắn: <label>
                                </div>
                                <div class="form-group">
                                    <div class="card-body">
                                        <div class="cke_1 cke cke_reset cke_chrome cke_editor_ckeditor cke_ltr cke_browser_gecko">
                                            <textarea class="form-control" id="specification" name="specification"></textarea>
                                            <label for="specification">Thông số kỹ thuật: <label>
                                        </div>
                                    </div>
                                    <script>
                                        CKEDITOR.replace('specification')
                                    </script>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="qty" name="qty" type="number" min="0" max="99">
                                    <label for="qty">Số lượng: <label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="price" name="price" type="number" min="0">
                                    <label for="price">Giá: <label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="is_promotion" name="is_promotion" type="checkbox">
                                    <label for="is_promotion">Khuyến mãi: <label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="pmt_price" name="pmt_price" type="number">
                                    <label for="pmt_price">Giá khuyến mãi: <label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="pmt_price" name="pmt_price" type="number">
                                    <label for="pmt_price">Thông tin khuyến mãi: <label>
                                </div>
                            </div>
                        </div>   
                    </form>
            </div>    
        </div><!--end .row -->    
    </section>
</div><!--end #content-->
@endsection