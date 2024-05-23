<table id="dataLogs" class="display table" width="100%">
    <thead class="table-dark">
        <th>No</th>
        <th>Nama</th>
        <th>Role</th>
        <th>NIM</th>
        <th>Gedung</th>
        <th>Kamar</th>
        <th>Waktu Tap</th>
    </thead>

    <tbody>
        <?php $no = 1 ?>
        @foreach ($dataLogs as $dL)
        <tr>
            <td> {{ $no }} </td>
            <td> {{ $dL->users->nama_lengkap }}</td>
            <td> {{ $dL->users->role }} </td>
            <td> {{ $dL->users->NIM }} </td>
            <td> {{ $dL->users->gedung }} </td>
            <td> {{ $dL->users->kamar }} </td>
            <td> {{ $dL->waktuTap }} </td>
        </tr>
        <?php $no++; ?>
        @endforeach
    </tbody>
</table>
