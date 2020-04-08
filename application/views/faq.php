<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styleFAQ.css') ?>">
    <title>About</title>
</head>
<body>

<!-- <div style="border: 0; padding: 50px; background-color: #FFD700; text-align: left;"></div> -->

<div class="lp-header" id="home">
        <div class="header-logo">
            <!-- Diisi dengan logo ITERA dan Tulisan BSMI -->
            <img src="<?php echo base_url('assets/img/header_logo.png') ?>" alt="Bank Soal dan Materi Itera"> 
        </div>
        <div class="lp-navigation">
            <ul>
                <li><a href="<?php echo base_url() ?>">HOME</a></li>
                <li><a href="<?php echo base_url('welcome/halamanFaq') ?>">FAQ</a></li>
                <li><a href="<?php echo base_url('welcome/halamanAbout')?>">ABOUT</a></li>
            </ul>
        </div>
</div>
        
        <div class="faq-logo">
            <img src="<?php echo base_url('assets/img/faq-logo.png') ?>" alt=""> 
        </div>

        
        <div class="content-faq">
        <?php foreach($array as $question) {?>
		<div class="q-a">
			<h1 class="question">
				<?php echo $question?>
			</h1>
			<p class="answer">
				<?php echo $answer?>
			</p>
		</div>
	<?php } ?>
           

           
        </div>
           

</body>
</html>