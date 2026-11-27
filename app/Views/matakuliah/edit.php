<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="form-card">
    <div class="page-heading">
        <h2>Edit Mata Kuliah</h2>
        <a class="button button-secondary" href="<?= site_url('mata-kuliah') ?>">Kembali</a>
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

    <form action="<?= site_url('mata-kuliah/update/' . rawurlencode($mk['kode'])) ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="kode">Kode Mata Kuliah</label>
            <input id="kode" type="text" name="kode" maxlength="20" value="<?= esc(old('kode', $mk['kode'])) ?>" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Mata Kuliah</label>
            <input id="nama" type="text" name="nama" maxlength="100" value="<?= esc(old('nama', $mk['nama'])) ?>" required>
        </div>
        <div class="form-group">
            <label for="sks">SKS</label>
            <input id="sks" type="number" name="sks" min="1" max="6" value="<?= esc(old('sks', $mk['sks'])) ?>" required>
        </div>
        <button type="submit">Simpan Perubahan</button>
    </form>
</div>

<?= $this->endSection() ?>