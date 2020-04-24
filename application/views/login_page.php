<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Admin Login</title>
</head>
<body>
    <div class="login-form-card">
        <div class="login-form-container">
            <span id="login-title">
                SELAMAT DATANG DI
            </span>
        <div class="login-logo">
            <img src="<?php echo base_url('assets/img/header_logo.png') ?>" alt="Bank Soal dan Materi Itera"> 
        </div>

        <div class="description">
            Institut Teknologi Sumatera <br> Lampung Selatan
            </div>

            <form method="post" action="<?php echo base_url('auth/login/admin') ?>">
                <input type="text" name="username" id="email-admin" placeholder="Email" value="<?php echo set_value('email');?>">
                <input type="password" name="password" id="password-admin" placeholder="Password">
                <input type="submit" value="LOGIN">
            </form>
        </div>
    </div>
</body>
</html>