<div id="lp-1-prodi-carimatkul" class="flexbox-container matkul-section">
    <?php foreach ($matkul as $value) { ?>
    	<a class="card" href="<?php echo base_url('matakuliah/'.$value["kode_matkul"])?>">
			<div class="card-image">
				<img src="<?php echo base_url('assets/img/card-bg/ps_' . $value["kode_prodi"] . '.jpg') ?>" alt="<?php echo $value["nama_matkul"] ?>">
			</div>
			<div class="card-title-small">
				<h2><?php echo $value["nama_matkul"] ?></h2>
			</div>
		</a>
    <?php } ?>
</div>
      
   