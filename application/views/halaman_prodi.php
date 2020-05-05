	<div class="container">
		<div class="page-section" id="jurusan-section">
			<h3>Jurusan</h3>
			<div id="flex-container-jurusan" class="flexbox-container nowrap">
				<!-- JURUSAN SAINS -->
				<a href="#jurusan-sains" class="card big-card">
					<div class="card-image">
						<img src="<?php echo base_url('assets/img/card-bg/jur_sains.jpg') ?>" alt="Jurusan Sains">
					</div>
					<div class="card-title">
						<h2>Jurusan Sains</h2>
					</div>
				</a>

				<!-- JURUSAN TEKNOLOGI INFRASTRUKTUR DAN KEWILAYAHAN -->
				<a href="#jurusan-jtik" class="card big-card">
					<div class="card-image">
						<img src="<?php echo base_url('assets/img/card-bg/jur_jtik.jpg') ?>" alt="Jurusan Teknologi Infrastruktur dan Kewilayahan">
					</div>
					<div class="card-title">
						<h2>Jurusan Teknologi Infrastruktur dan Kewilayahan</h2>
					</div>
				</a>

				<!-- JURUSAN TEKNOLOGI PRODUKSI DAN INDUSTRI -->
				<a href="#jurusan-jtpi" class="card big-card">
					<div class="card-image">
						<img src="<?php echo base_url('assets/img/card-bg/jur_jtpi.jpg') ?>" alt="Jurusan Teknologi Produksi dan Industri">
					</div>
					<div class="card-title">
						<h2>Jurusan Teknologi Produksi dan Industri</h2>
					</div>
				</a>
			</div>
		</div>

		<!-- SECTION CONTAINER JURUSAN SAINS -->
		<div id="jurusan-sains" class="page-section prodi">
			<h3>Jurusan Sains</h3>
			<div class="flexbox-container wrap">
				<?php foreach ($sains as $value) { ?>
					<a class="card small-card" href="<?php echo base_url('prodi/' . $value["kode_prodi"]) ?>">
						<div class="card-image">
							<img src="<?php echo base_url('assets/img/card-bg/ps_' . $value["kode_prodi"] . '.jpg') ?>" alt="<?php echo $value['nama_prodi']; ?>">
						</div>
						<div class="card-title">
							<h2><?php echo $value['nama_prodi']; ?></h2>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>

		<!-- SECTION CONTAINER JTIK -->
		<div id="jurusan-jtik" class="page-section prodi">
			<h3>Jurusan Teknologi Infrastruktur dan Kewilayahan</h3>
			<div class="flexbox-container wrap">
				<?php foreach ($jtik as $value) { ?>
					<a class="card small-card" href="<?php echo base_url('prodi/' . $value["kode_prodi"]) ?>">
						<div class="card-image">
							<img src="<?php echo base_url('assets/img/card-bg/ps_' . $value["kode_prodi"] . '.jpg') ?>" alt="<?php echo $value['nama_prodi']; ?>">
						</div>
						<div class="card-title">
							<h2><?php echo $value['nama_prodi']; ?></h2>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>

		<!-- SECTION CONTAINER JTPI -->
		<div id="jurusan-jtpi" class="page-section prodi">
			<h3>Jurusan Teknologi Produksi dan Industri</h3>
			<div class="flexbox-container wrap">
				<?php foreach ($jtpi as $value) { ?>
					<a class="card small-card" href="<?php echo base_url('prodi/' . $value["kode_prodi"]) ?>">
						<div class="card-image">
							<img src="<?php echo base_url('assets/img/card-bg/ps_' . $value["kode_prodi"] . '.jpg') ?>" alt="<?php echo $value['nama_prodi']; ?>">
						</div>
						<div class="card-title">
							<h2><?php echo $value['nama_prodi']; ?></h2>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<div id="up" class="shaped-card">
		<a href="#home">
			<img src="<?php echo base_url('assets/img/up.png') ?>">
		</a>
	</div>
	<script>
		var toTopButton = document.getElementById("up");

		window.onscroll = function() {
			if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
				toTopButton.style.display = "block";
			} else {
				toTopButton.style.display = "none";
			}
		};
	</script>
</body>
</html>