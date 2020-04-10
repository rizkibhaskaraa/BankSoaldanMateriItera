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
           	<a href="<?php echo base_url('materi/'.$value["kode_matkul"])?>"><h2>Materi</h2></a>
           	<a href="<?php echo base_url('soal/'.$value["kode_matkul"])?>"><h2>Soal</h2></a>
           	<a href="<?php echo base_url('video/'.$value["kode_matkul"])?>"><h2>Video</h2></a>
        </div>
    </div>

</body>
</html>
