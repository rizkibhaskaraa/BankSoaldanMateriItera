    	<div id="lp-1-prodi-carisoal">
           	<?php foreach ($soal as $value) { ?>
        		<a href="<?php echo base_url()?>/assets/soal/<?php echo $value["file"]?>"><h2><?php echo $value["judul"] ?></h2></a>
        	<?php } ?>
        </div>