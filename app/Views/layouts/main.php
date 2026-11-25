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
        .page-heading { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 18px; }
        .page-heading h2 { margin: 0; }
        .button, button { display: inline-block; border: 0; border-radius: 4px; padding: 9px 13px; background: #24588b; color: white; text-decoration: none; font: inherit; cursor: pointer; }
        .button:hover, button:hover { background: #173b65; }
        .button-secondary { background: #64748b; }
        .button-danger { background: #b42318; }
        .inline-form { display: inline; }
        .actions { white-space: nowrap; }
        .alert { padding: 12px 14px; border-radius: 4px; margin: 14px 0; }
        .alert-success { color: #14532d; background: #dcfce7; }
        .alert-error { color: #7f1d1d; background: #fee2e2; }
        .form-card { max-width: 620px; }
        .form-group { margin: 16px 0; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 6px; }
        .form-group input { box-sizing: border-box; width: 100%; padding: 10px; border: 1px solid #b8c3d1; border-radius: 4px; font: inherit; }
        .field-error { color: #b42318; margin: 5px 0 0; }
        @media (max-width: 640px) {
            main { margin: 10px; padding: 16px; overflow-x: auto; }
            .page-heading { align-items: flex-start; flex-direction: column; }
            th, td { padding: 8px; }
        }
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
