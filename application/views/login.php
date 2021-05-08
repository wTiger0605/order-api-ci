<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href='<?php echo base_url('public/bootstrap.min.css') ?>' type='text/css'/>
	<link rel="stylesheet" href='<?php echo base_url('public/loginstyle.css') ?>' type='text/css'/>
	<script type='text/javascript' src="<?php echo base_url('public/jquery.min.js') ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('public/bootstrap.min.js') ?>"></script>
</head>
<body>

    <div class="login-page">
    <div class="form">
        <form class="login-form" role="form" method="post" action="<?php echo base_url('login/login_user'); ?>">
            <input type="text" placeholder="username" name="user_name" autofocus />
            <input type="password" placeholder="password" name="user_password" />
            <input class="button" type="submit" value="login" name="login" >
        </form>
    </div>
    </div>
</body>
</html>