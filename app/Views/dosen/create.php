<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="form-card">
    <div class="page-heading">
        <h2>Tambah Dosen</h2>
        <a class="button button-secondary" href="<?= site_url('dosen') ?>">Kembali</a>
    </div>

    <?php if ($message = session()->getFlashdata('error')): ?>
        <p class="alert alert-error" role="alert"><?= esc($message) ?></p>
    <?php endif; ?>
    <?php $errors = session()->getFlashdata('errors') ?? []; ?>
    <?php if ($errors): ?>
        <div class="alert alert-error" role="alert">
            <p>Periksa kembali data yang dimasukkan.</p>
            <ul><?php foreach ($errors as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('dosen/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="nidn">NIDN</label>
            <input id="nidn" type="text" name="nidn" maxlength="20" value="<?= esc(old('nidn', '')) ?>" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Dosen</label>
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