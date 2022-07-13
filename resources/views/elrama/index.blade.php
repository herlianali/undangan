<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/dea-logo-pendek.png') }}" sizes="10x10"/>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/dea-logo-pendek.png') }}" sizes="10x10"/>

    <title>UndanganDea | EL Rama Janistimewa Nuris Sani, S. Kom</title>

    <!-- CSS  -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Root-Icon -->
    <link rel="stylesheet" href="https://cdn.rootpixel.net/assets/rooticon/v2/rooticon.css">
    <!-- Glide -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css" integrity="sha512-wCwx+DYp8LDIaTem/rpXubV/C1WiNRsEVqoztV0NZm8tiTvsUeSlA/Uz02VTGSiqfzAHD4RnqVoevMcRZgYEcQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" integrity="sha512-kwJUhJJaTDzGp6VTPBbMQWBFUof6+pv0SM3s8fo+E6XnPmVmtfwENK0vHYup3tsYnqHgRDoBDTJWoq7rnQw2+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Aos Animation on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- App -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <style>
        #navbar-icon {
            display: flex;
            flex-direction: column;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance:textfield;
        }
    </style>
</head>
<body id="index" class="opening-show" style="cursor: default !important;">
<!-- <body> -->

    <section id="opening">
        <div class="container text-white text-center">
            <h5 class="mb-2">Hai {{\Session::get('status')}}, <span id="">{{ $name }}</span></h5>
            <h5>Kami mengundang Anda ke Acara Pernikahan kami</h5>
            <h2 class="font-type-secondary my-5">EL Rama Janistimewa Nuris Sani, S. Kom </h2>
            <h2 class="font-type-secondary my-5">&</h2>
            <h2 class="font-type-secondary my-5">Devi Fatmawati, S. E</h2>
            <h5 class="mb-16">17 - 07 - 2022</h5>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <button id="btn-open-opening" class="btn btn-primary page-scroll"><i class="fa fas-envelope"></i> Buka Undangan</button>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand d-none d-sm-none d-md-block">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#section-2">Kisah Kita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll"  href="#section-3">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <h4 class="font-type-secondary d-none d-md-flex">
                            <a class="nav-link page-scroll"  href="#section-1">D & J</a>
                        </h4>
                        <!-- <a class="nav-link page-scroll d-md-none"  href="#section-1">Pengantin</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll"  href="#section-4">Jadwal Pernikahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll"  href="#section-6">Ucapan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none py-0" >
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto align-items-lg-center nav-justified w-100">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#section-2">
                            <div class="row">
                                <div class="align-items-center justify-content-center mb-2">
                                    <img src="{{ asset('assets/img/1/Tentang.png') }}" alt="" style="filter: invert(100%); width: 28px;">
                                </div>
                                <span>Kisah Kita</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll"  href="#section-3">
                            <div class="row">
                                <div class="align-items-center justify-content-center mb-1">
                                    <img src="{{ asset('assets/img/1/galery.png') }}" alt="" style="filter: invert(100%); width: 28px;">
                                </div>
                                <span>Galeri</span> 
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <h2 class="font-type-secondary">
                            <a class="nav-link page-scroll fw-bold mt-4" style="font-size: 30px"  href="#section-1">D & J</a>
                        </h2>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll"  href="#section-4">
                            <div class="row">

                                <div class="align-items-center justify-content-center mb-3">
                                    <img src="{{ asset('assets/img/1/jadwal.png') }}" alt="" style="filter: invert(100%); width: 28px;">
                                </div>
                                <span>Jadwal</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll"  href="#section-6">
                            <div class="row">
                                <div class="align-items-center justify-content-center mb-2">
                                    <img src="{{ asset('assets/img/1/ucapan.png') }}" alt="" style="filter: invert(100%); width: 28px;">
                                </div>    
                                <span>Ucapan</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header">
        <div class="container text-white text-center">
            <h6 class="text-dec text-dec-white">The Wedding Of</h6>
            <h2 class="font-type-secondary my-5">EL Rama Janistimewa Nuris Sani, S. Kom </h2>
            <h2 class="font-type-secondary my-5">&</h2>
            <h2 class="font-type-secondary my-5">Devi Fatmawati, S. E</h2>
            <h5>17 - 07 - 2022</h5>
        </div>
    </header>

    <section id="section-1">
        <div class="container text-center">
            <div class="row justify-content-center mb-5 mb-md-10">
                <div class="col-lg-7">
                    <h2 class="font-type-secondary font-bold">“Dua jiwa namun satu pikiran, dua hati namun satu perasaan”</h2>
                </div>
            </div>
            <div class="row g-0 g-md-4 align-items-center justify-content-center py-8 overflow-hidden">
                <div class="col col-md-4 col-xs-4 align-self-start d-flex flex-column align-items-center" data-aos="fade-right" data-aos-duration="1000">
                    <div class="img-wrapper-spouse mb-6" data-aos="fade-right" data-aos-offset="-100" data-aos-duration="1000">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/img/1/8.png') }}" alt="">
                        </div>
                    </div>
                    <h3 class="font-type-secondary font-bold mb-4" data-aos="fade-left"  data-aos-offset="-100" data-aos-duration="1200">EL Rama Janistimewa Nuris Sani, S. Kom</h3>
                    <h5 class="mb-3" data-aos="fade-left"  data-aos-offset="-100" data-aos-duration="1300">Putra Kedua dari</h5>
                    <h5 data-aos="fade-left"  data-aos-offset="-100" data-aos-duration="1400">Bpk. Peltu Mar (Purn) Isnanto</h5>
                    <h5 data-aos="fade-left"  data-aos-offset="-100" data-aos-duration="1500">Ibu Siti Nurhayati</h5>
                </div>
                <div class="col-auto col-md-3 col-xs-3" data-aos="fade-up" data-aos-duration="1200">
                    <h1>&</h1>
                </div>
                <div class="col col-md-4 col-xs-3 align-self-start d-flex flex-column align-items-center">
                    <div class="img-wrapper-spouse mb-6" data-aos="fade-left" data-aos-offset="-100" data-aos-duration="1000">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/img/1/Revisi_Gbr_No_7crop.jpg') }}" class="" style="" alt="">
                        </div>
                    </div>
                    <h3 class="font-type-secondary font-bold mb-4" data-aos="fade-right"  data-aos-offset="-100" data-aos-duration="1200">Devi Fatmawati, S. E</h3>
                    <h5 class="mb-3" data-aos="fade-right"  data-aos-offset="-100" data-aos-duration="1300">Putri Ketiga dari</h5>
                    <h5 data-aos="fade-right"  data-aos-offset="-100" data-aos-duration="1400">Bpk. IPDA (Purn) H. Isa Ansori</h5>
                    <h5 data-aos="fade-right"  data-aos-offset="-100" data-aos-duration="1500">Ibu Hj. Ufik Zuroidah</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="section-2">
        <div class="container">
            <h6 class="text-center text-spacing-default">KISAH KITA</h6>
            <h2 class="font-type-secondary text-center mb-10">Cerita Tentang Kita</h2>

            <div class="row gx-5 justify-content-center py-10 overflow-hidden">
                <div class="col-lg-5 col-sm-6 col-6 mb-6 mb-sm-10 mb-lg-0">
                    <div class="card card-story card-story-left mx-auto mb-6 mb-sm-10 mb-lg-16" data-aos="card-story-left" data-aos-duration="1200">
                        <div class="card-body">
                            <img src="{{ asset('assets/img/1/6.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="text-center text-lg-start b-10 mb-16 mb-lg-50 pt-10 mt-10" data-aos="fade-up" data-aos-duration="1200">
                        <div data-aos="fade-up" data-aos-duration="1300">
                            <!-- <h5>2016</h5> -->
                            <h4 class="font-type-secondary mb-2">Memutuskan Untuk Bersama</h4>
                        </div>
                        <p class="text-lg font-light" data-aos="fade-up" data-aos-duration="1500">
                            Dengan begitu banyak halang rintang yang pernah kami lewati, akhirnya kami memutuskan untuk ke jenjang selanjutnya yaitu pernikahan. Dimana dia adalah rumah bagi saya. “I choose you. And I'll choose you over and over and over. Without pause, without a doubt, in a heartbeat, I'll keep choosing you”.
                        </p>
                    </div>
                </div>

                <div class="col-lg-5 col-sm-6 col-6">
                    <div class="text-center text-lg-start b-10 mb-16 mb-lg-50 mb-sm-60" data-aos="fade-up" data-aos-duration="1200">
                        <div data-aos="fade-up" data-aos-duration="1300">
                            <!-- <h5>2016</h5> -->
                            <h4 class="font-type-secondary mb-2">Bagaimana Kami Bertemu</h4>
                        </div>
                        <p class="text-lg font-light" data-aos="fade-up" data-aos-duration="1500">
                            Pertemuan pertama kali berawal dari satu bangku sekolah yang sama dengan perasaan yg kagum dan tertarik sehingga menjadikan saya seorang pengagum rahasia dari kejauhan. Seiring berjalannya waktu membuat kami semakin dekat, meskipun kita sempat berjauhan karena suatu perbedaan pendapat tetapi membuat kami semakin menghargai artinya sebuah waktu kebersamaan.
                        </p>
                    </div>

                    <div class="card card-story card-story-right mx-auto mb-6 mb-sm-10 mb-lg-16" data-aos="card-story-right" data-aos-duration="1200">
                        <div class="card-body">
                            <img src="{{ asset('assets/img/1/5.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-3">
        <div class="container">
            <div id="row-lightgallery" class="row align-items-stretch g-4 g-lg-5 py-10 overflow-hidden">
                <!-- <div data-src="{{ asset('assets/img/1/3.jpg') }}" class="col-md-6 col-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-offset="-200" data-aos-duration="1200">
                    <div class="img-wrapper img-wrapper-gallery-1">
                        <img src="{{ asset('assets/img/1/3.jpg') }}" alt="">
                    </div>
                </div> -->
                <div class="col-lg-12 order-1">
                    <div class="row">
                        <div class="col-12 text-white">
                            <h6 class="text-spacing-default">GALERI</h6>
                            <h4 class="font-type-secondary mb-6">Foto Prewedding Kami</h4>
                        </div>
                        <div class="col-4 align-self-end" data-aos="fade-up" data-aos-offset="-250" data-aos-duration="1400">
                            <div data-src="{{ asset('assets/img/1/Revisi_Gbr_No_4.jpeg') }}" class="img-wrapper img-wrapper-gallery-2">
                                <img src="{{ asset('assets/img/1/Revisi_Gbr_No_4.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-4 align-self-end" data-aos="fade-up" data-aos-offset="-250" data-aos-duration="1600">
                            <div data-src="{{ asset('assets/img/1/6.jpg') }}" class="img-wrapper img-wrapper-gallery-2">
                                <img src="{{ asset('assets/img/1/6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-4 align-self-end" data-aos="fade-up" data-aos-offset="-250" data-aos-duration="1600">
                            <div data-src="{{ asset('assets/img/1/Revisi_Gbr_No_3.jpg') }}" class="img-wrapper img-wrapper-gallery-2">
                                <img src="{{ asset('assets/img/1/Revisi_Gbr_No_3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-12 order-2" data-aos="fade-up" data-aos-offset="-250" data-aos-duration="1800">
                    <div data-src="{{ asset('assets/img/1/5.jpg') }}" class="img-wrapper img-wrapper-gallery-3">
                        <img src="{{ asset('assets/img/1/5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-4">
        <div class="container text-center">
            <div class="row justify-content-center mb-10 overflow-hidden">
                <div class="col-lg-8" data-aos="fade-up" data-aos-offset="-200" data-aos-duration="1200">
                    <h6 class="font-light text-spacing-default">JADWAL PERNIKAHAN</h6>
                    <h4 class="font-type-secondary mt-2 mb-4">Assalamualaikum Warahmatullahi Wabarokatuh</h4>
                    <h5 class="font-light">
                        Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud menyelenggarakan Pernikahan putra-putri kami yang Insya Allah akan diselenggarakan pada :
                    </h5>
                </div>
            </div>

            <div class="row justify-content-center mb-10 overflow-hidden">
                <div class="col-lg-4 col-xl-3" data-aos="zoom-in" data-aos-offset="-200" data-aos-duration="1200">
                    <h2 class="font-type-secondary mb-8">Akad Nikah</h2>

                    <h6 class="text-spacing-default mb-2">Hari dan Tanggal</h6>
                    <h6 class="text-primary font-bold mb-6">Minggu, 17 juli 2022</h6>

                    <h6 class="text-spacing-default mb-2">Waktu</h6>
                    <h6 class="text-primary font-bold mb-6">jam 08.00</h6>

                    <h6 class="text-spacing-default mb-2">Lokasi</h6>
                    <h6 class="text-primary font-bold mb-6">Jl. Raya Ketimang No. 31 RT.06 RW.02</h6>

                    <a href="https://goo.gl/maps/kUZ8DRiTpjXT2t868" class="btn btn-primary">
                        <i class="ri ri-pin mr-1"></i> Lihat Lokasi
                    </a>
                </div>
                <div class="col-lg-2 d-flex align-items-center justify-content-center my-8 my-lg-0">
                    <div id="section-4-divider"></div>
                </div>
                <div class="col-lg-4 col-xl-3" data-aos="zoom-in" data-aos-offset="-200" data-aos-duration="1400">
                    <h2 class="font-type-secondary mb-8">Resepsi</h2>

                    <h6 class="text-spacing-default mb-2">Hari dan Tanggal</h6>
                    <h6 class="text-primary font-bold mb-6">Minggu, 17 juli 2022</h6>

                    <h6 class="text-spacing-default mb-2">Waktu</h6>
                    <h6 class="text-primary font-bold mb-6">jam 12.00 – 15.00</h6>

                    <h6 class="text-spacing-default mb-2">Lokasi</h6>
                    <h6 class="text-primary font-bold mb-6">Jl. Raya Ketimang No. 31 RT.06 RW.02</h6>

                    <a href="https://goo.gl/maps/kUZ8DRiTpjXT2t868" class="btn btn-primary">
                        <i class="ri ri-pin mr-1"></i> Lihat Lokasi
                    </a>
                </div>
            </div>

            <div class="row justify-content-center pt-10">
                <div class="col-lg-8 text-center">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.1868114496847!2d112.64509681477594!3d-7.444572894629289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x22215e8dd21e1575!2zN8KwMjYnNDAuNSJTIDExMsKwMzgnNTAuMiJF!5e0!3m2!1sen!2sid!4v1656519391926!5m2!1sen!2sid" 
                            class="col-md-12 col-sm-12 col-12"
                            height="400px"
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <h5 class="font-light mb-4">
                        Merupakan suatu Kehormatan dan Kebahagiaan Bagi Kami, Apabila Bapak/Ibu/Saudara/i Berkenan Hadir Untuk memberikan Doa Restu Kepada kedua mempelai.
                    </h5>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="section-5">
        <div class="container text-white text-center" data-aos="fade-up" data-aos-offset="-150" data-aos-duration="1200">
            <h5 class="font-normal">
                "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."
            </h5>
            <div class="bg-white mx-auto my-8" style="width: 14rem; height: 3px;"></div>
            <h5 class="font-bold">QS. Ar Rum ayat 21</h5>
        </div>
    </section>

    <section id="section-6">
        <div class="container">
            <div class="text-center mb-10">
                <h6 class="text-spacing-default mb-2">Ucapan</h6>
                <h2 class="font-type-secondary">Apakah Anda Akan Hadir?</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="zoom-in" data-aos-offset="-100" data-aos-duration="1200">
                    <div class="card">
                        <div class="card-body">
                            <!-- form ucapan dan doa -->
                            <form action="{{ route('ucapan') }}" method="POST">
                                @csrf
                                 <!-- input nama -->
                                <div class="mb-5">
                                    <label for="" class="form-label">Nama</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama"
                                        placeholder="Nama Lengkap Anda">
                                </div>
                                <!-- input nomor -->
                                <div class="mb-5">
                                    <label for="" class="form-label">Nomor WhatsApp atau HP</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="nomor"
                                        placeholder="Nomor WhatsApp atau HP Anda">
                                </div>
                                <!-- input hadir -->
                                <div class="mb-5">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="absen" value="Ya, saya akan hadir">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ya, saya akan hadir
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="absen" value="Tidak, saya tidak bisa hadir">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Tidak, saya tidak bisa hadir
                                        </label>
                                    </div>
                                </div>
                                <!-- input ucapan -->
                                <div class="mb-5">
                                    <label for="" class="form-label">Ucapan dan Doa Anda</label>
                                    <textarea
                                        type="text"
                                        class="form-control"
                                        name="ucapan"
                                        rows="3"
                                        placeholder="Tulis ucapan dan doa anda untuk mempelai pengantin"></textarea>
                                </div>

                                <button class="btn btn-primary">Kirim Ucapan</button>
                            </form>
                            <!-- end of form ucapan dan doa -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-7">
        <div class="container">
            <ul class="list-group list-group-flush">
                @foreach ( $ucapans as $ucapan )
                <li class="li list-group-item">
                    <h5 class="font-bold mb-2">{{ $ucapan->nama }}</h5>
                    <p class="text-lg font-light mb-3">
                        {{ $ucapan->ucapan }}
                    </p>
                    <div class="text-dark-500 font-light">{{$ucapan->created_at }}</div>
                </li>
                @endforeach
            </ul>

            <!-- btn semua ucapan -->
            <div class="row justify-content-center mt-8 mb-10">
                <div class="col-auto">
                    <a href="" class="btn btn-primary">Lihat Semua Ucapan</a>
                </div>
            </div>

            <!-- closing -->
            <div class="text-center py-10">
                <h4 class="font-type-secondary font-bold mb-1">Atas kehadiran serta do'a restunya</h4>
                <h4 class="font-type-secondary font-bold mb-3">kami ucapkan terima kasih</h4>
                <h2 class="font-type-secondary font-bold mb-5">Wassalamu'alaikum Warahmatullahi Wabarakatuh</h2>
                <h4 class="font-type-secondary font-bold mb-3">Kami Yang Berbahagia</h4>
                <h2 class="font-type-secondary font-bold mb-5">DEVI & JANIST</h2>
                <img src="{{ asset('assets/img/closing.png') }}" alt="" class="w-25rem">
            </div>
        </div>
    </section>

    {{-- <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm mb-3 mb-md-0">Copyright DEA Sinergi - All Rights Reserved</div>
                <div class="col-sm-auto"><a href="" class="" data-cfemail="">deasinergi@gmail.com</a></div>
            </div>
        </div>
    </footer> --}}

    <button id="btn-play" class="btn btn-light ">
        <i class="ri ri-volume-high"></i>
    </button>
    <!-- <button class="btn btn-light" style="">
        <i class="ri ri-volume-high"></i>
    </button> -->
    <!-- <a href="#header" id="btn-to-top" class="btn btn-light page-scroll  ">
        <i class="ri ri-arrow-up"></i>
    </a> -->

    <audio controls id="audio" class="d-none">
        <source src="{{ asset('assets/music/a_whole_new_world.mp3') }}" type="audio/mpeg">
        <!-- Your browser does not support the audio element. -->
    </audio>

    <!-- JS -->
    <!-- Bootstrap -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Countdown -->
    <script src="https://cdn.jsdelivr.net/npm/timezz@6.1.0/dist/timezz.min.js"></script>
    <!-- Glide -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Aos Animation os scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Anime js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- App -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
