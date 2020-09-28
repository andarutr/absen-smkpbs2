<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Absen</th>
        <th>Nama Lengkap</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </tr>
    </thead>
    <tbody>
    {{ $i=1 }}
    @foreach($absensi as $absen)        
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $absen->waktu }}</td>
            <td>{{ $absen->nama }}</td>
            <td>{{ $absen->kelas }}</td>
            <td>{{ $absen->jurusan }}</td>
        </tr>
    {{ $i++ }}
    @endforeach
    </tbody>
</table>
