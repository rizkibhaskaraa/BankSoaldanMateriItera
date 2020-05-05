<div class="container">
        <div id="lp-1">
            <div>
                <div class="title">
                    <h1><?php echo $prodi['nama_prodi']?></h1>
                </div>
                <div class="search-section">
                    <input type="text" class="search-bar" name="cari" id="cari" placeholder="Search">   </input>
                </div>
                <div style="clear: both;"></div>
            </div>
            
            <?php if ($cek_operatoradmin == true) {?>
            <!-- Tombol tambah mata kuliah -->
            <div>
                <a href="<?php echo base_url('add/matakuliah/'.$kode_prodi)?>" class="button button-add">
                    <span>Tambah Mata Kuliah</span>
                </a>
            </div>
            <?php } ?>
            <div style="clear: both;"></div>
            <div id="lp-1-prodi-matkul" class="flexbox-container wrap matkul-section">
                <?php foreach ($matkul as $value) { ?>
                    <a class="card small-card" href="<?php echo base_url('matakuliah/'.$value["kode_matkul"])?>">
						<div class="card-image">
							<img src="<?php echo base_url('assets/img/card-bg/ps_' . $value["kode_prodi"] . '.jpg') ?>" alt="<?php echo $value["nama_matkul"] ?>">
						</div>
						<div class="card-title">
							<h2><?php echo $value["nama_matkul"] ?></h2>
						</div>
					</a>
                <?php } ?>
            </div>
        </div>

        <input id="kode_prodi" value="<?php echo $prodi["kode_prodi"]; ?>" hidden>
        <input id="alamat" value="<?php echo base_url('welcome/hasilcarimatkul/')?>" hidden>

    </div>
	<script src="<?php echo base_url('assets/ajax/ajaxcarimatkul.js') ?>"></script>
</body>
</html>