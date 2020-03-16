
    	<div id="lp-1-prodi-carimatkul">
           	<?php foreach ($matkul as $value) { ?>
        		<a href="<?php echo base_url()?>/index.php/welcome/konten/<?php echo $value["kode_matkul"]?>"><h2><?php echo $value["nama_matkul"] ?></h2></a>
        	<?php } ?>
        </div>
   