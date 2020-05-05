
<div id="lp-1-prodi" class="title">
    <?php foreach ($matkul as $value) { ?>
    <h4>Video referensi <?php echo $value['nama_matkul']?></h4>
    <?php } ?>
</div>
<div style="clear: both;"></div>



<form method="post" action="<?php echo base_url('welcome/hapusvideo/'.$kode_matkul) ?>">
    <div class="action-section">
        <!-- tombol batal -->
        <div id="lp-1-hapusmateri">
            <a href="<?php echo base_url('video/'.$kode_matkul) ?>" class="button button-add"><h3>Batal</h3></a>
        </div>
        <!-- tombol hapus -->
        <div id="lp-1-hapusmateri">
            <input type="submit" class="button button-delete" id="delete" value="Hapus video terpilih" onclick="return confirm('yakin ingin hapus?')">
        </div>
    </div>
    
    <div style="clear: both;"></div>

    <div id="lp-1-prodi-matkul" class="flexbox-container">
    <?php foreach($video as $value) {?>
        <div id="video" class="video element-delete">
            <div id="v-video">
                <iframe src="https://www.youtube.com/embed/<?php echo $value['link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
                <h3><?php echo $value['judul']?></h3>
            </div>
            <input class="chekbox-delete" type="checkbox" name="pilih[]" value="<?php echo $value["kode_video"];?>">
        </div>
    
    <?php } ?>

</div>
</form>
