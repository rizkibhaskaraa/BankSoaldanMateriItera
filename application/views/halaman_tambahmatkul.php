    <div class="lp-page" id="lp-1">
        <div id="lp-1-prodi" class="title">
            <h1>Tambah Mata Kuliah</h1>
        </div>
        <div style="clear: both;"></div>
        <div id="form-addmateri" class="form-input">
            <?php echo  form_open_multipart('welcome/addmatkul');?>
                <div class="alert">
                <?php if(validation_errors()): ?>
                    <h4><?php echo validation_errors(); ?></h4>
                <?php endif; ?>
                </div>
                <div class="visible-form">
                    <h3>Kode Mata Kuliah</h3>
                    <input type="text" name="kode_matkul" placeholder="Masukkan kode mata kuliah"><br>
                    <h3>Nama Mata Kuliah</h3>
                    <input type="text" name="nama_matkul" placeholder="Masukkan nama mata kuliah"></br>
                    <h3>Nama Dosen Pengampu</h3>
                    <input type="text" name="nama_dosen" placeholder="Masukkan nama dosen pengampu mata kuliah"></br>
                </div>
                
                <input type="text" name="kode_prodi" value="<?php echo $prodi['kode_prodi']?>" hidden>
                <div class="form-submit">
                    <input class="button button-add" type="reset" value="Reset" >
                    <input class="button button-delete" type="submit" value="Simpan" >
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>

</body>
</html>