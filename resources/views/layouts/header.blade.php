<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

        <div class="logo" style="display: flex; align-items: center;">
            <a href="index.html" style="margin-right: 10px;"><img src="{{ asset('assets/img/logo-boyolali.png') }}" style="height: 50px; width: 30px;" alt="" class="img-fluid"></a>
            <h1 class="text-light" style="margin: 0;"><a href="index.html">Desa Kismoyoso</a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Potensi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Pertanian</a></li>
                        <li><a href="#">Perkebunan</a></li>
                        <li class="dropdown"><a href="#"><span>UMKM</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('jamu-gendong') }}">Jamu Gendong</a></li>
                                <li><a href="#">Tahu</a></li>
                                <li><a href="#">Tauge</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Tentang Desa</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Sejarah</a></li>
                        <li><a href="#">Visi & Misi</a></li>
                        <li><a href="#">Struktur Pemerintahan</a></li>
                        <li class="dropdown"><a href="#"><span>Infrastruktur</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Radar Pesawat</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Sekolah</a></li>
                                <li><a href="#">Pusat Kesehatan</a></li>
                                <li><a href="#">Taman</a></li>
                                <li><a href="#">Tempat Ibadah</a></li>
                                <li><a href="#">Pusat Olahraga</a></li>
                                <li><a href="#">Perpustakaan</a></li>
                                <li><a href="#">Pasar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Informasi Geografis</a></li>
                        <li class="dropdown"><a href="#"><span>Informasi Penduduk</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Jumlah Penduduk</a></li>
                                <li><a href="#">Komposisi Penduduk</a></li>
                                <li><a href="#">Pekerjaan Penduduk</a></li>
                                <li><a href="#">Kesejahteraan Penduduk</a></li>
                                <li><a href="#">Kesehatan Penduduk</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Kebun Gizi</a></li>
                        <li><a href="#">Posyandu</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Berita</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">UMKM</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->