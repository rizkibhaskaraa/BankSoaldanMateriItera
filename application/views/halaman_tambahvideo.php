<div class="container" id="lp-1	">
    <div id="lp-1-prodi" class="title">
        <?php foreach ($matkul as $value) { ?>
        <h1>Upload video <?php echo $value['nama_matkul']?></h1>
        <?php } ?>
    </div>
    <div style="clear: both;"></div>
    <div id="form-addmateri" class="form-input">
        <?php echo  form_open_multipart('welcome/addvideo');?>
            

            <div class="visible-form">
                <div class="alert">
                    <?php if(validation_errors()): ?>
                        <h4><?php echo validation_errors(); ?></h4>
                    <?php endif; ?>
                </div>
                <label for="judul_video">Judul Video</label>
                <input type="text" name="judul_video" id="judul_video" placeholder="Masukkan judul video">
                <label for="link_video">Link Video dari YouTube</label>
                <input type="text" name="link_video" placeholder="Masukkan URL video">
            </div>
            <input type="text" name="kode_matkul" value="<?php echo $value['kode_matkul']?>" hidden>
            <div class="form-submit">
                <input class="button buton-delete" type="reset" value="Reset">
                <input class="button button-add" type="submit" value="Simpan">
            </div>
        <?php echo form_close(); ?>
    </div>    
</div>

</body>
</html>

