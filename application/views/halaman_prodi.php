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
    <div class="lp-page" id="lp-1">
        <div id="lp-1-jurusan">
        	<a href="#lp-1-sains" id="a-sains">JURUSAN SAINS</a>
        	<a href="#lp-1-jtpi">JURUSAN TEKNOLOGI PRODUKSI DAN INDUSTRI </a>
        	<a href="#lp-1-jtik">JURUSAN TEKNOLOGI INFRASTRUKTUR DAN KEWILAYAHAN</a>
        </div>
    </div>
    <div id="lp-1-sains">
    	<h3>JURUSAN SAINS</h3>
    	<div id="lp-1-prodi-sains">
        	<?php foreach ($sains as $value) { ?>
        		<a href=""><h2><?php echo $value['nama_prodi']; ?></h2></a>
        	<?php } ?>
        </div>
    </div>
    <div id="lp-1-jtpi">
    	<h3>JURUSAN TEKNOLOGI PRODUKSI DAN INDUSTRI</h3>
    	<div id="lp-1-prodi-jtpi">
           	<?php foreach ($jtpi as $value) { ?>
        		<a href=""><h2><?php echo $value['nama_prodi']; ?></h2></a>
        	<?php } ?>
        </div>
    </div>
    <div id="lp-1-jtik">
    	<h3>JURUSAN TEKNOLOGI INFRASTRUKTUR DAN KEWILAYAHAN</h3>
    	<div id="lp-1-prodi-jtik">
            <?php foreach ($jtik as $value) { ?>
        		<a href=""><h2><?php echo $value['nama_prodi']; ?></h2></a>
        	<?php } ?>
        </div>
    </div>
    <div id="up">
    	<a href="#home">
	    	<img src="<?php echo base_url('assets/img/up.png') ?>		"> 
    	</a>
    </div>
</body>
</html>