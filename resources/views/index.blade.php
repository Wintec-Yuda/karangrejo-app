@extends('layout/main')

@section('custom-css1')
    <link href={{ asset('css/index/style.css') }} rel="stylesheet">
@endsection

@section('custom-js1')
    <script src={{ asset('js/index/index.js') }}></script>
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(images/index/slide/slide-1.jpeg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang
                                <br> Diwebsite <span>Desa Karangrejo</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                            <p>Karangrejo adalah sebuah desa yang terletak di Kecamatan Ngasem, Kabupaten Kediri.<br>
                                Desa ini memiliki
                                masyarakat yang ramah dan hangat serta menjunjung tinggi nilai-nilai kebersamaan.<br>
                                Selain itu, Karangrejo juga kaya akan sumberdaya alam yang melimpah. Keindahan alamnya
                                yang
                                memukau<br>dan kekayaan alamnya menjadikan desa ini sebagai tempat yang menarik untuk
                                dikunjungi.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(images/index/slide/slide-2.jpeg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Satu Akses</h2>
                            <p class="animate__animated animate__fadeInUp">Warga mendapat akses lebih baik pada
                                informasi desa
                                <br>Dengan tampilan yang modern dan juga responsive, website ini sekarang dapat diakses
                                kapanpun dan
                                dimanapun saat anda butuhkan.
                            </p>
                            <!--  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(images/index/slide/slide-3.jpeg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Layanan Publik Lebih Baik</h2>
                            <p class="animate__animated animate__fadeInUp">Meningkatkan layanan publik adalah upaya
                                berkelanjutan yang
                                memerlukan komitmen dan kolaborasi antara pemerintah desa, masyarakat, dan berbagai
                                pemangku kepentingan
                                terkait. Dalam memberikan pelayanan yang lebih baik kepada masyarakat, <br>
                                Evaluasi dan Perbaikan akan terus dilakukan Berkelanjutan.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                Call Center <i class="fas fa-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <!-- Running Text -->
    <div class="marquee">
        <marquee behavior="scroll" direction="right" scrollamount="12">
            <p class="description"><i class="fas fa-bullhorn" style="color: #ffffff"></i><b> Pengumuman:</b> Acara
                kebersihan lingkungan desa Karangrejo akan dilaksanakan pada tanggal 30 Juli 2023.</p>
        </marquee>
    </div>
    <!-- End Running Text -->

    <main id="main">
        <!-- =======
            <section id="featured-services" class="featured-services section-bg">
                <div class="container" data-aos="fade-down">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon jus"><i class="fas fa-headset jus"></i></div>
                                <h4 class="title"><a href="">Pengaduan Keluhan Masyarakat</a></h4>
                                <p class="description">Kini anda dapat membuat pengaduan secara online.<br>
                                    Dengan sistem ini. Masyarakat Karangrejo sekarang memiliki sarana untuk berpartisipasi
                                    secara aktif dalam pembangunan desa, memberikan umpan balik, dan memastikan pelayanan
                                    yang lebih baik.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-envelope"></i></div>
                                <h4 class="title"><a href="">Sistem Penyuratan Otomatis</a></h4>
                                <p class="description">Menghasilkan surat secara otomatis berdasarkan template dan data yang
                                    anda butuhkan.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-folder-open"></i></i></div>
                                <h4 class="title"><a href="">Arsip dan Dokumen</a></h4>
                                <p class="description">Akses terhadap dokumen-dokumen penting seperti peraturan desa,
                                    keputusan desa, laporan tahunan, dan formulir.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>Featured Services Section ======= -->

        <!-- ======= Profile Desa Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-right">

                <div class="section-title">
                    <h2>Profile Desa</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="images/index/about.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Berlokasi di Kabupaten Kediri Desa Karangrejo memiliki tiga dusun yaitu Tawangsari, Dlopo,
                            dan Kweden.</h3>
                        <p>
                            Karangrejo Berdaya. Desa ini tidak hanya dikenal karena kekayaan alam yang melimpah, tetapi
                            juga karena semangat
                            masyarakatnya yang membangun sebuah masa depan yang lebih baik. Karangrejo dan masyarakatnya
                            telah menyadari pentingnya
                            pengelolaan sumber daya secara efektif dan efisien.<br>
                            <br>
                            Dengan tekad yang kuat dan berkomitmen untuk meningkatkan kualitas
                            hidup dan pembangunan desa secara berkelanjutan. Masyarakat desa bekerja bersama-sama,
                            menggagas proyek-proyek inovatif,
                            dan memanfaatkan potensi yang ada untuk menciptakan lapangan kerja, meningkatkan pendidikan,
                            serta memperkuat infrastruktur lokal.<br>
                            <br>
                            Desa Karangrejo berharap bisa menjadi teladan bagi desa-desa lain di seluruh negeri,
                            menginspirasi
                            untuk mewujudkan perubahan positif dan menjaga keberlanjutan demi masa depan yang lebih
                            baik.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- Profile Desa Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-left">

                <div class="row no-gutters">

                    <div class="col-lg-4 col-md-6 content-item">
                        <span>01</span>
                        <h4>Pemberdayaan Masyarakat</h4>
                        <p>Kunci untuk menggerakkan potensi yang ada, membangun keunggulan bersama, dan menciptakan
                            perubahan positif.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item">
                        <span>02</span>
                        <h4>Pembangunan Berkelanjutan</h4>
                        <p>Mengembangkan dan menerapkan rencana dan kebijakan yang berfokus pada pertumbuhan ekonomi
                            yang inklusif, perlindungan lingkungan, dan keadilan sosial.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item">
                        <span>03</span>
                        <h4>Kemampuan Mandiri</h4>
                        <p>Mengelola sumber daya alam, ekonomi, dan sosial secara baik tanpa terlalu bergantung pada
                            pihak eksternal.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item">
                        <span>04</span>
                        <h4>Kemandirian Ekonomi</h4>
                        <p>Memiliki usaha dan inisiatif lokal yang mendukung perekonomian desa secara berkelanjutan.
                            Mencakup pengembangan usaha mikro, kecil, dan menengah (UMKM), pemanfaatan potensi lokal,
                            diversifikasi ekonomi, serta penguatan rantai pasok lokal.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item">
                        <span>05</span>
                        <h4>Partisipasi dan Keterlibatan</h4>
                        <p>Mendorong partisipasi dan keterlibatan aktif dari seluruh warga desa dalam proses pengambilan
                            keputusan dan pelaksanaan kebijakan.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item">
                        <span>06</span>
                        <h4>Transparan</h4>
                        <p>Memastikan akuntabilitas dan partisipasi masyarakat dalam pengambilan keputusan terkait
                            penggunaan dana desa. Dengan meningkatkan transparansi, diharapkan masyarakat dapat memahami
                            dan mengawasi penggunaan dana desa serta berpartisipasi dalam perencanaan dan pengambilan
                            keputusan terkait pembangunan desa.</p>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Partner Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in-up">

                <div class="section-title">
                    <h2>Partner Desa</h2>
                    <p> Dengan semangat bersama, kami berkolaborasi dengan para mitra di desa untuk mewujudkan
                        kemajuan dan kesejahteraan bersama. Bersama-sama, kami menggagas inovasi dan program yang
                        berlandaskan pada kebutuhan dan potensi desa, demi membangun lingkungan yang lebih baik dan berdaya
                        saing. Bersama partner desa, kami mengupayakan transformasi positif, memperkuat ekonomi lokal, dan
                        meningkatkan kualitas hidup masyarakat dalam harmoni dengan alam dan budaya setempat.</p>
                </div>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="images/index/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="images/index/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="images/index/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="images/index/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="images/index/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="images/index/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <!-- ======= No Use
                            <div class="swiper-slide"><img src="images/index/clients/client-7.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="images/index/clients/client-8.png" class="img-fluid" alt=""></div>
                            ======= -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
        </section>
        <!-- End Partner Section -->

        <!-- ======= Statistic Section ======= -->
        <section id="statistic" class="statistic">
            <div class="container justify-content-end">
                <div class="section-title">
                    <h2>Statistik Penduduk & Pekerjaan</h2>
                    <h5 class="chart-heading">Berikut adalah statistik dibulan Juli 2023</h5>
                </div>
                <div class="row">
                    <!-- Kolom Kiri -->
                    <div class="col-lg-6">
                        <div class="programming-stats" data-aos="fade-right">
                            <div class="chart-container">
                                <canvas class="my-chart"></canvas>
                            </div>
                            <div class="details">
                                <ul>
                                    <!-- Isi konten sesuai kebutuhan kolom kiri -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Kolom Kanan -->
                    <div class="col-lg-6">
                        <div class="programming-stats2" data-aos="fade-left">
                            <div class="chart-container2">
                                <canvas class="my-chart2"></canvas>
                            </div>
                            <div class="details2">
                                <ul>
                                    <!-- Isi konten sesuai kebutuhan kolom kanan -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Statistic Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit
                        in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="">Sed Perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bx bx-tachometer"></i>
                            </div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="bx bx-layer"></i>
                            </div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bx bx-slideshow"></i>
                            </div>
                            <h4><a href="">Dele Cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Divera Don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Suara Bu Lurah</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Perangkat Desa Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Perangkat Desa</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="images/index/team/team-1.jpg" alt="">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                quaerat qui aut aut aut
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="images/index/team/team-2.jpg" alt="">
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>
                            <p>
                                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                                rerum temporibus
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="images/index/team/team-3.jpg" alt="">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                                toro des clara
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Perangkat Desa Section -->
        <br><br>
        <!-- Embed Maps -->
        <div class="container" data-aos="fade-right" data-aos-delay="0">
            <div class="section-title">
                <h2>Lokasi Desa</h2>
                <p>Ini adalah lokasi kawasan yang mencakup area Desa Karangrejo.<br>Anda juga dapat mencari
                    tempat-tempat menarik di sekitar lokasi jika anda ingin merencanakan perjalanan menuju
                    atau
                    melewati desa Karangrejo.
                    <br>
                    Jika anda ingin mencari lokasi Balai Desa anda dapat Klik (lihat
                    peta) pada bagian bawah website ini.
                </p>
            </div>
            <div class="container" data-aos="fade-right" data-aos-delay="500">
                <div class="row justify-content-center">
                    <div class="card border-success mb-3" style="max-width: 30rem;">
                        <div class="card-header text-center"><i class="bi bi-bookmark-star-fill"></i><b>
                                Detail
                                Desa</b></div>
                        <div class="card-body text-success">
                            <p class="card-text">
                                Nama Desa : Karangrejo<br>
                                Kode Wilayah : 35.06.25.2008<br>
                                Luas Wilayah : 2.967,92 m <br>
                                Latitude : -7.795793248221198<br>
                                Longitude : 112.02393300451524<br>
                                Kediri, Jawa Timur, Indonesia (64182)<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center" data-aos="fade-left" data-aos-delay="1000">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item rounded-3"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15811.690974200923!2d112.02826743877799!3d-7.798004236698399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78574c7588a1d5%3A0xa74d3f1f19944925!2sKarangrejo%2C%20Kec.%20Ngasem%2C%20Kabupaten%20Kediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1688399769778!5m2!1sid!2sid"
                        frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- End Maps -->

        <!-- ======= Galeri Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class=" section-title">
                    <h2>Galeri</h2>
                    <p>Selamat Datang di Galeri Kegiatan Desa Karangrejo. Disini anda dapat menemukan ragam-ragam fasilitas
                        dari Desa Karangrejo.<br>
                        Anda dapat mencari lokasi strategis dengan mudah dengan satu klik.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-kd">Kegiatan Desa</li>
                            <li data-filter=".filter-fu">Fasilitas Umum</li>
                            <li data-filter=".filter-fd">Fasilitas Desa</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <!-- Kegiatan Desa -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-kd">
                        <div class="portfolio-wrap" data-aos="fade-right" data-aos-delay="500">
                            <img src="images/index/portfolio/image-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Musyawarah Masyarakat Desa 2024</p>
                                <div class="portfolio-links">
                                    <a href="image/index/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-kd">
                        <div class="portfolio-wrap" data-aos="zoom-out" data-aos-delay="500">
                            <img src="images/index/portfolio/image-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Penyaluran bantuan beras kepada warga penerima</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-kd">
                        <div class="portfolio-wrap" data-aos="fade-left" data-aos-delay="500">
                            <img src="images/index/portfolio/image-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Program Padat Karya Terpadu Desa Karangrejo 2023</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-kd">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Gerakan Eleminasi Masalah Stunting Desa Karangrejo</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-kd">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Pertemuan Musyawarah Masyarakat Desa (MMD)</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-kd">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Pertemuan Musyawarah Masyarakat Desa (MMD)</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Kegiatan Desa -->

                    <!-- Fasilitas Umum Desa -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>SPBU 55.641.54 Joyoboyo Kediri</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/tZeeLLoPFs9VY76f8" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/aurasyifa.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>RS. Aura Syifa Kediri</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/aurasyifa.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/kuJ45XW4ivLiTFai9" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/apotik.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Apotek Sejahtera Farma Dlopo</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/apotik.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/xj6KTd6JxN7dTrMTA" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Mekar Swalayan PT. Gudang Garam Tbk</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/M5o8TrmrhzZMBAtr6" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Tsamaniya Minimarket Dlopo</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/FePXpxEX7UNdLhWu8" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-10.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Lapangan Karangrejo</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-10.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/oSALcHrVfWtrvsYG8" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-11.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Masjid WAQAF AL-JAMIL</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-11.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/4bShSjxB1MMJ3NzF8" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-12.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Masjid Ar Rahmah</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-12.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/hzKf9ycyCpRwM59A6" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fu">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-13.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Masjid Baitul Ghofur</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-13.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/AzNCpc1zqqwCLL2c8" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Fasilitas Umum Desa -->

                    <!-- Fasilitas Desa -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fd">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-14.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Sekolah Dasar Negeri Karangrejo 1</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-14.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/h3PpQjXxTkCWCVYEA" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fd">
                        <div class="portfolio-wrap">
                            <img src="images/index/portfolio/image-15.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Sekolah Dasar Negeri Karangrejo 2</p>
                                <div class="portfolio-links">
                                    <a href="images/index/portfolio/image-15.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="https://goo.gl/maps/mMZitd7PM3JbaFoaA" target="blank"><i
                                            class="fas fa-location-arrow fa-xs"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Fasilitas Desa -->



                </div>
            </div>
            </div>
        </section>
        <!-- End Galeri Section -->

        <!-- Bundle Bootsrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </main>
    <!-- End #main -->
@endsection
