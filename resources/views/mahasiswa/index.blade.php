<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Semester</th>
        </tr>

        @foreach ($mahasiswas as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->email }}</td>
            <td>{{ $m->prodi }}</td>
            <td>{{ $m->semester }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>