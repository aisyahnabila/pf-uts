@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Welcome To {{ $pageTitle }} Master Barang</h4>
        </div>
    </div>
    {{-- Content Biodata --}}
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ Vite::asset('resources/images/pas_foto.jpeg') }}" alt="photo_profile"
                                class="img img-thumbnail rounded-circle w-50">
                            <h4 class="card-text text-body" alt="nama">{{ $name }}</h4>
                            <p class="card-text text-muted" alt="prodi">{{ $prodi }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="shadow border rounded p-3 mb-3">
                        <h3>Biodata Mahasiswa</h3>
                        <hr>
                        <p class="card-text">
                            <span><i class="bi bi-123"></i> NIM :</span>
                            {{ $nim }}
                        </p>
                        <hr>
                        <p class="card-text">
                            <span><i class="bi bi-calendar-date"></i> Lahir :</span>
                            {{ $birth }}
                        </p>
                        <hr>
                        <p class="card-text">
                            <span><i class="bi bi-map"></i> Alamat :</span>
                            {{ $address }}
                        </p>
                        <hr>
                        <p class="card-text">
                            <span><i class="bi bi-whatsapp"></i> Telepon :</span>
                            {{ $phone }}
                        </p>
                        <hr>
                        <p class="card-text">
                            <span><i class="bi bi-mailbox"></i> Email :</span>
                            {{ $email }}
                        </p>
                        <hr>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
