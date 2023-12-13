@extends('utama')

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action ="/processForm" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nobarang" class="form-label">No Barang</label>
                <input type="text" class="form-control" id="nobarang" name="nobarang">
            </div>
            <div>
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="namabarang" name="namabarang">
            </div>
            <div>
                <label for="varianbarang" class="form-label">Varian Barang</label>
                <input type="text" class="form-control" id="varianbarang" name="varianbarang">
            </div>
            <div> 
                <label for="tanggalkadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                <input type="date" class="form-control" id="tanggalkadaluarsa" name="tanggalkadaluarsa">
            </div>
            <div> 
                <label for="tanggalproduksi" class="form-label">Tanggal Produksi</label>
                <input type="date" class="form-control" id="tanggalproduksi" name="tanggalproduksi">
            </div>
            <div>
                <label for="hargabeli" class="form-label">Harga Beli</label>
                <input type="text" class="form-control" id="hargabeli" name="hargabeli">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
