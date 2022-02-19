        <!-- Begin Page Content -->
        <div class="container-fluid">
            <style>
                #content {
                    background: url(<?= base_url("img/bg/sitkd/bg-body.png") ?>);
                    background-position: center;
                }
            </style>
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $myprofile; ?></h1>
            <div style="max-width: 785px;"><?= session()->getFlashdata('message'); ?></div>
            <div class="card mb-3" style="max-width: 785px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('img/profile/' . $user['image']) ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <?php foreach ($kab as $k) : ?>
                                <h5 class="card-title"><?= $user['nama']; ?></h5>
                                <p class="card-text"><?= $user['nip']; ?></p>
                                <p class="card-text"><?= $user['email']; ?></p>
                                <p class="card-text"><?= $user['hp']; ?></p>
                                <p class="card-text"><?= $k->kabupaten; ?></p>
                                <p class="card-text"><small class="text-muted">Member sejak, <?= date('d F Y', $user['tanggal']); ?></small></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->