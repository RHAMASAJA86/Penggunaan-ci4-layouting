<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="page-heading">
    <h2>Data Mata Kuliah</h2>
    <a class="button" href="<?= site_url('mata-kuliah/create') ?>">+ Tambah Mata Kuliah</a>
</div>

<?php if ($message = session()->getFlashdata('success')): ?>
    <p class="alert alert-success" role="status"><?= esc($message) ?></p>
<?php endif; ?>
<?php if ($message = session()->getFlashdata('error')): ?>
    <p class="alert alert-error" role="alert"><?= esc($message) ?></p>
<?php endif; ?>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        <?php if (empty($matakuliah)): ?>

            <tr>
                <td colspan="5">Data mata kuliah belum tersedia.</td>
            </tr>

        <?php else: ?>

            <?php foreach ($matakuliah as $i => $mk): ?>

                <tr>
                    <td><?= $i + 1 ?></td>

                    <td><?= esc($mk['kode']) ?></td>

                    <td><?= esc($mk['nama']) ?></td>

                    <td><?= esc($mk['sks']) ?></td>
                    <td class="actions">
                        <a class="button" href="<?= site_url('mata-kuliah/edit/' . ($mk['kode'])) ?>">Edit</a>
                        <form class="inline-form" action="<?= site_url('mata-kuliah/delete/' . ($mk['kode'])) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus data mata kuliah ini?')">
                            <?= csrf_field() ?>
                            <button class="button-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        <?php endif; ?>

    </tbody>
</table>

<?= $this->endSection() ?>