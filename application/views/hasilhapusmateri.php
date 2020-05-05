    <div id="lp-1-prodi" class="title">
        <?php foreach ($matkul as $value) { ?>
            <h1>Materi <?php echo $value['nama_matkul']?></h1>
        <?php } ?>
    </div>
    <div style="clear: both;"></div>

    

    <form method="post" action="<?php echo base_url('welcome/hapusmateri/'.$kode_matkul) ?>">
        <div class="action-section">
            <!-- tombol batal -->
            <div id="lp-1-hapusmateri">
                <a class="button button-add" href="<?php echo base_url('materi/'.$kode_matkul) ?>"><h3>Batal</h3></a>
            </div>
            <!-- tombol hapus -->
            <div id="lp-1-hapusmateri">
                <input type="submit" id="delete" class="button button-delete" value="Hapus materi terpilih" onclick="return confirm('Anda yakin ingin menghapus materi terpilih?')">
            </div>
        </div>
        
        <div style="clear: both;"></div>
        <div id="lp-1-prodi-matkul" class="flexbox-container wrap">
            <?php foreach ($materi as $value) { ?>
                <a class="card small-card element-delete" href="<?php echo base_url('assets/materi/'.$value["file"])?>">
                    <div class="card-image">
                        <img src="<?php echo base_url('assets/img/card-bg/illustration_materi.jpg') ?>" alt="<?php echo $value["judul"] ?>">
                    </div>
                    <div class="card-title">
                        <h2><?php echo $value["judul"] ?></h2>
                    </div>
                    <input type="checkbox" class="checkbox-delete" name="pilih[]" value="<?php echo $value["kode_materi"];?>">
                </a>
                
            <?php } ?>
        </div>      
    </form>
