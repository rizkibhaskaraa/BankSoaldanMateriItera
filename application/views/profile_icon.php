<?php if ($cek_operatoradmin == true) {?>
    <div class="profile-section">
        <div id="user-identifier">
            <div class="user-name">
                <span><?php echo $_SESSION["greetings"] ?></span>
            </div>
            <div id="user-icon">
                <img src="<?php echo base_url('assets/img/user.png')?>" alt="user">
                <div class="more-options">
                    <img src="<?php echo base_url('assets/img/triangle.png')?>"alt="triangle" id="triangle">
                </div>
            </div>  
            

            <div id="logout-button">
                <a href="<?php echo base_url('welcome/hapussession')?>">
                    <span>Logout</span>
                    <img src="<?php echo base_url('assets/img/logout.png')?>" alt="Logout">
                </a>
            </div>
        </div>
    </div>
<?php } ?>
