    <div class="container">
        <div class="lp-page" id="lp-1">
            <?php foreach ($matkul as $value) { ?>    
                <div id="lp-1-prodi" class="title">
                    <h4>Edit Mata Kuliah <?php echo $value['nama_matkul']?></h4>
                </div>
                <div style="clear: both;"></div>
                <div id="form-addmateri form-input">
                    <?php echo  form_open_multipart('welcome/updateDeskripsiMatkul');?>
                        <div id="alert">
                        <?php if(validation_errors()): ?>
                            <h4><?php echo validation_errors(); ?></h4>
                        <?php endif; ?>
                        </div>
                        <div class="visible-form">
                            <h3>Kode Mata Kuliah</h3>
                            <input type="text" name="kode_matkul" placeholder="Masukkan kode mata kuliah" value="<?php echo $value["kode_matkul"]?>"><br>
                            <h3>Nama Mata Kuliah</h3>
                            <input type="text" name="nama_matkul" placeholder="Masukkan nama mata kuliah" value="<?php echo $value["nama_matkul"]?>"></br>
                            <h3>Nama Dosen Pengampu</h3>
                            <input type="text" name="nama_dosen" placeholder="Masukkan nama dosen pengampu mata kuliah" value="<?php echo $value["nama_dosen"]?>"></br>
                        </div>
                        <input type="text" name="kode_matkul_lama" value="<?php echo $value['kode_matkul']?>" hidden>
                        <input type="text" name="kode_prodi" value="<?php echo $value['kode_prodi']?>" hidden>
                        <div class="form-submit">
                            <input type="reset" id="reset" value="Reset">
                            <input type="submit" id="submit" value="Simpan">
                        </div>
                        
                    <?php echo form_close(); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>