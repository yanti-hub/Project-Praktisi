<!DOCTYPE html>
<html>
<head>
    <title>Halaman Produk</title>
</head>
<body>
    <table border=1>
        <th>nama</th><th>harga</th>
        @foreach ( $barang as $b )
            <tr><td>{{$b->nama}}</td><td>{{$b->harga_jual}}</td></tr>
        @endforeach
    </table>
</body>
</html>