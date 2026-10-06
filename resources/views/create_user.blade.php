@extends('layouts.app')

@section('content')

<div class="container">
    <div class="form-card">

        <div class="form-header">
            <h1>Buat Pengguna Baru</h1>
            <p>Silakan isi data pengguna dengan lengkap.</p>
        </div>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">
                    Nama
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    class="form-control"
                    placeholder="Masukkan nama lengkap"
                    required>
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">
                    NPM
                </label>

                <input
                    type="text"
                    id="nim"
                    name="nim"
                    class="form-control"
                    placeholder="Masukkan NPM"
                    required>
            </div>

            <div class="mb-4">
                <label for="kelas_id" class="form-label">
                    Kelas
                </label>

                <select
                    name="kelas_id"
                    id="kelas_id"
                    class="form-select"
                    required>

                    <option value="">Pilih kelas</option>

                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Simpan Pengguna
            </button>

        </form>

    </div>
</div>

@endsection