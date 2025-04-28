# Sistem Manajemen Resep Masakan

Sistem Manajemen Resep Masakan adalah aplikasi Laravel yang memungkinkan pengguna untuk menyimpan dan mengelola berbagai resep masakan. Aplikasi ini memiliki fitur CRUD lengkap dengan implementasi soft delete dan pemulihan data yang dihapus.

## Fitur Utama

- **CRUD Resep**: Create, Read, Update, Delete untuk entitas Resep
- **Soft Delete**: Resep yang dihapus masih dapat dipulihkan
- **Halaman Pemulihan Data**: Admin dapat melihat dan memulihkan resep yang telah dihapus
- **Pagination**: Menampilkan 8 resep per halaman
- **Validasi Input**: Validasi semua input saat proses tambah dan edit resep
- **Data Dummy**: 20 data dummy resep menggunakan Faker, Factory, dan Seeder

## Teknologi

- Laravel (Framework PHP)
- MySQL (Database)
- Bootstrap (Frontend CSS Framework)
- Eloquent ORM (Object-Relational Mapping)

## Struktur Database

Entity Resep memiliki atribut-atribut sebagai berikut:
- `id` - Primary key
- `judul_resep` - Judul dari resep
- `kategori` - Kategori makanan (contoh: makanan utama, dessert, sarapan)
- `bahan` - Bahan-bahan yang dibutuhkan untuk membuat masakan
- `langkah_pembuatan` - Langkah-langkah untuk membuat masakan
- `waktu_memasak` - Waktu yang dibutuhkan untuk memasak
- `penulis` - Nama penulis/pembuat resep
- `tingkat_kesulitan` - Tingkat kesulitan memasak (mudah, sedang, sulit)
- `deleted_at` - Timestamp untuk soft delete

## Cara Instalasi

1. Clone repositori ini
   ```
   git clone https://github.com/pinnpalenn/2311081003_UTS_Web_Framework.git
   cd 2311081003_UTS_Web_Framework
   ```

2. Install dependensi 
   ```
   composer install
   ```

3. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database
   ```
   cp .env.example .env
   ```

4. Generate application key
   ```
   php artisan key:generate
   ```

5. Jalankan migrasi dan seeder untuk membuat struktur database dan mengisi data dummy
   ```
   php artisan migrate --seed
   ```

6. Jalankan server development
   ```
   php artisan serve
   ```

7. Akses aplikasi melalui browser
   ```
   http://localhost:8000
   ```

## Struktur Direktori Utama

```
app/
├── Http/
│   ├── Controllers/
│   │   └── ResepController.php
│   └── Requests/
│       └── ResepRequest.php
├── Models/
│   └── Resep.php
database/
├── factories/
│   └── ResepFactory.php
├── migrations/
│   └── xxxx_xx_xx_create_reseps_table.php
└── seeders/
    └── ResepSeeder.php
resources/
└── views/
    └── resep/
        ├── index.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        ├── show.blade.php
        └── trash.blade.php
routes/
└── web.php
```

## Dokumentasi Video

Untuk dokumentasi video berupa penjelasan, bisa dibuka di [link video ini](https://youtu.be/-64fVfWfmms)
## Author

Alvin Afalen - 2311081003
