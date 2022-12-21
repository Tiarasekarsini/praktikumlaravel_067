<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Data Pegawai</title>
{{-- bootstrap --}}
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
<center><h1 class="my-4">Halaman Data Pegawai</h1></center>
<div class="card mb-3">
{{-- membuat tabel --}}
<table class="table table-striped">
<thead>
<tr>
{{-- <th scope="col">No</th> --}}
<th>Nama</th>
<th>Jabatan</th>
<th>Umur</th>
<th>Alamat</th>
</tr>
</thead>
<tbody>
{{-- melakukan looping data --}}
@foreach ($pegawai as $p)
<tr>
{{-- <td>{{ $loop->iteration }}</td> --}}
<td>{{ $p->pegawai_nama }}</td>
<td>{{ $p->pegawai_jabatan }}</td>
<td>{{ $p->pegawai_umur }}</td>
<td>{{ $p->pegawai_alamat }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
{{-- perhatikan script di bawah ini untuk membuat paginasi dan yang 
berkaitan dengan paginasi --}}
Current Page: {{ $pegawai->currentPage() }}<br>
Jumlah Data: {{ $pegawai->total() }}<br>
Data perhalaman: {{ $pegawai->perPage() }}<br>
<br>
{{ $pegawai->links() }}
</div>
</body>
</html>