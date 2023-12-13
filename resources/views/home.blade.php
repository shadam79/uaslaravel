@extends('utama')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No Barang</th>
                        <th>Nama Barang</th>
                        <th>Varian Barang</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>Tanggal Produksi</th>
                        <th>Harga Beli</th>
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($listBarang as $barang)
                    <tr>
                        <td>{{$barang->nobarang}}</td>
                        <td>{{$barang->namabarang}}</td>
                        <td>{{$barang->varianbarang}}</td>
                        <td>{{$barang->tanggalkadaluarsa}}</td>
                        <td>{{$barang->tanggalproduksi}}</td>
                        <td>{{$barang->hargabeli}}</td>
                        <td>
                            <a href="/edit/{{$barang->id}}">Edit</a>
                            |
                            <a href="/hapus/{{$barang->id}}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
