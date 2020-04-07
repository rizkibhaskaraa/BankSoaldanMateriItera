    <div class="lp-page" id="lp-1	">
        <div id="lp-1-prodi">
        	
        	<h4><?php echo $prodi['nama_prodi']?></h4>
        	
        </div>
        <div id="lp-1-cari">
        	<input type="text" name="cari" id="cari" placeholder="ketik kata kunci pencarian">   </input>
        </div>
        <div style="clear: both;"></div>
        <?php if ($cek_operatoradmin == true) {?>
        <!-- tombol tambah -->
        <div id="lp-1-tambahmateri">
            <a href="<?php echo base_url('add/matakuliah/'.$kode_prodi)?>">
                <h3>Tambah Mata Kuliah</h3>
            </a>
        </div>  
        <?php } ?>
        <div style="clear: both;"></div>
    	<div id="lp-1-prodi-matkul">
           	<?php foreach ($matkul as $value) { ?>
        		<a href="<?php echo base_url('matakuliah/'.$value["kode_matkul"])?>"><h2><?php echo $value["nama_matkul"] ?></h2></a>
        	<?php } ?>
        </div>
    </div>

    <input id="kode_prodi" value="<?php echo $prodi["kode_prodi"]; ?>" hidden>

	<input id="alamat" value="<?php echo base_url('welcome/hasilcarimatkul/')?>" hidden>
    
	<script src="<?php echo base_url('assets/ajax/ajaxcarimatkul.js') ?>"></script>
</body>
</html>