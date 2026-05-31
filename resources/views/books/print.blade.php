<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Buku</h1>
    <table>
        <thead>
            <th>NO</th>
            <th>JUDUL</th>
            <th>PENULIS</th>
            <th>TAHUN</th>
            <th>PENERBIT</th>
            <th>COVER</th>
        </thead>
        <tbody>
            @php
            $no=1;
            @endphp
            @foreach ($books as $book)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->publisher }}</td>
                <td><img src="{{ public_path('storage/cover_buku/'.$book->cover) }}" alt="Buku Tidak ada" width="80px"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>