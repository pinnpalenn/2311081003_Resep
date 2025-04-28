@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Resep yang Dihapus</h3>
        <a href="{{ route('resep.index') }}" class="btn btn-primary">Kembali ke Daftar Resep</a>
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
                            <th>Waktu Memasak</th>
                            <th>Penulis</th>
                            <th>Tingkat Kesulitan</th>
                            <th>Dihapus Pada</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reseps as $index => $resep)
                            <tr>
                                <td>{{ $index + $reseps->firstItem() }}</td>
                                <td>{{ $resep->judul_resep }}</td>
                                <td>{{ $resep->kategori }}</td>
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
                                <td>{{ $resep->deleted_at->format('d M Y H:i') }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('resep.restore', $resep->id) }}" class="btn btn-success btn-sm me-1">Pulihkan</a>
                                    <form action="{{ route('resep.force-delete', $resep->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus permanen resep ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus Permanen</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                {{ $reseps->links() }}
            </div>
        @else
            <div class="alert alert-info">
                Tidak ada resep yang dihapus. <a href="{{ route('resep.index') }}">Kembali ke daftar resep</a>.
            </div>
        @endif
    </div>
</div>
@endsection
