@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('items.update', $barangs->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl border">
                    <div class="mb-3">
                        <div class="icon-heading">
                            <i class="bi-person-circle fs-1"></i>
                            <h4 class="heading-text">Edit Data Barang</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text"
                                name="kode_barang" id="kode_barang" value="{{ $barangs->kode_barang }}"
                                placeholder="Masukkan Kode Barang">
                            @error('kode_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text"
                                name="nama_barang" id="nama_barang" value="{{ $barangs->nama_barang }}"
                                placeholder="Masukkan Nama Barang">
                            @error('nama_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('harga_barang') is-invalid @enderror" type="text"
                                name="harga_barang" id="harga_barang" value="{{ $barangs->harga_barang }}"
                                placeholder="Masukkan Harga">
                            @error('harga_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control @error('deskripsi_barang') is-invalid @enderror" type="text"
                                name="deskripsi_barang" id="deskripsi_barang" value="{{ $barangs->deskripsi_barang }}"
                                placeholder="Masukkan Deskripsi">
                            @error('deskripsi_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- ini belum dipikir --}}
                        <div class="col-mb-3">
                            <label for="satuan_id" class="form-label">Satuan Barang</label>
                            <select name="satuan_id" id="satuan_id" class="form-select">
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}"
                                        {{ old('', $barangs->satuan_id) == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('satuan_id')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    @extends('item.actions2')
                </div>
            </div>
        </form>
    </div>
@endsection
