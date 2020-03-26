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
                Login BSMI
            </span>
            <form method="post" action="<?php echo base_url('admin-bsmi') ?>">
                <input type="text" name="username" id="email-admin" placeholder="Masukkan alamat email" value="<?php echo set_value('email');?>">
                <input type="password" name="password" id="password-admin" placeholder="Masukkan password">
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>