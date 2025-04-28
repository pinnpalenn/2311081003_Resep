@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tambah Resep Baru</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('resep.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul_resep" class="form-label">Judul Resep</label>
                <input type="text" class="form-control @error('judul_resep') is-invalid @enderror" id="judul_resep" name="judul_resep" value="{{ old('judul_resep') }}" required>
                @error('judul_resep')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required>
                    <option value="" selected disabled>Pilih Kategori</option>
                    <option value="Makanan Utama" {{ old('kategori') == 'Makanan Utama' ? 'selected' : '' }}>Makanan Utama</option>
                    <option value="Dessert" {{ old('kategori') == 'Dessert' ? 'selected' : '' }}>Dessert</option>
                    <option value="Sarapan" {{ old('kategori') == 'Sarapan' ? 'selected' : '' }}>Sarapan</option>
                    <option value="Makanan Ringan" {{ old('kategori') == 'Makanan Ringan' ? 'selected' : '' }}>Makanan Ringan</option>
                    <option value="Minuman" {{ old('kategori') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                </select>
                @error('kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="bahan" class="form-label">Bahan-bahan</label>
                <textarea class="form-control @error('bahan') is-invalid @enderror" id="bahan" name="bahan" rows="5" required>{{ old('bahan') }}</textarea>
                <small class="text-muted">Pisahkan setiap bahan dengan baris baru</small>
                @error('bahan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="langkah_pembuatan" class="form-label">Langkah Pembuatan</label>
                <textarea class="form-control @error('langkah_pembuatan') is-invalid @enderror" id="langkah_pembuatan" name="langkah_pembuatan" rows="8" required>{{ old('langkah_pembuatan') }}</textarea>
                <small class="text-muted">Jelaskan langkah-langkah pembuatan secara detail</small>
                @error('langkah_pembuatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="waktu_memasak" class="form-label">Waktu Memasak (menit)</label>
                <input type="number" class="form-control @error('waktu_memasak') is-invalid @enderror" id="waktu_memasak" name="waktu_memasak" value="{{ old('waktu_memasak') }}" min="1" required>
                @error('waktu_memasak')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis Resep</label>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" name="penulis" value="{{ old('penulis') }}" required>
                @error('penulis')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tingkat_kesulitan" class="form-label">Tingkat Kesulitan</label>
                <select class="form-select @error('tingkat_kesulitan') is-invalid @enderror" id="tingkat_kesulitan" name="tingkat_kesulitan" required>
                    <option value="" selected disabled>Pilih Tingkat Kesulitan</option>
                    <option value="Mudah" {{ old('tingkat_kesulitan') == 'Mudah' ? 'selected' : '' }}>Mudah</option>
                    <option value="Sedang" {{ old('tingkat_kesulitan') == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                    <option value="Sulit" {{ old('tingkat_kesulitan') == 'Sulit' ? 'selected' : '' }}>Sulit</option>
                </select>
                @error('tingkat_kesulitan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('resep.index') }}" class="btn btn-secondary me-2">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
