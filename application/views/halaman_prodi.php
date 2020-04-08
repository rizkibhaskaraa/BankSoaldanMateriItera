	<div class="container">
		<div class="lp-page page-section jurusan-section" id="lp-1">
		<h3>Jurusan</h3>
			<div id="lp-1-jurusan" class="flexbox-container">
				<a href="#lp-1-sains">Sains</a>
				<a href="#lp-1-jtpi">Teknologi Produksi dan Industri</a>
				<a href="#lp-1-jtik">Teknologi Infrastruktur dan Kewilayahan</a>
			</div>
		</div>
		<div id="lp-1-sains" class="page-section prodi-section">
			<h3>Jurusan Sains</h3>
			<div id="lp-1-prodi-sains" class="flexbox-container">
				<?php foreach ($sains as $value) { ?>
					<a href="<?php echo base_url('prodi/'.$value["kode_prodi"]) ?>"> <h2><?php echo $value['nama_prodi']; ?></h2> </a>
				<?php } ?>
			</div>
		</div>
		<div id="lp-1-jtpi" class="page-section prodi-section">
			<h3>Jurusan Teknologi Produksi dan Industri</h3>
			<div id="lp-1-prodi-jtpi" class="flexbox-container">
				<?php foreach ($jtpi as $value) { ?>
					<a href="<?php echo base_url('prodi/'.$value["kode_prodi"]) ?>"><h2><?php echo $value['nama_prodi']; ?></h2></a>
				<?php } ?>
			</div>
		</div>
		<div id="lp-1-jtik" class="page-section prodi-section">
			<h3>Jurusan Teknologi Infrastruktur dan Kewilayahan</h3>
			<div id="lp-1-prodi-jtik" class="flexbox-container">
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
	</div>
</body>
</html>