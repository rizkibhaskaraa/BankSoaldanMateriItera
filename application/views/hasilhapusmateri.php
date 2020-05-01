<div class="lp-page" id="lp-1">
        <div id="lp-1-prodi" class="title">
            <?php foreach ($matkul as $value) { ?>
            <h4>Materi <?php echo $value['nama_matkul']?></h4>
            <?php } ?>
        </div>
        <div style="clear: both;"></div>

        <!-- tombol batal -->
        <div id="lp-1-hapusmateri">
            <a class="cancel" href="<?php echo base_url('materi/'.$kode_matkul) ?>"><h3>Batal</h3></a>
        </div>

        <form method="post" action="<?php echo base_url('welcome/hapusmateri/'.$kode_matkul) ?>">

            <!-- tombol hapus -->
            <div id="lp-1-hapusmateri">
            <input type="submit" id="delete" value="Hapus materi terpilih" onclick="return confirm('yakin ingin hapus?')">
            </div>
            <div style="clear: both;"></div>
            <div id="lp-1-prodi-matkul" class="flexbox-container matkul-section">
                <?php foreach ($materi as $value) { ?>
                    <a class="card" href="<?php echo base_url('assets/materi/'.$value["file"])?>">
                        <div class="card-image">
                            <img src="<?php echo base_url('assets/img/card-bg/illustration_materi.jpg') ?>" alt="<?php echo $value["judul"] ?>">
                        </div>
                        <div class="card-title-small">
                            <h2><?php echo $value["judul"] ?></h2>
                        </div>
                    </a>
                    <input type="checkbox" name="pilih[]" value="<?php echo $value["kode_materi"];?>">
                <?php } ?>
            </div>      
        </form>
</div>
