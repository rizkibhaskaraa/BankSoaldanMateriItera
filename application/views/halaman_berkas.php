    <div class="lp-page" id="lp-1">
        <div id="lp-1-berkas">
            <?php foreach ($matkul as $value) { ?>
                <div class="title-1">
                    <h4><?php echo $value['nama_matkul']?></h4>
                </div>
        	<?php } ?>
        </div>
        <div id="lp-1-deskripsi">
        	<?php foreach ($matkul as $value) { ?>
	        <h2>Dosen</h2>
	        <h2><?php echo $value['nama_dosen']?></h2>
            <?php } ?>
            <?php if ($cek_operatoradmin == true) {?>
                    <!-- tombol edit -->
                    <div id="lp-1-editdeskripsi" class="form-submit button edit-button border-black">
                        <a href="<?php echo base_url('edit/matakuliah/'.$value["kode_matkul"])?>"><h3>Edit</h3></a>
                    </div>   
            <?php } ?>
        </div>
        <div style="clear: both;"></div>
    	<div id="lp-1-prodi-pilihberkas" class="flexbox-container jurusan-section">
            <a href="<?php echo base_url('materi/'.$value["kode_matkul"])?>" class="card">
                <div class="card-image">
                    <img src="<?php echo base_url('assets/img/card-bg/illustration_materi.jpg') ?>" alt="<?php echo 'Materi '.$value['nama_matkul']?>">
                </div>
                <div class="card-title">
                    <h2>Materi</h2>
                </div>
            </a>
            <a href="<?php echo base_url('soal/'.$value["kode_matkul"])?>" class="card">
                <div class="card-image">
                    <img src="<?php echo base_url('assets/img/card-bg/illustration_soal.jpg') ?>" alt="<?php echo 'Soal '.$value['nama_matkul']?>">
                </div>
                <div class="card-title">
                    <h2>Soal</h2>
                </div>
            </a>
            <a href="<?php echo base_url('video/'.$value["kode_matkul"])?>" class="card">
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
