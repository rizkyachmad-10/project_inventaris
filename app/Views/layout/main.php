<?= $this->include('layout/header') ?>

<div class="wrapper">

    <?= $this->include('layout/topbar') ?>

    <div class="page-wrap">

        <?= $this->include('layout/sidebar') ?>

        <div class="main-content">

            <?= $this->renderSection('content') ?>

        </div>

        <?= $this->include('layout/rightbar') ?>

    </div>

    <?= $this->include('layout/footer') ?>

</div>