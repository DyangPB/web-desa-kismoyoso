@extends('layouts.layout')

@section('breadcrumbs')
<h2>Tahu</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ url('/#portfolio')}}">UMKM</a></li>
    <li>Tahu</li>
</ol>
@endsection

@section('contents')
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tahu.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tahu2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tahu3.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi UMKM</h3>
                    <ul>
                        <li><strong>Nama Usaha</strong>: Tahu</li>
                        <li><strong>Jenis Kegiatan Usaha</strong>: Produksi dan Penjualan Tahu</li>
                        <li><strong>Bidang Kegiatan Usaha</strong>: Industri Pengolahan Makanan</li>
                        <li><strong>Kategori Produk</strong>:  Produk Olahan Kedelai</li>
                        <li><strong>Pemilik</strong>: Ibu Sukini</li>
                        <li><strong>Tahun Berdiri</strong>: 2002</li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://www.google.com/maps/place/Pabrik+tahu+pak+wahono/@-7.5115163,110.7840516,3a,75y,188.7h,83.02t/data=!3m7!1e1!3m5!1sEhNoy-VrUuXKjMMMCIO9PA!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DEhNoy-VrUuXKjMMMCIO9PA%26cb_client%3Dmaps_sv.share%26w%3D900%26h%3D600%26yaw%3D188.7004666629826%26pitch%3D6.983224377587675%26thumbfov%3D90!7i16384!8i8192!4m12!1m5!3m4!2zN8KwMzAnNDAuOSJTIDExMMKwNDcnMDEuNCJF!8m2!3d-7.5113692!4d110.7837253!3m5!1s0x2e7a139a005a11f5:0x9e5fe49ab3943130!8m2!3d-7.5116689!4d110.7841269!16s%2Fg%2F11kfbsdg90?coh=205410&entry=ttu">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <div class="d-flex">
                            <li><strong>Kontak</strong>:
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6285647904529">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        Chat via WhatsApp</button>
                                </a>
                                <!-- <a href="tel:6285647904529">
                                    <button class="green-button">
                                        <i class="bx bx-phone" style="padding-right:2px"></i>
                                        Hubungi</button>
                                </a> -->
                            </li>
                        </div>
                        <li><strong>Prestasi</strong>: UMKM Unggulan</li>
                    </ul>
                    <h3 style="padding-top:20px;">Paguyuban UMKM</h3>
                    <div class="d-flex">
                        <button class="green-button">
                            <i class="bx bx-info-circle" style="padding-right:2px"></i>
                            Lihat Informasi Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="portfolio-description">
            <h2>Produksi Tahu</h2>
            <p style="text-align: justify;">
                Produksi tahu di Desa Kismoyoso dilakukan dengan metode tradisional yang telah diwariskan secara turun-temurun. Proses pembuatan tahu dimulai dengan pemilihan kedelai berkualitas tinggi, yang kemudian direndam dan digiling untuk menghasilkan bubur kedelai. Bubur kedelai ini kemudian dimasak dan dicampur dengan koagulan alami untuk membentuk gumpalan tahu. Gumpalan tersebut diperas dan dicetak untuk menghasilkan tahu dengan tekstur yang lembut dan cita rasa yang khas.
            </p>
            <p style="text-align: justify;">
                Para pengusaha tahu di Kismoyoso sangat memperhatikan kebersihan dan kualitas dalam setiap tahap produksi. Penggunaan bahan-bahan alami tanpa bahan pengawet membuat tahu Kismoyoso dikenal sehat dan aman dikonsumsi. Selain dijual di pasar lokal, tahu produksi Kismoyoso juga telah merambah ke berbagai daerah, menunjukkan kualitas dan kepercayaan konsumen terhadap produk ini. Dengan demikian, produksi tahu menjadi salah satu tulang punggung ekonomi desa yang memberikan kontribusi signifikan bagi kesejahteraan masyarakat setempat.
            </p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection