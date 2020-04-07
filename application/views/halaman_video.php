    <div class="lp-page" id="lp-1">
        <div id="lp-1-prodi">
        	<?php foreach ($matkul as $value) { ?>
        	<h4>Video referensi <?php echo $value['nama_matkul']?></h4>
        	<?php } ?>
        </div>

        <div style="clear: both;"></div>
        <?php if ($cek_operatoradmin == true) {?>
             <div id="lp-1-tambahmateri">
                <a href="<?php echo base_url('add/video/'.$value["kode_matkul"])?>"><h3>Tambah Video</h3></a>
            </div>

             <!-- tombol hapus -->
            <div id="lp-1-hapusmateri">
                <input type="submit" name="hapus" id="hapus" value="Hapus Video">
            </div>
            <div style="clear: both;"></div>
        <?php } ?>
    	<div id="lp-1-prodi-matkul">    
            <?php foreach($video as $value) {?>
            <div id="video">
                <div id="v-video">
                <iframe src="https://www.youtube.com/embed/<?php echo $value['link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 10%;" allowfullscreen></iframe>
                <h3><?php echo $value['judul'] ?></h3>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <input id="kode_matkul" value="<?php foreach ($matkul as $value){ echo $value['kode_matkul']; }?>" hidden>

    <input id="alamathapus" value="<?php echo base_url('welcome/hasiltombolhapusvideo/') ?>" hidden>
    
    <script src="<?php echo base_url('assets/ajax/ajaxhapusvideo.js') ?>"></script>

</body>
</html>