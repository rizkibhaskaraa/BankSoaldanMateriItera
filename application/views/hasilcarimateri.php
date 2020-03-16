
    	<div id="lp-1-prodi-carimatkul">
           	<?php foreach ($materi as $value) { ?>
        		<a href="<?php echo base_url()?>/assets/materi/<?php echo $value["file"]?>"><h2><?php echo $value["judul"] ?></h2></a>
        	<?php } ?>
        </div>
   