<?= $this->include('sidesa/layout/user/content-header') ?>
<?= $this->include('sidesa/layout/user/content-topbar') ?>
<?= $this->include('sidesa/layout/user/content-sidebar') ?>

<div class="page-content">
    <div class="container-fluid">

        <?= $page_title ?>
        <style>
            body {
                background: url(../../img/bg/sitkd/bg-body.png);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                height: 100%;
            }

            body[data-layout-mode=dark] {
                background: url(../../img/bg/sitkd/bg-body.png);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                height: 100%;
            }
        </style>
        <!-- Page Heading -->

        <?= session()->getFlashdata('message'); ?>
        <?php if (isset($danadesa['danadesa'], $jumlah_realisasi) && $grand_total_realisasi < $jumlah_salur) : ?>
            <table>
                <tr>
                    <td><small class="form-text"><i>Dana Desa</i></small></td>
                    <td><small><i>:</i></small></td>
                    <td><small><i>Rp. <?= isset($danadesa['danadesa']) ? number_format($danadesa['danadesa'], 0, '', '.') : ''; ?></i></small></td>
                </tr>
                <tr>
                    <td><small class="form-text"><i>Total Salur</i></small></td>
                    <td><small><i>:</i></small></td>
                    <td><small><i>Rp. <?= isset($jumlah_salur) ? number_format($jumlah_salur, 0, '', '.') : ''; ?></i></small></td>
                </tr>
                <tr>
                    <td><small class="form-text"><i>Total Realisasi</i></small></td>
                    <td><small><i>:</i></small></td>
                    <td><small><i>Rp. <?= isset($grand_total_realisasi) ? number_format($grand_total_realisasi, 0, '', '.') : ''; ?></i></small></td>
                </tr>
                <tr>
                    <td><small class="form-text"><i>Last update</i></small></td>
                    <td><small><i>:</i></small></td>
                    <td><small><i><?= isset($bltdd['created']) ? date("d/m/Y", $bltdd['created']) : ''; ?></i></small></td>
                </tr>
            </table>
            <form action="" method="POST">
                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <table class="table table-hover table-sm mt-3">
                    <div class="text-center mt-3">
                        <button type="submit" name="update" class="btn btn-dark waves-effect btn-label waves-light mb-4"><i class="bx bx-error label-icon"></i>Update</button>
                    </div>
                    <thead>
                        <hr>
                        <tr>
                            <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle;">Reguler <?= $bltdd['persentase']; ?>% (Rp)</th>
                            <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle;">Realisasi (Rp)</th>
                            <th scope="col" colspan="13" style="text-align: center; vertical-align: middle;">Realisasi BLTDD <b style="color: crimson;">(Rp. <?= number_format($danadesa['bantuan_per_kpm'], 0, '', '.'); ?> / KPM)</b> - Berdasarkan bulan</th>
                        </tr>
                        <tr>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Jan (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Feb (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Mar (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Apr (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Mei (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Jun (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col" style="text-align: center; vertical-align: middle;"><?= number_format($danadesa['danadesa'] * $bltdd['persentase'] / 100, 0, '', '.'); ?></th>
                            <td scope="col" <?php if ($danadesa['danadesa'] * $bltdd['persentase'] / 100 > $jumlah_realisasi) : ?> style="color: red; vertical-align: middle; text-align: center;" <?php elseif ($danadesa['danadesa'] * $bltdd['persentase'] / 100 == $jumlah_realisasi) : ?> style="color: green; vertical-align: middle; text-align: center;" <?php else : ?> style="color:goldenrod; vertical-align: middle; text-align: center;" <?php endif; ?> /><?= number_format($jumlah_realisasi, 0, '', '.'); ?></td>

                            <!-- inputan realisasi reguler -->
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="januari" name="januari" <?php if (isset($bltdd['januari']) && $bltdd['januari'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['januari']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('januari'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="februari" name="februari" <?php if (isset($bltdd['februari']) && $bltdd['februari'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['februari']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('februari'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="maret" name="maret" <?php if (isset($bltdd['maret']) && $bltdd['maret'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['maret']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('maret'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="april" name="april" <?php if (isset($bltdd['april']) && $bltdd['april'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['april']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('april'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="mei" name="mei" <?php if (isset($bltdd['mei']) && $bltdd['mei'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['mei']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('mei'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="juni" name="juni" <?php if (isset($bltdd['juni']) && $bltdd['juni'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['juni']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('juni'); ?>" <?php endif; ?> />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hover table-sm mt-3">
                    <thead>
                        <tr>
                            <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle; opacity:0">Reguler <?= $bltdd['persentase']; ?>% (Rp)</th>
                            <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle; opacity:0">Realisasi (Rp)</th>
                        </tr>
                        <tr>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Jul (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Agt (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Sep (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Okt (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Nov (Rp)</th>
                            <th scope="col" style="vertical-align: middle; text-align: center;">Des (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col" style="text-align: center; vertical-align: middle; opacity:0"><?= number_format($danadesa['danadesa'] * $bltdd['persentase'] / 100, 0, '', '.'); ?></th>
                            <td scope="col" <?php if ($danadesa['danadesa'] * $bltdd['persentase'] / 100 > $jumlah_realisasi) : ?> style="color: red; vertical-align: middle; text-align: center; opacity:0" <?php elseif ($danadesa['danadesa'] <= $jumlah_realisasi) : ?> style="color: green; vertical-align: middle; text-align: center; opacity:0" <?php else : ?> style="vertical-align: middle; text-align: center; opacity:0" <?php endif; ?>><?= number_format($jumlah_realisasi, 0, '', '.'); ?></td>

                            <!-- inputan realisasi reguler -->
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="juli" name="juli" <?php if (isset($bltdd['juli']) && $bltdd['juli'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['juli']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('juli'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="agustus" name="agustus" <?php if (isset($bltdd['agustus']) && $bltdd['agustus'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['agustus']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('agustus'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="september" name="september" <?php if (isset($bltdd['september']) && $bltdd['september'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['september']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('september'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="oktober" name="oktober" <?php if (isset($bltdd['oktober']) && $bltdd['oktober'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['oktober']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('oktober'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="november" name="november" <?php if (isset($bltdd['november']) && $bltdd['november'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['november']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('november'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="desember" name="desember" <?php if (isset($bltdd['desember']) && $bltdd['desember'] != 0) : ?> value="<?= number_format(htmlspecialchars($bltdd['desember']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('desember'); ?>" <?php endif; ?> />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        <?php else : ?>
            <div class="text-center mt-4">
                <h3 style="color: crimson;">HARAP INPUT SALUR BLTDD TERLEBIH DAHULU</h3>
            </div>
        <?php endif; ?>

    </div>
</div>
<?= $this->include('sidesa/layout/user/content-footer') ?>