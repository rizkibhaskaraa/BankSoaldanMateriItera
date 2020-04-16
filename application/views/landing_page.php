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
                <li><a href="<?php echo base_url('welcome/halamanFaq') ?>">FAQ</a></li>
                <li><a href="<?php echo base_url('welcome/halamanAbout')?>">ABOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="lp-page" id="lp-1">
        <div id="lp-1-container">
            <h1>Selamat Datang di Website<br>Bank Soal dan Materi ITERA</h1>
            <p>Dapatkan Soal dan Materi Program Studimu agar bisa menjadi referensi ketika ujian nanti</p>
            <div id="start">Mulai Cari Referensimu!</div>
        </div>
        <div id="lp-1-container-img">
        <img src="<?php echo base_url('assets/img/lp_lampu.png') ?>" alt="Welcome"><!-- Diisi dengan gambar lampu pijar -->
        </div>
    </div>
    <div id="lp-about">
        <div id="container-about">
            <h1>Apa Itu Bank Soal dan <br>Materi ITERA?</h1>
            <p>Bank Soal dan Materi ITERA (BSMI) merupakan Website hasil pengembangan "IniTeam" dari Mahasiswa Teknik Informatika 17 ITERA yang bekerja sama dengan Kementrian Riset dan Pendidikan KM ITERA 2020. BSMI ini dibuat dengan tujuaun untuk memudahkan Mahasiswa ITERA dalam mencari referensi belajar.</p>
        </div>
        <div id="container-img">
            <img src="<?php echo base_url('assets/img/asset(3).png') ?>" alt="Welcome"><!-- Diisi dengan gambar lampu pijar -->
        </div>
    </div>
    <div id="lp-about-1">
        <h1>Fasilitas yang Disediakan</h1>
        <div id="fasilitas">
        <h2>
            <img src="<?php echo base_url('assets/img/materi.png') ?>"><br>MATERI<br>
        Menyediakan materi-materi perkuliahan dari setiap Program Studi yang ada di ITERA</h2>
        <h2>
            <img src="<?php echo base_url('assets/img/soal.jpg') ?>"><br>SOAL<br>
        Terdapat berbagai macam soal seperti soal UTS,UAS,dan QUIZ dari setiap Mata Kuliah</h2>
        <h2>
            <img src="<?php echo base_url('assets/img/video.png') ?>"><br>VIDEO<br>
        Tutorial video yang dapat memudahkan mahasiswa memahami materi dan contoh soal dari setiap Mata kuliah</h2>
        </div>
    </div>
    <div class="form-container popup" id="formPopup">
        <form class="input-form" id="formContainer" method="POST" action="<?php echo base_url(); ?>">
            <h1>Masukkan Enrollment Key</h1>
            <input type="text" name="enrolment_form" id="enrolment-form">
            <input type="button" id="cancelPopup" value="Batal">
            <input type="submit" name="submit" value="Masuk">
            
        </form>
    </div>

    <div id="up">
        <a href="#home">
            <img src="<?php echo base_url('assets/img/up.png') ?>"> 
        </a>
    </div>
    <script src="<?php echo base_url('assets/js/landing-page.js')?>"></script>
</body>


<footer>
                       
                        <div class="q-a">
                        <h5 class = "q">
                        <?php echo "Dikembangkan Oleh"?>
                        </h5>
                        </div>
                        
                            <div class="ini-team">
                                <img src="<?php echo base_url('assets/img/initeam.png') ?>" alt=""> 
                            </div>

                            <div class="collabs">
                                <img src="<?php echo base_url('assets/img/silang.png') ?>" alt=""> 
                            </div>

                            <div class="kmitera">
                                <img src="<?php echo base_url('assets/img/kmitera.png') ?>" alt=""> 
                            </div>

                            <div class="hmif">
                                <img src="<?php echo base_url('assets/img/HMIF.png') ?>" alt=""> 
                            </div>

                            <div class="itera">
                                <img src="<?php echo base_url('assets/img/itera.png') ?>" alt=""> 
                            </div>

                           
                        
                        <center>&copy 2020. Institut Teknologi Sumatera. Hak Cipta dilindungi Undang-Undang.</center>

                        <div class="footnote">
                        <center>v05042020</center>
                        </div>

                    </div>
                        
                        


      </footer>

</html>






</html>