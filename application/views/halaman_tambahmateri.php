    <div class="container" id="lp-1	">
        <div id="lp-1-prodi" class="title">
        	<?php foreach ($matkul as $value) { ?>
        	<h1>Upload Materi <?php echo $value['nama_matkul']?></h1>
        	<?php } ?>
        </div>
        <div style="clear: both;"></div>
        <div id="form-addmateri" class="form-input">
            <?php echo  form_open_multipart('welcome/addmateri');?>
                <div class="visible-form">
                    <div class="alert">
                        <?php if(validation_errors()): ?>
                            <h4><?php echo validation_errors(); ?></h4>
                        <?php endif; ?>
                    </div>
                    <label for="judul_materi">Judul materi</label>
                    <input type="text" name="judul_materi" id="judul_materi" placeholder="isi judul materi" required></br>
                    <div class="dropzone-wrapper">
                        <input type="file" name="File" id="file-upload" class="dropzone" required onchange="processSelectedFiles(this)">
                        <div class="dropzone-desc">
                            <img src="<?php echo base_url('assets/img/file_upload.png')?>" alt="">
                            <p id="file-text">Choose a file or drag it here.</p>
                        </div>
                    </div>
                </div>
                <input type="text" name="kode_matkul" value="<?php echo $value['kode_matkul']?>" hidden>
                <div class="form-submit">
                    <input class="button button-delete" type="reset" value="Reset">
                    <input class="button button-add" type="submit" value="Simpan">
                </div>
                
                <div style="clear: both;"></div>
            <?php echo form_close(); ?>
        </div>    
    </div>
    <script>
        var fileText = document.getElementById('file-text');
        function processSelectedFiles(fileInput) {
            var files = fileInput.files;
            fileText.innerHTML = "File chosen : " + files[0].name;
        }
    </script>
</body>
</html>

