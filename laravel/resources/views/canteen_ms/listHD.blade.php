<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quan ly hoa don</title>
    <link rel="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}"/>
</head>
<body>
<table class="table">
    <thead>
    <th>MaNV</th>
    <th>NgayBan</th>
    <th>TongTien</th>
    </thead>
    <tbody>
    @foreach($hoadons as $hoadon)
        <tr>
            <td>{{$hoadon->MaNV}}</td>
            <td>{{$hoadon->NgayBan}}</td>
            <td>{{$hoadon->TongTien}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $hoadons->links() !!}
</body>
</html>