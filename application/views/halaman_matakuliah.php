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
        <div id="lp-1-prodi">
        	
        	<h4><?php echo $prodi['nama_prodi']?></h4>
        	
        </div>
        <div id="lp-1-cari">
        	<input type="text" name="cari" id="cari" placeholder="ketik kata kunci pencarian">   </input>
        </div>
        <div style="clear: both;"></div>
    	<div id="lp-1-prodi-matkul">
           	<?php foreach ($matkul as $value) { ?>
        		<a href="<?php echo base_url()?>/index.php/welcome/konten/<?php echo $value["kode_matkul"]?>"><h2><?php echo $value["nama_matkul"] ?></h2></a>
        	<?php } ?>
        </div>
    </div>

    <input id="kode_prodi" value="<?php echo $prodi["kode_prodi"]; ?>" hidden>

	<input id="alamat" value="<?php echo base_url() ?>index.php/welcome/hasilcarimatkul/" hidden>
    
	<script src="<?php echo base_url() ?>/assets/ajax/ajaxcarimatkul.js"></script>
</body>
</html>