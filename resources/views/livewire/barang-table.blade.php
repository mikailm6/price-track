<div>
    <div class="mb-3">
        <input type="search" class="form-control" wire:model.live="search" placeholder="Find Items">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $index => $i)
                <tr>
                    <td>{{ $barangs->firstItem() + $index }}</td>
                    <td>{{ $i->nama_barang }}</td>
                    <td>{{ $i->jenis_barang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $barangs->links() }}
</div>

