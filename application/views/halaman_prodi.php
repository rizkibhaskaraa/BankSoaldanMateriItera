    <div class="lp-page" id="lp-1">
        <div id="lp-1-jurusan">
        	<a href="#lp-1-sains">JURUSAN SAINS</a>
        	<a href="#lp-1-jtpi">JURUSAN TEKNOLOGI PRODUKSI DAN INDUSTRI </a>
        	<a href="#lp-1-jtik">JURUSAN TEKNOLOGI INFRASTRUKTUR DAN KEWILAYAHAN</a>
        </div>
    </div>
    <div id="lp-1-sains">
    	<h3>JURUSAN SAINS</h3>
    	<div id="lp-1-prodi-sains">
        	<?php foreach ($sains as $value) { ?>
        		<a href="<?php echo base_url('prodi/'.$value["kode_prodi"]) ?>"> <h2><?php echo $value['nama_prodi']; ?></h2> </a>
        	<?php } ?>
        </div>
    </div>
    <div id="lp-1-jtpi">
    	<h3>JURUSAN TEKNOLOGI PRODUKSI DAN INDUSTRI</h3>
    	<div id="lp-1-prodi-jtpi">
           	<?php foreach ($jtpi as $value) { ?>
        		<a href="<?php echo base_url('prodi/'.$value["kode_prodi"]) ?>"><h2><?php echo $value['nama_prodi']; ?></h2></a>
        	<?php } ?>
        </div>
    </div>
    <div id="lp-1-jtik">
    	<h3>JURUSAN TEKNOLOGI INFRASTRUKTUR DAN KEWILAYAHAN</h3>
    	<div id="lp-1-prodi-jtik">
            <?php foreach ($jtik as $value) { ?>
        		<a href="<?php echo base_url('prodi/'.$value["kode_prodi"]) ?>"><h2><?php echo $value['nama_prodi']; ?></h2></a>
        	<?php } ?>
        </div>
    </div>
    <div id="up">
    	<a href="#home">
	    	<img src="<?php echo base_url('assets/img/up.png') ?>"> 
    	</a>
    </div>
</body>
</html>