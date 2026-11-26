<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="page-heading">
    <h2>Data Dosen</h2>
    <a class="button" href="<?= site_url('dosen/create') ?>">+ Tambah Dosen</a>
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
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        <?php if (empty($dosen)): ?>

            <tr>
                <td colspan="5">Data dosen belum tersedia.</td>
            </tr>

        <?php else: ?>

            <?php foreach ($dosen as $i => $dsn): ?>

                <tr>
                    <td><?= $i + 1 ?></td>

                    <td><?= esc($dsn['nidn']) ?></td>

                    <td><?= esc($dsn['nama']) ?></td>

                    <td><?= esc($dsn['prodi']) ?></td>
                    <td class="actions">
                        <a class="button" href="<?= site_url('dosen/edit/' . rawurlencode($dsn['nidn'])) ?>">Edit</a>
                        <form class="inline-form" action="<?= site_url('dosen/delete/' . rawurlencode($dsn['nidn'])) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus data dosen ini?')">
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