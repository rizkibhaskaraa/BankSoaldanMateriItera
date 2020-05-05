    <div class="container" id="lp-1	">
        <div id="lp-1-prodi" class="title">
        	<?php foreach ($matkul as $value) { ?>
        	<h1>Upload Soal <?php echo $value['nama_matkul']?></h1>
        	<?php } ?>
        </div>
        <div style="clear: both;"></div>
        <div id="form-addmateri" class="form-input">
            <?php echo  form_open_multipart('welcome/addsoal');?>
                <div class="alert">
                <?php if(validation_errors()): ?>
                    <h4><?php echo validation_errors(); ?></h4>
                <?php endif; ?>
                </div>
                <div class="visible-form">
                    <label for="judul_materi">Judul Soal</label>
                    <input type="text" name="judul_soal" id="judul_materi" placeholder="isi judul soal"></br>
                    <label for="tahun_soal">Tahun Soal</label>
                    <input type="text" name="tahun_soal" id="taun_soal" placeholder="isi tahun"></br>
                    <label for="tipe_soal">Tipe Soal</label><br>
                    <select name="tipe_soal" id="tipe_soal">
                        <option value="UTS">UTS</option>
                        <option value="UAS">UAS</option>
                        <option value="KUIS">KUIS</option>
                    </select>
                    </br>
                    <h3>File soal</h3>
                    <div class="dropzone-wrapper">
                        <input type="file" name="File" id="file-upload" class="dropzone" required onchange="processSelectedFiles(this)">
                        <div class="dropzone-desc">
                            <img src="<?php echo base_url('assets/img/file_upload.png')?>" alt="">
                            <p id="file-text">Choose an file or drag it here.</p>
                        </div>
                    </div>
                </div>
                <input type="text" name="kode_matkul" value="<?php echo $value['kode_matkul']?>" hidden>
                <div class="form-submit">
                    <input class="button button-delete" type="reset" value="Reset">
                    <input class="button button-add" type="submit" value="Simpan">
                </div>
                
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

