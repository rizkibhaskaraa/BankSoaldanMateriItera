	<div class="container">
		<div class="lp-page page-section jurusan-section" id="lp-1">
			<h3>Jurusan</h3>
			<div id="lp-1-jurusan" class="flexbox-container">
				<!-- JURUSAN SAINS -->
				<a href="#lp-1-sains" class="card">
					<div class="card-image">
						<img src="<?php echo base_url('assets/img/card-bg/jur_sains.jpg') ?>" alt="Jurusan Sains">
					</div>
					<div class="card-title">
						<h2>Jurusan Sains</h2>
					</div>
				</a>

				<!-- JURUSAN TEKNOLOGI INFRASTRUKTUR DAN KEWILAYAHAN -->
				<a href="#lp-1-jtik" class="card">
					<div class="card-image">
						<img src="<?php echo base_url('assets/img/card-bg/jur_jtik.jpg') ?>" alt="Jurusan Teknologi Infrastruktur dan Kewilayahan">
					</div>
					<div class="card-title">
						<h2>Jurusan Teknologi Infrastruktur dan Kewilayahan</h2>
					</div>
				</a>

				<!-- JURUSAN TEKNOLOGI PRODUKSI DAN INDUSTRI -->
				<a href="#lp-1-jteif" class="card">
					<div class="card-image">
						<img src="<?php echo base_url('assets/img/card-bg/jur_jtpi.jpg') ?>" alt="Jurusan Teknologi Produksi dan Industri">
					</div>
					<div class="card-title">
						<h2>Jurusan Teknologi Produksi dan Industri</h2>
					</div>
				</a>
			</div>
		</div>
		<div id="lp-1-sains" class="page-section prodi-section">
			<h3>Jurusan Sains</h3>
			<div id="lp-1-prodi-sains" class="flexbox-container">
				<?php foreach ($sains as $value) { ?>
					<a class="card" href="<?php echo base_url('prodi/' . $value["kode_prodi"]) ?>">
						<div class="card-image">
							<img src="<?php echo base_url('assets/img/card-bg/ps_' . $value["kode_prodi"] . '.jpg') ?>" alt="<?php echo $value['nama_prodi']; ?>">
						</div>
						<div class="card-title-small">
							<h2><?php echo $value['nama_prodi']; ?></h2>
						</div>
					</a>

				<?php } ?>
			</div>
		</div>
		<div id="lp-1-jtik" class="page-section prodi-section">
			<h3>Jurusan Teknologi Infrastruktur dan Kewilayahan</h3>
			<div id="lp-1-prodi-jtik" class="flexbox-container">
				<?php foreach ($jtik as $value) { ?>
					<a class="card" href="<?php echo base_url('prodi/' . $value["kode_prodi"]) ?>">
						<div class="card-image">
							<img src="<?php echo base_url('assets/img/card-bg/ps_' . $value["kode_prodi"] . '.jpg') ?>" alt="<?php echo $value['nama_prodi']; ?>">
						</div>
						<div class="card-title-small">
							<h2><?php echo $value['nama_prodi']; ?></h2>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
		<div id="lp-1-jteif" class="page-section prodi-section">
			<h3>Jurusan Teknologi Produksi dan Industri</h3>
			<div id="lp-1-prodi-jtpi" class="flexbox-container">
				<?php foreach ($jtpi as $value) { ?>
					<a class="card" href="<?php echo base_url('prodi/' . $value["kode_prodi"]) ?>">
						<div class="card-image">
							<img src="<?php echo base_url('assets/img/card-bg/ps_' . $value["kode_prodi"] . '.jpg') ?>" alt="<?php echo $value['nama_prodi']; ?>">
						</div>
						<div class="card-title-small">
							<h2><?php echo $value['nama_prodi']; ?></h2>
						</div>
					</a>
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