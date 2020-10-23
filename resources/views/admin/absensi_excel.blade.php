<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Absen</th>   
        <th>Nama Lengkap</th>    
        <th>Kelas</th>   
        <th>Jurusan</th> 
        <th>Mata Pelajaran</th>  
        <th>Guru</th>
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
            <td>{{ str_replace('-', ' ', $absen->jurusan) }}</td>
            <td>{{ str_replace('-', ' ', $absen->mata_pelajaran) }}</td>
            <td>{{ $absen->guru }}</td>
        </tr>
    {{ $i++ }}
    @endforeach
    </tbody>
</table>