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
                <li><a href="#">HOME</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="lp-page" id="lp-1	">
        <div id="lp-1-berkas">
        	<?php foreach ($matkul as $value) { ?>
            <h4><?php echo $value['nama_matkul']?></h4>
            <a href="<?php echo base_url()?>/welcome/editmatkul/<?php echo $value["kode_matkul"]?>">Edit</a>
        	<?php } ?>
        </div>
        <div id="lp-1-deskripsi">
        	<?php foreach ($matkul as $value) { ?>
	        <h2>Dosen</h2>
	        <h2><?php echo $value['nama_dosen']?></h2>
            <?php } ?>
        </div>
    	<div id="lp-1-prodi-pilihberkas">
           	<a href="<?php echo base_url()?>/index.php/welcome/materi/<?php echo $value["kode_matkul"]?>"><h2>Materi</h2></a>
           	<a href="<?php echo base_url()?>/index.php/welcome/soal/<?php echo $value["kode_matkul"]?>"><h2>Soal</h2></a>
           	<a href="<?php echo base_url()?>/index.php/welcome/video/<?php echo $value["kode_matkul"]?>""><h2>Video</h2></a>
        </div>
    </div>

</body>
</html>
