@extends('layouts.app')

@section('content')

<div class="container">
    <div class="list-card">

        <div class="list-header">
            <div>
                <h1>Daftar Pengguna</h1>
                <p>Data pengguna yang telah terdaftar.</p>
            </div>

            <a href="{{ url('/user/create') }}" class="btn btn-primary">
                + Tambah Pengguna
            </a>
        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($users as $user)

                        <tr>
                            <td>
                                <span class="id-badge">
                                    {{ $user->id }}
                                </span>
                            </td>

                            <td>
                                {{ $user->nama }}
                            </td>

                            <td>
                                {{ $user->nim }}
                            </td>

                            <td>
                                <span class="class-badge">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
</div>

@endsection