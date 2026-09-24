<!DOCTYPE html>
<html>
<head>
    <title>Data Akademik</title>
</head>
<body>

    <h1>DATA AKADEMIK</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen</th>
        </tr>

        @foreach ($matakuliahs as $mk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td>{{ $mk->semester }}</td>
            <td>{{ $mk->dosen->name ?? '-' }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>