@extends('utama')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Jual</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listBarang as $barang)
                    <tr>
                        <td>{{$barang->kodebarang}}</td>
                        <td>{{$barang->namabarang}}</td>
                        <td>{{$barang->jenisbarang}}</td>
                        <td>{{$barang->jumlah}}</td>
                        <td>{{$barang->hargajual}}</td>
                        <td>
                            <a href="/edit/{{$barang->id}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
