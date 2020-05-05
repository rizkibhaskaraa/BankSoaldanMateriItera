    <div class="lp-page" id="lp-1">
        <div>
            <?php foreach ($matkul as $value) { ?>
                <div class="title">
                    <h4><?php echo $value['nama_matkul']?></h4>
                </div>
        	<?php } ?>
        </div>
        <div id="description-box">
        	<?php foreach ($matkul as $value) { ?>
                <h2>Dosen</h2>
                <h2><?php echo $value['nama_dosen']?></h2>
            <?php } ?>
            <?php if ($cek_operatoradmin == true) {?>
                    <!-- tombol edit -->
                    <div class="edit-section">
                        <a href="<?php echo base_url('edit/matakuliah/'.$value["kode_matkul"])?>" class="button button-add">Edit</a>
                    </div>
            <?php } ?>
        </div>
        <div style="clear: both;"></div>
    	<div id="lp-1-prodi-pilihberkas" class="flexbox-container nowrap">
            <a href="<?php echo base_url('materi/'.$value["kode_matkul"])?>" class="card big-card">
                <div class="card-image">
                    <img src="<?php echo base_url('assets/img/card-bg/illustration_materi.jpg') ?>" alt="<?php echo 'Materi '.$value['nama_matkul']?>">
                </div>
                <div class="card-title">
                    <h2>Materi</h2>
                </div>
            </a>
            <a href="<?php echo base_url('soal/'.$value["kode_matkul"])?>" class="card big-card">
                <div class="card-image">
                    <img src="<?php echo base_url('assets/img/card-bg/illustration_soal.jpg') ?>" alt="<?php echo 'Soal '.$value['nama_matkul']?>">
                </div>
                <div class="card-title">
                    <h2>Soal</h2>
                </div>
            </a>
            <a href="<?php echo base_url('video/'.$value["kode_matkul"])?>" class="card big-card">
                <div class="card-image">
                    <img src="<?php echo base_url('assets/img/card-bg/illustration_video.jpg') ?>" alt="<?php echo 'Video '.$value['nama_matkul']?>">
                </div>
                <div class="card-title">
                    <h2>Video</h2>
                </div>
            </a>
        </div>
    </div>

</body>
</html>
