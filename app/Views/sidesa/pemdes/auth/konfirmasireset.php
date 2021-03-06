<?= $this->include('sidesa/layout/user/auth_header') ?>

<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="<?= base_url('pemdes/auth/login/' . $kodedes); ?>" class="d-block auth-logo">
                                    <?php if (substr($kodedes, 0, 5) == "33.01") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3301.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Cilacap</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.02") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3302.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Banyumas</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.03") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3303.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Purbalingga</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.04") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3304.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Banjarnegara</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.05") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3305.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Kebumen</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.06") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3306.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Purworejo</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.07") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3307.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Wonosobo</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.08") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3308.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Magelang</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.09") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3309.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Boyolali</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.10") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3310.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Klaten</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.11") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3311.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Sukoharjo</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.12") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3312.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Wonogiri</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.13") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3313.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Karanganyar</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.14") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3314.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Sragen</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.15") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3315.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Grobogan</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.16") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3316.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Blora</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.17") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3317.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Rembang</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.18") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3318.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Pati</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.19") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3319.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Kudus</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.20") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3320.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Jepara</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.21") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3321.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Demak</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.22") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3322.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Semarang</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.23") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3323.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Temanggung</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.24") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3324.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Kendal</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.25") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3325.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Batang</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.26") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3326.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Pekalongan</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.27") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3327.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Pemalang</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.28") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3328.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Tegal</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php elseif (substr($kodedes, 0, 5) == "33.29") : ?>
                                        <span class="logo-lg">
                                            <img src="<?= base_url('img/onscreen/pemerintahkabupaten/logo_kab/3329.png'); ?>" alt="" height="60">
                                            <div class="logo-txt">Kab. Brebes</div>
                                            <div class="logo-txt">Kec. <?= $namakec; ?></div>
                                            <div class="logo-txt">Desa <?= $namades; ?></div>
                                        </span>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <div class="avatar-lg mx-auto">
                                        <div class="avatar-title rounded-circle bg-light">
                                            <i class="bx bx-mail-send h2 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <h4>Permintaan reset password Berhasil!</h4>
                                        <p class="text-muted">Kami segera mengirimkan <b>"link url"</b> untuk reset password ke nomor hp (whatsapp) yang anda daftarkan paling lambat 7 x 24 jam terima kasih.</p>
                                        <div class="mt-4">
                                            <a href="<?= base_url('pemdes/auth/login/' . $kodedes); ?>" class="btn btn-primary w-100">Kembali ke halaman login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">?? <script>
                                        document.write(new Date().getFullYear())
                                    </script> SIDesa . Provinsi Jawa Tengah</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay bg-primary"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-7">
                            <div class="p-0 p-sm-4 px-xl-0">
                                <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    </div>
                                    <!-- end carouselIndicators -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="testi-contain text-white">
                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                <h4 class="mt-4 fw-medium lh-base text-white">???Pengelolaan data yang baik dapat menghasilkan informasi yang bermanfaat. Informasi yang baik akan menghasilkan pengetahuan yang berharga. Pengetahuan tersebut dapat digunakan sebagai pendukung dalam penentuan arah kebijakan.???
                                                </h4>
                                                <div class="mt-4 pt-3 pb-5">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="<?= base_url('img/user/auth/babenk.jpg'); ?>" class="avatar-md img-fluid rounded-circle">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3 mb-4">
                                                            <h5 class="font-size-18 text-white">Ifran Lindu Mahargya, S.Kom, M.Kom
                                                            </h5>
                                                            <p class="mb-0 text-white-50">Analis Kebijakan Pengembangan Sistem Informasi Desa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="testi-contain text-white">
                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                <h4 class="mt-4 fw-medium lh-base text-white">???Jika ingin keadaan finansial mu berubah, berhenti menabung, dan mulailah kelola uang yang kamu terima untuk menghasilkan uang lebih banyak.???</h4>
                                                <div class="mt-4 pt-3 pb-5">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="<?= base_url('img/user/auth/puput.png'); ?>" class="avatar-md img-fluid rounded-circle">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3 mb-4">
                                                            <h5 class="font-size-18 text-white">Nurfia Puput Oktavade, S.Kom
                                                            </h5>
                                                            <p class="mb-0 text-white-50">Electronic Data Processing Pengembangan Sistem Informasi Desa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="testi-contain text-white">
                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                <h4 class="mt-4 fw-medium lh-base text-white">???All the technology in the world will never replace a positive attitude -Harvey Mackay-???</h4>
                                                <div class="mt-4 pt-3 pb-5">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="<?= base_url('img/user/auth/dianisa.jpeg'); ?>" class="avatar-md img-fluid rounded-circle">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3 mb-4">
                                                            <h5 class="font-size-18 text-white">Diannisa Rachmawati, ST
                                                            </h5>
                                                            <p class="mb-0 text-white-50">Electronic Data Processing Pengembangan Sistem Informasi Desa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="testi-contain text-white">
                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                <h4 class="mt-4 fw-medium lh-base text-white">???Nothing last's forever, do not give up, we can change the best future together, keep on spirit.???</h4>
                                                <div class="mt-4 pt-3 pb-5">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="<?= base_url('img/user/auth/ega.png'); ?>" class="avatar-md img-fluid rounded-circle">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3 mb-4">
                                                            <h5 class="font-size-18 text-white">Ega Asnova, SH
                                                            </h5>
                                                            <p class="mb-0 text-white-50">Electronic Data Processing Pengembangan Sistem Informasi Desa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="testi-contain text-white">
                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                <h4 class="mt-4 fw-medium lh-base text-white">???Bekerja dengan teknologi informasi, akan selalu ada keterlibatan proses audit rekayasa pengelolaan data dan informasi.???</h4>
                                                <div class="mt-4 pt-3 pb-5">
                                                    <div class="d-flex align-items-start">
                                                        <img src="<?= base_url('img/user/auth/zakezone.png'); ?>" class="avatar-md img-fluid rounded-circle">
                                                        <div class="flex-1 ms-3 mb-4">
                                                            <h5 class="font-size-18 text-white">Jakt Albary, S.Kom</h5>
                                                            <p class="mb-0 text-white-50">Programmer Pengembangan Sistem Informasi Desa
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end carousel-inner -->
                                </div>
                                <!-- end review carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>

<?= $this->include('sidesa/layout/user/auth_footer') ?>