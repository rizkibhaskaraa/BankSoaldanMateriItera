    <div class="lp-page" id="lp-1	">
        <?php foreach ($matkul as $value) { ?>    
            <div id="lp-1-prodi">
                <h4>Edit Mata Kuliah <?php echo $value['nama_matkul']?></h4>
            </div>
            <div style="clear: both;"></div>
            <div id="form-addmateri">
                <?php echo  form_open_multipart('welcome/updateDeskripsiMatkul');?>
                    <div id="alert">
                    <?php if(validation_errors()): ?>
                        <h4><?php echo validation_errors(); ?></h4>
                    <?php endif; ?>
                    </div>
                    <h3>Kode Mata Kuliah</h3>
                    <input type="text" name="kode_matkul_lama" value="<?php echo $value['kode_matkul']?>" hidden>
                    <input type="text" name="kode_matkul" placeholder="Masukkan kode mata kuliah" value="<?php echo $value["kode_matkul"]?>"><br>
                    <h3>Nama Mata Kuliah</h3>
                    <input type="text" name="nama_matkul" placeholder="Masukkan nama mata kuliah" value="<?php echo $value["nama_matkul"]?>"></br>
                    <h3>Nama Dosen Pengampu</h3>
                    <input type="text" name="nama_dosen" placeholder="Masukkan nama dosen pengampu mata kuliah" value="<?php echo $value["nama_dosen"]?>"></br>
                    <input type="text" name="kode_prodi" value="<?php echo $value['kode_prodi']?>" hidden>
                    <input type="reset" value="reset">
                    <input type="submit" value="simpan">
                <?php echo form_close(); ?>
            </div>
        <?php } ?>
    </div>

</body>
</html>