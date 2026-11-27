# Dokumentasi PBL Pertemuan 13: CRUD Mahasiswa

## Ruang lingkup

Proyek mengelola data **mahasiswa, dosen, dan mata kuliah** menggunakan CodeIgniter 4, MySQL/MariaDB, serta layout SIAKAD yang dibuat pada praktikum sebelumnya. Mahasiswa memakai NIM, nama, dan program studi dengan `id` otomatis; dosen memakai NIDN, nama, dan program studi; mata kuliah memakai kode, nama, dan jumlah SKS.

## Struktur fitur

- `app/Models/MahasiswaModel.php`, `DosenModel.php`, dan `MataKuliahModel.php` mengatur tabel `mahasiswa`, `dosen`, dan `matakuliah`, beserta primary key (`id`, `nidn`, `kode`) dan field yang boleh disimpan.
- Controller `Mahasiswa`, `Dosen`, dan `MataKuliah` menangani daftar, formulir tambah/edit, validasi, simpan, ubah, dan hapus.
- Folder view `mahasiswa/`, `dosen/`, dan `matakuliah/` berisi halaman daftar dan formulir tambah/edit. Tampilan memakai layout bersama di `app/Views/layouts/main.php`.
- `app/Config/Routes.php` mendaftarkan URL CRUD untuk ketiga data. Aksi yang mengubah data (simpan, ubah, hapus) menggunakan POST.
- `app/Config/Filters.php` mengaktifkan filter CSRF; semua formulir POST menyertakan token CSRF.
- `siakad_ci4.sql` berisi pembuatan database, struktur tabel, dan data awal.

## Menjalankan aplikasi

1. Import file `siakad_ci4.sql` melalui phpMyAdmin (tab **Import**). File ini otomatis membuat database `siakad_ci4` beserta tabel dan data awalnya. Import ulang akan mereset ketiga tabel ke data awal.
2. Sesuaikan konfigurasi koneksi database lokal pada `.env` (hostname, database, username, password, dan port). Pada XAMPP bawaan, username `root` dengan password kosong.
3. Dari direktori proyek, jalankan `php spark serve`.
4. Buka `http://localhost:8080/mahasiswa`.

## Alamat halaman

| Halaman | URL |
| --- | --- |
| Beranda | `http://localhost:8080/` |
| Mahasiswa | `http://localhost:8080/mahasiswa` |
| Dosen | `http://localhost:8080/dosen` |
| Mata Kuliah | `http://localhost:8080/mata-kuliah` |
| Tentang | `http://localhost:8080/tentang` |

## Panduan pengujian dan bukti pengumpulan

1. Buka halaman **Mahasiswa**, **Dosen**, dan **Mata Kuliah** untuk memastikan daftar memuat data awal.
2. Pada setiap halaman, pilih tombol **Tambah**, isi field, lalu simpan. Pastikan data tampil di daftar.
3. Pilih **Edit**, ubah nilai, lalu simpan perubahan.
4. Pilih **Hapus** dan konfirmasi. Pastikan baris hilang dari daftar.
5. Coba kirim formulir kosong untuk memastikan validasi menolak data yang tidak lengkap.
6. Ambil screenshot daftar serta hasil tambah, ubah, dan hapus untuk bukti pengumpulan. Hindari menampilkan password database pada screenshot konfigurasi.

## Catatan

Konfigurasi database pada `.env` perlu disesuaikan dengan komputer masing-masing. Pengujian interaktif perlu dilakukan pada komputer dengan layanan MySQL/MariaDB aktif.