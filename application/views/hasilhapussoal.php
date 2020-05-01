<div class="lp-page" id="lp-1">
        <div id="lp-1-prodi"  class="title">
            <?php foreach ($matkul as $value) { ?>
            <h4>Soal latihan <?php echo $value['nama_matkul']?></h4>
            <?php } ?>
        </div>
        <div style="clear: both;"></div>

        <!-- tombol batal -->
        <div id="lp-1-hapusmateri">
            <a href="<?php echo base_url('soal/'.$kode_matkul) ?>" class="cancel"><h3>Batal</h3></a>
        </div>

        <form method="post" action="<?php echo base_url('welcome/hapussoal/'.$kode_matkul) ?>">

            <!-- tombol hapus -->
            <div id="lp-1-hapusmateri" >
            <input type="submit" id="delete" value="Hapus soal terpilih" onclick="return confirm('Yakin ingin hapus?')">
            </div>
            <div style="clear: both;"></div>
            <div id="lp-1-prodi-matkul" class="flexbox-container matkul-section">
                <?php foreach ($soal as $value) { ?>
                    <a class="card" href="<?php echo base_url('assets/soal/'.$value["file"])?>">
                        <div class="card-image">
                            <img src="<?php echo base_url('assets/img/card-bg/illustration_soal.jpg') ?>" alt="<?php echo $value["judul"] ?>">
                        </div>
                        <div class="card-title-small">
                            <h2><?php echo $value["judul"] ?></h2>
                        </div>
                    </a>
                    <input type="checkbox" name="pilih[]" value="<?php echo $value["kode_soal"];?>">
                <?php } ?>
            </div>      
        </div>
        </form>
</div>
