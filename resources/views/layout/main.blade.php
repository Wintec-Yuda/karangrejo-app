<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karangrejo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    @yield('custom-css1')
    @yield('custom-css2')
    @yield('custom-css3')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/layout/footer.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/wisata">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ekonomi">Ekonomi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/limbah">Limbah</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            SDM
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/rumah-belajar">Rumah Belajar</a></li>
                            <li><a class="dropdown-item" href="/info-pelatihan">Info Pelatihan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer id="footer">
        <div class="container">
            <h3><img src="images/layout/footer.png" alt="Logo"></h3>
            <div class="text-footer">
                <b>Jl. Tunggul Wulung No.180, Karangrejo, Kec. Ngasem, Kabupaten Kediri, Jawa Timur 64182. </b> <a
                    href="https://www.google.com/maps/place/Kantor+Kepala+Desa+Karangrejo/@-7.7997207,112.0312067,20.65z/data=!4m6!3m5!1s0x2e78574f17ed0385:0xb36c752f7cd01805!8m2!3d-7.7995889!4d112.03128!16s%2Fg%2F1hm5l_vth?entry=ttu"
                    target="_blank"><br>Lihat peta</a>
            </div>
            <br>
            <div class="social-links">
                <a href="https://www.instagram.com/ppkukki_unpkediri/" title="Instagram" class="instagram"><i
                        class="bx bxl-instagram" target="_blank"></i></a>
                <a href="#" class="WA" title="WhatApp"><i class="bx bxl-whatsapp" target="_blank"></i></a>
                <a href="https://web.facebook.com/profile.php?id=100093723827711&_rdc=1&_rdr" title="Facebook"
                    class="facebook"><i class="bx bxl-facebook" target="_blank"></i></a>
                <a href="https://www.tiktok.com/@ppkukki_unpkediri?_op=1&_r=1&_t=8dapqqym8hg" title="TikTok"
                    class="tiktok"><i class="bx bxl-tiktok" target="_blank"></i></a>
                <a href="https://www.youtube.com/@PPKUKKI_UNPKEDIRI" title="YouTube" class="youtube"><i
                        class="bx bxl-youtube" target="_blank"></i></a>
                <a href="mailto:contoh@email.com" class="email"><i class="bx bxl-gmail" title="Email"
                        target="_blank"></i></a>
            </div>
            <div class="copyright justify-content-center">
                &copy; 2023. Copyright <strong><span>Desa Karangrejo</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

    @yield('custom-js1')
    @yield('custom-js2')
    @yield('custom-js3')
    @yield('custom-js4')
    @yield('custom-js5')
    @yield('custom-js6')
    @yield('custom-js7')
    @yield('custom-js8')
    @yield('custom-js9')
</body>

</html>
