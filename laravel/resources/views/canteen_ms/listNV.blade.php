<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quan ly nhan vien</title>
    <link rel="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}"/>
</head>
<body>
<table class="table">
    <thead>
    <th>MaNV</th>
    <th>TenNV</th>
    <th>DiaChi</th>
    <th>SDT</th>
    <th>NamSinh</th>
    </thead>
    <tbody>
    @foreach($nhanviens as $nhanvien)
        <tr>
            <td>{{$nhanvien->MaNV}}</td>
            <td>{{$nhanvien->TenNV}}</td>
            <td>{{$nhanvien->diachi}}</td>
            <td>{{$nhanvien->sdt}}</td>
            <td>{{$nhanvien->namsinh}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $nhanviens->links() !!}
</body>
</html>