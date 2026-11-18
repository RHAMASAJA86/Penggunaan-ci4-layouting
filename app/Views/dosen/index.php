<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Dosen</h2>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Program Studi</th>
        </tr>
    </thead>

    <tbody>

        <?php if (empty($dosen)): ?>

            <tr>
                <td colspan="4">Data dosen belum tersedia.</td>
            </tr>

        <?php else: ?>

            <?php foreach ($dosen as $i => $dsn): ?>

                <tr>
                    <td><?= $i + 1 ?></td>

                    <td><?= esc($dsn['nidn']) ?></td>

                    <td><?= esc($dsn['nama']) ?></td>

                    <td><?= esc($dsn['prodi']) ?></td>
                </tr>

            <?php endforeach; ?>

        <?php endif; ?>

    </tbody>
</table>

<?= $this->endSection() ?>