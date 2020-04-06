<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Bank Soal dan Materi ITERA</title>
</head>
<body>
    <div class="lp-header" id="home">
        <div class="header-logo">
            <!-- Diisi dengan logo ITERA dan Tulisan BSMI -->
            <img src="<?php echo base_url('assets/img/header_logo.png') ?>" alt="Bank Soal dan Materi Itera"> 
        </div>
        <div class="lp-navigation">
            <ul>
                <li><a href="<?php echo base_url() ?>">HOME</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#lp-about">ABOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="lp-page" id="lp-1">
        <div id="lp-1-container">
            <h1>Selamat Datang di Website<br>Bank Soal dan Materi ITERA</h1>
            <h3>Dapatkan soal dan materi program studimu agar bisa menjadi referensi ketika ujian nanti</h3>
            <div id="start">Mulai cari referensimu</div>
        </div>
        <div id="lp-1-container-img">
        <img src="<?php echo base_url('assets/img/lp_lampu.png') ?>" alt="Welcome"><!-- Diisi dengan gambar lampu pijar -->
        </div>
    </div>
    <div id="lp-about">
        <div id="container-about">
            <h1>Apa Itu Bank Soal dan <br>Materi ITERA?</h1>
            <h3>Bank Soal dan Materi ITERA (BSMI) adalah website hasil pengembangan "INI TEAM" yang merupakan mahasiswa Teknik Informatika ITERA yang bekerja sama dengan Kementrian Riset dan Pendidikan KM ITERA 2020. BSMI ini dibuat dengan tujuaun untuk memudahkan mahasiswa ITERA dalam mencari referensi belajar</h3>
        </div>
        <div id="container-img">
            <img src="<?php echo base_url('assets/img/lp_lampu.png') ?>" alt="Welcome"><!-- Diisi dengan gambar lampu pijar -->
        </div>
    </div>
    <div id="lp-about-1">
        <h1>Fasilitas yang Disediakan</h1>
        <div id="fasilitas">
        <h2>
            <img src="<?php echo base_url('assets/img/lp_lampu.png') ?>"><br>MATERI<br>
        menyediakan materi-materi perkuliahan dari setiap program studi yang ada di ITERA</h2>
        <h2>
            <img src="<?php echo base_url('assets/img/lp_lampu.png') ?>"><br>SOAL<br>
        menyediakan berbagai macam soal seperti soal UTS,UAS,dan QUIS dari setiap Mata Kuliah</h2>
        <h2>
            <img src="<?php echo base_url('assets/img/lp_lampu.png') ?>"><br>VIDEO<br>
        menyediakan tutorial video yang dapat membantu mahasiswa memahami materi dan contoh soal dari setiap Mata kuliah</h2>
        </div>
    </div>
    <div class="form-container popup" id="formPopup">
        <form class="input-form" id="formContainer" method="POST" action="<?php echo base_url(); ?>">
            <h1>Masukkan Enrollment Key</h1>
            <input type="text" name="enrolment_form" id="enrolment-form">
            <input type="submit" name="submit" value="Masuk">
            <input type="button" id="cancelPopup" value="Batal">
        </form>
    </div>

    <div id="up">
        <a href="#home">
            <img src="<?php echo base_url('assets/img/up.png') ?>"> 
        </a>
    </div>
    <script src="<?php echo base_url('assets/js/landing-page.js')?>"></script>
</body>
</html>