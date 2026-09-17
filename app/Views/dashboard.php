<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="page-header">
        <h1>Dashboard</h1>
        <p>Sistem Inventaris Sekolah</p>
    </div>

    <div class="row">

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Total Barang</h5>
                    <h2><?= $totalBarang ?? 0 ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Kategori</h5>
                    <h2><?= $totalKategori ?? 0 ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Peminjaman</h5>
                    <h2><?= $totalPeminjaman ?? 0 ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Ruangan</h5>
                    <h2><?= $totalRuangan ?? 0 ?></h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card mt-4">
        <div class="card-body">

            <h2>Selamat Datang</h2>

            <p>
                Selamat datang di Sistem Inventaris Sekolah.
            </p>

        </div>
    </div>

</div>

<?= $this->endSection() ?>