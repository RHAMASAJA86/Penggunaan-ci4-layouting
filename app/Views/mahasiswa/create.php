<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="form-card">
    <div class="page-heading">
        <h2>Tambah Mahasiswa</h2>
        <a class="button button-secondary" href="<?= site_url('mahasiswa') ?>">Kembali</a>
    </div>

    <?php $errors = session()->getFlashdata('errors') ?? []; ?>
    <?php if ($errors): ?>
        <div class="alert alert-error" role="alert">
            <p>Periksa kembali data yang dimasukkan.</p>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('mahasiswa/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input id="nim" type="text" name="nim" maxlength="20" value="<?= esc(old('nim', '')) ?>" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" maxlength="100" value="<?= esc(old('nama', '')) ?>" required>
        </div>
        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <input id="prodi" type="text" name="prodi" maxlength="100" value="<?= esc(old('prodi', '')) ?>" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>