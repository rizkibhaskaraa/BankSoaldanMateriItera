<div id="lp-1-prodi"  class="title">
    <?php foreach ($matkul as $value) { ?>
    <h4>Soal latihan <?php echo $value['nama_matkul']?></h4>
    <?php } ?>
</div>
<div style="clear: both;"></div>

<form method="post" action="<?php echo base_url('welcome/hapussoal/'.$kode_matkul) ?>">
    <div class="action-section">
        <!-- tombol batal -->
        <div id="lp-1-hapusmateri">
            <a href="<?php echo base_url('soal/'.$kode_matkul) ?>" class="button button-add"><h3>Batal</h3></a>
        </div>
        <!-- tombol hapus -->
        <div id="lp-1-hapusmateri" >
            <input type="submit" class="button button-delete" id="delete" value="Hapus soal terpilih" onclick="return confirm('Anda yakin ingin menghapus soal terpilih?')">
        </div>
    </div>
    
    <div style="clear: both;"></div>
    <div id="lp-1-prodi-matkul" class="flexbox-container wrap">
        <?php $increment = 0; ?>    
        <?php foreach ($soal as $value) { ?>
            <a class="card-no-hover small-card element-delete" href="<?php echo base_url('assets/soal/'.$value["file"])?>">
                <div class="card-image">
                    <img src="<?php echo base_url('assets/img/card-bg/illustration_soal.jpg') ?>" alt="<?php echo $value["judul"] ?>">
                </div>
                <div class="card-title">
                    <h2><?php echo $value["judul"] ?></h2>
                </div>
                <input type="checkbox" id="checkbox<?php echo $increment; ?>" class="checkbox-delete" name="pilih[]" value="<?php echo $value["kode_soal"];?>">
                <label class="checkbox-delete-cover" for="checkbox<?php echo $increment; ?>"></label>
                <div class="custom-checkbox"></div>
            </a>
            <?php $increment = $increment + 1; ?>
        <?php } ?>
    </div>      
</div>
</form>
