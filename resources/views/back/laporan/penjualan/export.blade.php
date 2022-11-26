<table>
    <thead>
        <tr>
            <th>No Faktur</th>
            <th>Item</th>
            <th>Kode</th>
            <th>Tanggal</th>
            <th>Harga</th>
            <th>Banyak</th>
            <th>Disc</th>
            <th>Total</th>
            <th>Pelanggan</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($penjualanBarang as $item)
            <tr>
                <td>{{ $item->no_faktur }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->barang }}</td>
                <td>{{ $item->harga() }}</td>
                <td>{{ $item->banyak }}</td>
                <td>{{ $item->diskon }}</td>
                <td>{{ $item->total }}</td>
                <td>{{ $item->pelanggan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
