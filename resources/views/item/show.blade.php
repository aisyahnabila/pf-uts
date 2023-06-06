@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl border">
                <div class="mb-3">
                    <div class="icon-heading">
                        <i class="bi bi-box-fill fs-1"></i>
                        <h4 class="heading-text">Detail Barang</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-mb-3">
                        <label for="kodeBarang" class="form-label">Kode Barang</label>
                        <h5>{{ $barangs->kode_barang }}</h5>
                    </div>
                    <div class="col-mb-3">
                        <label for="namaBarang" class="form-label">Nama Barang</label>
                        <h5>{{ $barangs->nama_barang }}</h5>
                    </div>
                    <div class="col-mb-3">
                        <label for="hargaBarang" class="form-label">Harga Barang</label>
                        <h5>Rp.{{ $barangs->harga_barang }}</h5>
                    </div>
                    <div class="col-mb-3">
                        <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $barangs->deskripsi_barang }}</h5>
                    </div>
                    <div class="col-mb-3">
                        <label for="satuanBarang" class="form-label">Satuan Barang</label>
                        <h5>{{ $barangs->satuan->nama }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-end">
                    <div class="col-md-2 d-grid">
                        <a href="{{ route('items.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- content end --}}
@endsection
