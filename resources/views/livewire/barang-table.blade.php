<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $i)
                <tr>
                    <td>{{ $i->id_barang }}</td>
                    <td>{{ $i->nama_barang }}</td>
                    <td>{{ $i->jenis_barang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

