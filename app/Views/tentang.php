<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Tentang Aplikasi</h2>
<p>Sistem Informasi Akademik merupakan aplikasi sederhana untuk menampilkan informasi akademik.</p>
<p>Aplikasi ini dikembangkan menggunakan framework CodeIgniter 4.</p>
<h2>Tentang Saya</h2>
<table>
    <tr><th>Keterangan</th><th>Data</th></tr>
    <tr><td>Nama</td><td>Nama Lengkap Anda</td></tr>
    <tr><td>NIM</td><td>NIM Anda</td></tr>
    <tr><td>Program Studi</td><td>Sistem Informasi</td></tr>
    <tr><td>Semester</td><td>V</td></tr>
    <tr><td>Mata Kuliah</td><td>Pemrograman Web II</td></tr>
    <tr><td>Dosen Pengampu</td><td>Nafis Sururi, M.Kom.</td></tr>
</table>
<p>Saya adalah mahasiswa Program Studi Sistem Informasi yang sedang belajar pengembangan aplikasi web menggunakan framework CodeIgniter 4. 
    Aplikasi ini dibuat sebagai tugas praktikum Pemrograman Web II.</p>
<?= $this->endSection() ?>