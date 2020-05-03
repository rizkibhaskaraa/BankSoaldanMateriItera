    	<div id="lp-1-prodi-carisoal">
		<?php foreach ($soal as $value) { ?>
                <a class="card" href="<?php echo base_url('assets/soal/'.$value["file"])?>">
                    <div class="card-image">
                        <img src="<?php echo base_url('assets/img/card-bg/illustration_soal.jpg') ?>" alt="<?php echo $value["judul"] ?>">
                    </div>
                    <div class="card-title-small">
                        <h2><?php echo $value["judul"] ?></h2>
                    </div>
                </a>
        	<?php } ?>
        </div>