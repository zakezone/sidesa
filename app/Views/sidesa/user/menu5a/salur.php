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
        <?php if (isset($danadesa['danadesa'])) : ?>
            <small class="form-text"><i>Last update, <?= isset($salur['created']) ? date("d/m/Y", $salur['created']) : ''; ?></i></small>
            <form action="" method="POST">
                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <table class="table table-hover table-sm mt-3">
                    <div class="text-center">
                        <?php if (isset($salur)) : ?>
                            <button type="submit" name="update" class="btn btn-dark waves-effect btn-label waves-light"><i class="bx bx-error label-icon"></i>Update</button>
                        <?php else : ?>
                            <button type="submit" name="insert" class="btn btn-danger waves-effect btn-label waves-light"><i class="bx bx-error label-icon"></i>Insert</button>
                        <?php endif; ?>
                    </div>
                    <thead>
                        <hr>
                        <tr>
                            <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle;">Dana Desa (Rp)</th>
                            <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle;">Jumlah Salur (Rp)</th>
                            <th scope="col" colspan="13" style="text-align: center; vertical-align: middle;">Input Salur - Berdasarkan bulan</th>
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
                            <th scope="col" style="text-align: center; vertical-align: middle;"><?= number_format($danadesa['danadesa'], 0, '', '.'); ?></th>
                            <td scope="col" <?php if ($danadesa['danadesa'] > $jumlah_salur) : ?> style="color: red; vertical-align: middle; text-align: center;" <?php elseif ($danadesa['danadesa'] == $jumlah_salur) : ?> style="color: green; vertical-align: middle; text-align: center;" <?php else : ?> style="color:goldenrod; vertical-align: middle; text-align: center;" <?php endif; ?> /><?= number_format($jumlah_salur, 0, '', '.'); ?></td>
                            <!-- inputan salur -->
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="januari" name="januari" <?php if (isset($salur['januari']) && $salur['januari'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['januari']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('januari'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="februari" name="februari" <?php if (isset($salur['februari']) && $salur['februari'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['februari']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('februari'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="maret" name="maret" <?php if (isset($salur['maret']) && $salur['maret'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['maret']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('maret'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="april" name="april" <?php if (isset($salur['april']) && $salur['april'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['april']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('april'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="mei" name="mei" <?php if (isset($salur['mei']) && $salur['mei'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['mei']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('mei'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="juni" name="juni" <?php if (isset($salur['juni']) && $salur['juni'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['juni']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('juni'); ?>" <?php endif; ?> />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hover table-sm mt-3">
                    <thead>
                        <tr>
                            <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle; opacity:0">Dana Desa (Rp)</th>
                            <th scope="col" rowspan="2" style="text-align: center; vertical-align: middle; opacity:0">Jumlah Salur (Rp)</th>
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
                            <td scope="col" style="text-align: center; vertical-align: middle; opacity:0"><?= number_format($danadesa['danadesa'], 0, '', '.'); ?></td>
                            <td scope="col" style="text-align: center; vertical-align: middle; opacity:0"><?= number_format($jumlah_salur, 0, '', '.'); ?></td>

                            <!-- inputan salur -->
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="juli" name="juli" <?php if (isset($salur['juli']) && $salur['juli'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['juli']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('juli'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="agustus" name="agustus" <?php if (isset($salur['agustus']) && $salur['agustus'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['agustus']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('agustus'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="september" name="september" <?php if (isset($salur['september']) && $salur['september'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['september']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('september'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="oktober" name="oktober" <?php if (isset($salur['oktober']) && $salur['oktober'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['oktober']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('oktober'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="november" name="november" <?php if (isset($salur['november']) && $salur['november'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['november']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('november'); ?>" <?php endif; ?> />
                            </td>
                            <td scope="col" style="text-align: center; vertical-align: middle;">
                                <input type="text" class="form-control" id="desember" name="desember" <?php if (isset($salur['desember']) && $salur['desember'] != 0) : ?> value="<?= number_format(htmlspecialchars($salur['desember']), 0, '', '.'); ?>" <?php else : ?> value="<?= old('desember'); ?>" <?php endif; ?> />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        <?php else : ?>
            <div class="text-center mt-4">
                <h3 style="color: crimson;">HARAP MENUNGGU ANGGARAN DANA DESA TERINPUT TERLEBIH DAHULU</h3>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->include('sidesa/layout/user/content-footer') ?>