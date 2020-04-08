<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styleAbout.css') ?>">
    <title>About</title>
</head>
<body>

<!-- <div style="border: 0; padding: 50px; background-color: #FFD700; text-align: left;"></div> -->

<div class="lp-header" id="home">
        <div class="header-logo">
            <img src="<?php echo base_url('assets/img/header_logo.png') ?>" alt="Bank Soal dan Materi Itera"> 
        </div>

        <div class="lp-navigation">
            <ul>
                <li><a href="<?php echo base_url() ?>">HOME</a></li>
                <li><a href="<?php echo base_url('welcome/halamanFaq') ?>">FAQ</a></li>
                <li><a href="<?php echo base_url('welcome/halamanAbout')?>">ABOUT</a></li>
            </ul>
            <div class="about-logo">
            <img src="<?php echo base_url('assets/img/about-us.png') ?>" alt=""> 
        </div>
        </div>


            <div class="logos">
                <div class="iniTeam">
                <img src="<?php echo base_url('assets/img/initeam.png') ?>" alt=""> 
                </div>
                <div class="collabs">
                    <img src="<?php echo base_url('assets/img/silangg.png') ?>" alt=""> 
                    </div>

                <div class="kmitera">
                    <img src="<?php echo base_url('assets/img/kmitera.png') ?>" alt=""> 
                    </div>
   
            </div>
                    
                    

</div>
                        <div class="content">
                        <center><p class = "text">
                        <?php echo "Website ini terbentuk karena adanya kolaborasi antara INITEAM dari beberapa Mahasiswa Teknik Informatika '17 dan KM ITERA khususnya dari Kementrian Riset & Pendidikan. "?>
                        </p></center>
                        
                        <div class="bawah">
                            <?php echo "Perwakilan dari KM ITERA yang mewakili yaitu Anbia S selaku Mentri Riset & Pendidikan ITERA dan untuk INITEAM sendiri terdiri dari 5 orang adalah sebagai berikut : "?>    
                        </p>

                        <div class="anggota">
                        <?php
                            $nama = array(
                                14115047=>"Roy Putra O",
                                14117073=>"Nova Yastika",
                                14117098=>"Riwandy ",
                                14117084=>"Rizki Bhaskara M.E ",
                                14117055=>"Aldi Indrawan");
                            
                            foreach ($nama as $nim =>$nama)
                            {
                            echo "$nama ($nim)";
                            echo "<br />";
                            }
                            ?>
                        </div>
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
                        <center>v05042020</center>
                        </div>

                    </div>
                        
                        


      </footer>

</html>