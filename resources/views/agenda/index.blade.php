<table class="table mt-3">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach($agendas as $agenda)
            <tr>
                <td>{{ $agenda->judul }}</td>
                <td>{{ $agenda->deskripsi }}</td>
                <td>{{ $agenda->kategori->judul ?? 'Tidak ada kategori' }}</td> <!-- Periksa relasi -->
            </tr>
        @endforeach
    </tbody>
</table>
