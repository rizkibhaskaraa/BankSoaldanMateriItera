<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styleFAQ.css') ?>">
    <title>About</title>
</head>
<body>

<!-- <div style="border: 0; padding: 50px; background-color: #FFD700; text-align: left;"></div> -->

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
        
        <div class="faq-logo">
            <img src="<?php echo base_url('assets/img/faq-logo.png') ?>" alt=""> 
        </div>

        
        <div class="content-faq">
                    <?php 
                    $array = array(
                        "Bagaimana cara menggunakan website BSMI?"=>"Kalian sebagai mahasiswa cukup search website BSMI di search engine. Setelah website ditemukan klik “Mulai cari Referensi” lalu masukkan Enrollment-Key yang akan di infokan oleh Himpunan ataupun Prodi masing-masing. Maka website BSMI sudah dapat kalian gunakan.
                        ",
                        "Bagaimana cara menemukan fasilitas yang tersedia di website BSMI?
                        "=>"Setelah kalian masuk melalui Enrollment-key, kalian tinggal mencari jurusan dan prodi kalian. Setelah itu menu Materi, Soal dan Video akan muncul ",
                        "Apakah Materi, Soal dan Video dapat di unduh?"=>"Tentu saja bisa, untuk Materi dan Soal dapat kalian unduh langsung melalui website BSMI, namun untuk Video karena menggunakan system Embed Youtube maka kalian dapat mendownload video melaui aplikasi youtube.",
                        "Apakah dapat melakukan request Materi, Soal atau Video ?
                        "=>"Bisa, jika kalian memiliki request content yang kalian rasa perlu ada didalam Website BSMI kalian dapat meminta operator prodi atau himpunan kalian untuk mengupload content yang kalian butuhkan.",
                        "Apa perbedaan antara Website BSMI dan E-Learning ITERA ?"=>"Kedua website ini sama-sama memberikan kemudahan untuk mahasiswa ITERA untuk mengakses dan mencari referensi belajar yang kalian butuhkan. Namun, Website BSMI tidak memberi kalian batasan untuk mengakses materi di prodi masing-masing ataupun luar prodi dengan mengharuskan kalian enroll ke matakuliah tersebut. Jadi kalian juga bisa belajar dan menambah pengetahuan tentang luar prodi secara mudah dan praktis.");
                    foreach($array as $question=>$answer) {?>
                    <div class="q-a">
                        <h1 class = "q">
                        <?php echo "Q"?>
                        </h1>
                            <h1 class = "a">
                                <?php echo "A"?>
                            </h1>
                        <h3 class="question">
                            <?php echo $question?>
                        </h3>
                        <p class="answer">
                            <?php echo $answer?>
                         </p>
                            <?php echo "<br>"?>
                    </div>
                <?php } ?>
           
        </div>
           

</body>

<footer>
                       
                        <div class="q-a">
                        <center><h5 class = "q">
                        <?php echo "Dikembangkan Oleh"?>
                        </h5></center>
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
                        <center>v06042020</center>
                        </div>

                    </div>
                        
                        


      </footer>

</html>


