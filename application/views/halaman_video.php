    <div class="container" id="lp-1">
        <div id="lp-1-prodi" class="title">
        	<?php foreach ($matkul as $value) { ?>
        	<h4>Video referensi <?php echo $value['nama_matkul']?></h4>
        	<?php } ?>
        </div>

        <div style="clear: both;"></div>
        <?php if ($cek_operatoradmin == true) {?>
            <div class="action-section">
                <div id="lp-1-tambahmateri">
                    <a class="button button-add" href="<?php echo base_url('add/video/'.$value["kode_matkul"])?>"><h3>Tambah Video</h3></a>
                </div>

                <!-- tombol hapus -->
                <div id="lp-1-hapusmateri">
                    <input class="button button-delete" type="submit" name="hapus" id="hapus" value="Hapus Video">
                </div>
            </div>
             
            <div style="clear: both;"></div>
        <?php } ?>
    	<div id="lp-1-prodi-matkul" class="flexbox-container wrap"> 
            <?php foreach($video as $value) {?>
                <div class="card small-card video" onclick="openFullScreen(this)">
                    <div class="card-image">
                        <img src="https://img.youtube.com/vi/<?php echo $value['link'] ?>/sddefault.jpg" alt="<?php echo $value["judul"] ?>">
                    </div>
                    <div class="card-title">
                        <h2><?php echo $value["judul"] ?></h2>
                    </div>
                    <div class="full-screen-video">
                        <iframe class="embedded-video" src="https://www.youtube.com/embed/<?php echo $value['link'] ?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></iframe>
                    </div>                    
                </div>
            <?php } ?>
            <div id="close-full-screen" class="close-full-screen" onclick="closeFullScreen(this)"><span>&#x2716;</span></div>
        </div>
    </div>

    <input id="kode_matkul" value="<?php foreach ($matkul as $value){ echo $value['kode_matkul']; }?>" hidden>

    <input id="alamathapus" value="<?php echo base_url('welcome/hasiltombolhapusvideo/') ?>" hidden>
    
    <script src="<?php echo base_url('assets/ajax/ajaxhapusvideo.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/landing-page.js') ?>"></script>
</body>
</html>