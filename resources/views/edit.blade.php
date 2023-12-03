@extends('utama')

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="/processEdit/{{$barang->id}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kodebarang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="kodebarang" name="kodebarang" value="{{ $barang->kodebarang}}">
            </div>
            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="namabarang" name="namabarang" value="{{ $barang->namabarang}}">
            </div>
            <div class="mb-3">
                <label for="jenisbarang" class="form-label">Jenis Barang</label>
                <input type="text" class="form-control" id="jenisbarang" name="jenisbarang" value="{{ $barang->jenisbarang }}">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $barang->jumlah}}">
            </div>
            <div class="mb-3">
                <label for="hargajual" class="form-label">Harga Jual</label>
                <input type="number" class="form-control" id="hargajual" name="hargajual" value="{{ $barang->hargajual }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
