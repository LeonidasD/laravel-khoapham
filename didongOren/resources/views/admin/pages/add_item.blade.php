@extends('admin.layout')
@section('title','Thêm sản phẩm')
@section('content')
<div id="content">
    <section class="section-body">
        <div class="row">
            <div class="col-centered col-md-6 col-md-offset-6">
                    <form class="form" action="{{route('postAddItem')}}" method="POST" enctype="multipart/form-data">
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
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="brand">Tên hãng: <label>
                                </div>
                                <div class="form-group">
                                    <select name="type">
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
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
                                    <input class="form-control" id="qty" name="qty" type="number" min="0" ">
                                    <label for="qty">Số lượng: <label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="price" name="price" type="number" min="0" ">
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
                                    <div class="card-body">
                                        <div class="cke_1 cke cke_reset cke_chrome cke_editor_ckeditor cke_ltr cke_browser_gecko">
                                            <textarea class="form-control" id="pmt_desc" name="pmt_desc"></textarea>
                                            <label for="pmt_desc">Thông số kỹ thuật: <label>
                                        </div>
                                    </div>
                                    <script>
                                        CKEDITOR.replace('pmt_desc')
                                    </script>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="image" name="image" type="file">
                                    <label for="image">Hình ảnh sản phẩm: <label>
                                </div>
                                <div class="form-group">
                                    <img id="img-show" width="120" height="120">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-success">Thêm sản phẩm</button>
                                </div>
                            </div>
                        </div>   
                    </form>
            </div>    
        </div><!--end .row -->    
    </section>
</div><!--end #content-->
@endsection
@section('image')
<script>
    function readURL(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function(e){
                $("#img-show").attr("src",e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function(){
        readURL(this);
    });
</script>
@endsection