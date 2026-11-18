<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'SIAKAD') ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f9; color: #243247; min-height: 100vh; display: flex; flex-direction: column; }
        header { background: #173b65; color: white; padding: 20px; }
        header h2, header p { margin: 0 0 6px; }
        nav { background: #24588b; padding: 12px 20px; }
        nav a { color: white; text-decoration: none; margin-right: 20px; }
        nav a:hover { text-decoration: underline; }
        main { flex: 1; padding: 25px; min-height: 350px; background: white; margin: 20px; border-radius: 6px; }
        footer { background: #173b65; color: white; padding: 15px; text-align: center; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #e9eff6; }
    </style>
</head>
<body>
    <header>
        <h2>Sistem Informasi Akademik</h2>
        <p>Program Studi Sistem Informasi</p>
    </header>
    <nav>
        <a href="<?= site_url('/') ?>">Beranda</a>
        <a href="<?= site_url('mahasiswa') ?>">Mahasiswa</a>
        <a href="<?= site_url('dosen') ?>">Dosen</a>
        <a href="<?= site_url('mata-kuliah') ?>">Mata Kuliah</a>
        <a href="<?= site_url('tentang') ?>">Tentang</a>
    </nav>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer><p>Praktikum Pemrograman Web II - SIAKAD</p></footer>
</body>
</html>
