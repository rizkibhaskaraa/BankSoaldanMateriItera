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
        	<?php foreach ($matkul as $value) { ?>
        	<h4>Video referensi <?php echo $value['nama_matkul']?></h4>
        	<?php } ?>
        </div>
        <div style="clear: both;"></div>
    	<div id="lp-1-prodi-matkul">    
            <?php foreach($video as $value) {?>
            <div id="video">
                <div id="v-video">
                <iframe src="https://www.youtube.com/embed/<?php echo $value['link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 10%;" allowfullscreen></iframe>
                <h3><?php echo $value['judul'] ?></h3>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>


</body>
</html>