<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quan ly san pham</title>
    <link rel="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}"/>
</head>
<body>
<table class="table">
    <thead>
    <th>TenSp</th>
    <th>GiaBan</th>
    <th>SoLuong</th>
    <th>Anh</th>
    <th>GhiChu</th>
    </thead>
    <tbody>
    @foreach($sanphams as $sanpham)
        <tr>
            <td>{{$sanpham->TenSp}}</td>
            <td>{{$sanpham->GiaBan}}</td>
            <td>{{$sanpham->SoLuong}}</td>
            <td>{{$sanpham->Anh}}</td>
            <td>{{$sanpham->GhiChu}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $sanphams->links() !!}
</body>
</html>