@extends('layouts.app')

@section('content')
    {{-- content start --}}
    <div class="container-sm mt-5">
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl border">
                    <div class="mb-3 ">
                        <div class="icon-heading">
                            <i class="bi bi-box-fill fs-1"></i>
                            <h4 class="heading-text">Input Barang</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text"
                                name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}"
                                placeholder="Masukkan Kode Barang">
                            @error('kode_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text"
                                name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}"
                                placeholder="Masukkan Nama Barang">
                            @error('nama_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('harga_barang') is-invalid @enderror" type="text"
                                name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}" placeholder="Rp.">
                            @error('harga_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control @error('deskripsi_barang') is-invalid @enderror" type="text"
                                name="deskripsi_barang" id="deskripsi_barang" value="{{ old('deskripsi_barang') }}"
                                placeholder="Masukkan Deskripsi Barang">
                            @error('deskripsi_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-mb-3">
                            <label for="satuan_id" class="form-label">Satuan Barang</label>
                            <select name="satuan_id" id="satuan_id" class="form-select">
                                @foreach ($satuans as $satuan)
                                    <option
                                        value="{{ $satuan->id }}"{{ old('satuan_id') == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->nama }}</option>
                                @endforeach
                            </select>
                            @error('satuan_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    {{-- actions --}}
                    @extends('item.actions2')
                    {{-- actions end --}}
                </div>
            </div>
        </form>
    </div>
    {{-- content end --}}
@endsection
