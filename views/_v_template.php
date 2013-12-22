<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
    <!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Controller Specific CSS/JS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>
    <link rel="stylesheet" href="/css/app.css" type="text/css">

</head>

<body>	

	<div id="header">

    <ul>
        <a href='/'><img src="../images/logo.png" class="logo" alt="Band Central - Home"></a>

            <!-- Menu for users who are logged in -->
            <?php if($user): ?>
                <li>
                    <a href='/users/logout'>Logout</a>
                </li>
                <li>
                    <a href='/users/profile'>Profile</a>
                </li>
                <li>
                    <a href='/posts'>Dashboard</a>
                </li>
                <li>
                    <a href='/bands'>Bands</a>
                </li>
                <li>
                    <a href='/about'>About</a>
                </li>

            <!-- Menu options for users who are not logged in -->
            <?php else: ?>
                <li>
                    <a href='/users/signup'>Register</a>
                </li>
                <li>
                    <a href='/users/login'>Login</a>
                </li>
                <li>
                    <a href='/bands/preview'>Bands</a>
                </li>
                <li>
                    <a href='/about'>About</a>
                </li>
            <?php endif; ?>
    </ul>

    </div>

    <br>

		<?php if(isset($content)) echo $content; ?>

		<?php if(isset($client_files_body)) echo $client_files_body; ?>
		
</body>
</html>