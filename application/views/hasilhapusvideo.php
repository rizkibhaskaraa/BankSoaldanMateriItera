
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

    <div id="lp-1-prodi-matkul" class="flexbox-container wrap">
        <?php $increment = 0; ?>
        <?php foreach($video as $value) {?>
            <div class="card-no-hover small-card video element-delete">
                <div class="card-image">
                    <img src="https://img.youtube.com/vi/<?php echo $value['link'] ?>/sddefault.jpg" alt="<?php echo $value["judul"] ?>">
                </div>
                <div class="card-title">
                    <h2><?php echo $value["judul"] ?></h2>
                </div>
                <input type="checkbox" id="checkbox<?php echo $increment; ?>" class="checkbox-delete" name="pilih[]" value="<?php echo $value["kode_video"];?>">
                <label class="checkbox-delete-cover" for="checkbox<?php echo $increment; ?>"></label>
                <div class="custom-checkbox"></div>
            </div>
            <?php $increment = $increment + 1; ?>
        <?php } ?>
    </div>
</form>
