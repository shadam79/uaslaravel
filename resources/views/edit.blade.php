@extends('utama')

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="/processEdit/{{$barang->id}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nobarang" class="form-label">No Barang</label>
                <input type="text" class="form-control" id="nobarang" name="nobarang" value="{{$barang->nobarang}}">
            </div>
            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="namabarang" name="namabarang" value="{{$barang->namabarang}}">
            </div>
            <div class="mb-3">
                <label for="varianbarang" class="form-label">Varian Barang</label>
                <input type="text" class="form-control" id="varianbarang" name="varianbarang" value="{{$barang->varianbarang}}">
            </div>
            <div class="mb-3">
                <label for="tanggalkadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                <input type="date" class="form-control" id="tanggalkadaluarsa" name="tanggalkadaluarsa" value="{{$barang->tanggalkadaluarsa}}">
            </div>
            <div class="mb-3">
                <label for="tanggalproduksi" class="form-label">Tanggal Produksi</label>
                <input type="date" class="form-control" id="tanggalproduksi" name="tanggalproduksi" value="{{$barang->tanggalproduksi}}">
            </div>
            <div class="mb-3">
                <label for="hargabeli" class="form-label">Harga Beli</label>
                <input type="text" class="form-control" id="hargabeli" name="hargabeli" value="{{$barang->hargabeli}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
