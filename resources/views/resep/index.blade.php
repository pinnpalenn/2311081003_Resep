@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Daftar Resep Masakan</h3>
        <a href="{{ route('resep.create') }}" class="btn btn-primary">Tambah Resep</a>
    </div>
    <div class="card-body">
        @if($reseps->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Judul Resep</th>
                            <th>Kategori</th>
                            <th>Bahan (Ringkas)</th>
                            <th>Waktu Memasak</th>
                            <th>Penulis</th>
                            <th>Tingkat Kesulitan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reseps as $index => $resep)
                            <tr>
                                <td>{{ $index + $reseps->firstItem() }}</td>
                                <td>{{ $resep->judul_resep }}</td>
                                <td>{{ $resep->kategori }}</td>
                                <td>{{ Str::limit($resep->bahan, 50) }}</td>
                                <td>{{ $resep->waktu_memasak }} menit</td>
                                <td>{{ $resep->penulis }}</td>
                                <td>
                                    @if($resep->tingkat_kesulitan == 'Mudah')
                                        <span class="badge bg-success">Mudah</span>
                                    @elseif($resep->tingkat_kesulitan == 'Sedang')
                                        <span class="badge bg-warning">Sedang</span>
                                    @else
                                        <span class="badge bg-danger">Sulit</span>
                                    @endif
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('resep.edit', $resep->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                                    <form action="{{ route('resep.destroy', $resep->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus resep ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>            </div>
            <div class="d-flex justify-content-end">
                {{ $reseps->links() }}
            </div>
        @else
            <div class="alert alert-info">
                Belum ada resep yang ditambahkan. <a href="{{ route('resep.create') }}">Tambahkan resep sekarang</a>.
            </div>
        @endif
    </div>
</div>
@endsection
