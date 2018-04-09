
<div><strong>Họ và tên:</strong> {{$customer->name}}</div>
<div><strong>Địa chỉ giao hàng:</strong> {{$customer->address}}</div>
<div><strong>Số điện thoại:</strong> {{$customer->phone}}</div>
<div><strong>Email:</strong> {{$customer->email}}</div>
<div><strong>Đơn hàng của bạn:</strong></div>
    <ul>
    @foreach(Session::get('cart') as $id => $info)
        <li>
            <div><strong>Tên sản phẩm:</strong> {{$info['product']->name}}</div>
            <div><strong>Giá:</strong> <?= number_format($info['product']->price)?> VNĐ</div>
            <div><strong>Số lượng:</strong> {{$info['quantity']}} </div>
            <div><strong>Tổng cộng:</strong> <?= number_format($info['product']->price*$info['quantity']) ?> VNĐ</div>
        </li>
        <hr>
    @endforeach
    <ul>
@if(isset($note))
<div><strong>Ghi chú đơn hàng:</strong> {{$email}}</div>
@endif