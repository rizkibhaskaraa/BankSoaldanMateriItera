<div class="lp-page" id="lp-1	">
        <div id="lp-1-prodi" class="title">
        	<?php foreach ($matkul as $value) { ?>
        	<h4>Upload video <?php echo $value['nama_matkul']?></h4>
        	<?php } ?>
        </div>
        <div style="clear: both;"></div>
        <div id="form-addmateri" class="form-input">
            <?php echo  form_open_multipart('welcome/addvideo');?>
                <div class="alert">
                <?php if(validation_errors()): ?>
                    <h4><?php echo validation_errors(); ?></h4>
                <?php endif; ?>
                </div>

                <div class="visible-form">
                    <h3>Judul Video <?php echo $value["nama_matkul"];?></h3>
                    <input type="text" name="judul_video" id="judul_video" placeholder="isi judul video"></br>
                    <h3>Link Video dari youtube</h3>
                    <input type="text" name="link_video" placeholder="isi link video"></br>
                </div>
                <input type="text" name="kode_matkul" value="<?php echo $value['kode_matkul']?>" hidden>
                <div class="form-submit">
                    <input type="reset" value="reset">
                    <input type="submit" value="simpan">
                </div>
            <?php echo form_close(); ?>
        </div>    
    </div>

</body>
</html>

