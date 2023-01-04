<h2>Chào bạn, {{ $data['ten_nguoi_mua'] }}</h2>
Bạn hoặc ai đó đã đặt đơn hàng tại website của công ty chúng tôi. Nội dung cụ thể đơn hàng ở dưới đây
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Hình Ảnh</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Thành Tiền</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gioHang as $key => $value)
        <tr>
            <th>{{ $key + 1 }}</th>
            <td>
                <img src="{{ $value->hinh_anh }}" style="width: 100px; height: 100px">
            </td>
            <td>{{ $value->ten_san_pham }}</td>
            <td>{{ $value->so_luong }}</td>
            <td>{{ $value->don_gia }}</td>
            <td>{{ $value->thanh_tien }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<p>Tình trạng đơn hàng: Chưa thanh toán</p>
<p>Bạn có thể thanh toán qua tài khoản ngân hàng Vietcombank</p>
<p>- Tên Người nhận: Hoàng Anh Vũ</p>
<p>- Số Tài Khoản: 1030209041</p>
<p>- Số Tiền:  {{ $data['tong_tien'] }}</p>
<p>- Nội Dung: {{ $data['ma_hoa_don'] }}</p>

