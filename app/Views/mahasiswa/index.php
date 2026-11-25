<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="page-heading">
    <h2>Data Mahasiswa</h2>
    <a class="button" href="<?= site_url('mahasiswa/create') ?>">+ Tambah Mahasiswa</a>
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
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        <?php if (empty($mahasiswa)): ?>

            <tr>
                <td colspan="5">Data mahasiswa belum tersedia.</td>
            </tr>

        <?php else: ?>

            <?php foreach ($mahasiswa as $i => $mhs): ?>

                <tr>
                    <td><?= $i + 1 ?></td>

                    <td><?= esc($mhs['nim']) ?></td>

                    <td><?= esc($mhs['nama']) ?></td>

                    <td><?= esc($mhs['prodi']) ?></td>
                    <td class="actions">
                        <a class="button" href="<?= site_url('mahasiswa/edit/' . $mhs['id']) ?>">Edit</a>
                        <form class="inline-form" action="<?= site_url('mahasiswa/delete/' . $mhs['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')">
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