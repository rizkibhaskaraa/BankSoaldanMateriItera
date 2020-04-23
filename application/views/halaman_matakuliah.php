
    <div class="container">
        <div class="lp-page" id="lp-1	">
            <div id="lp-1-prodi" class="title">
                
                <h1><?php echo $prodi['nama_prodi']?></h1>
                
            </div>
            <div id="lp-1-cari" class="search-section">
                <input type="text" class="white-black border-black search-bar" name="cari" id="cari" placeholder="Search">   </input>
            </div>
            <div style="clear: both;"></div>
            <?php if ($cek_operatoradmin == true) {?>
            <!-- tombol tambah -->
            <div id="lp-1-tambahmateri">
                <a href="<?php echo base_url('add/matakuliah/'.$kode_prodi)?>" class="tombol  border-black">
                    <span>Tambah Mata Kuliah</span>
                </a>
            </div>
            <?php } ?>
            <div style="clear: both;"></div>
            <div id="lp-1-prodi-matkul" class="flexbox-container matkul-section">
                <?php foreach ($matkul as $value) { ?>
                    <a href="<?php echo base_url('matakuliah/'.$value["kode_matkul"])?>"><h2><?php echo $value["nama_matkul"] ?></h2></a>
                <?php } ?>
            </div>
        </div>

        <input id="kode_prodi" value="<?php echo $prodi["kode_prodi"]; ?>" hidden>

        <input id="alamat" value="<?php echo base_url('welcome/hasilcarimatkul/')?>" hidden>

    </div>
	<script src="<?php echo base_url('assets/ajax/ajaxcarimatkul.js') ?>"></script>
</body>
</html>