<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="signup">sign up</div>
        <div class="login" >log in</div>
        <div class="signup-form">
            <form method="post" action="index.php">
                    <?php include('errors.php'); ?>
                    <input type="text" placeholder="Username" class="input" name="username" value="<?php echo $username;?>"><br>
                    <input type="text" placeholder="Email" class="input" name="email" value="<?php echo $email;?>"><br>
                    <input type="password" placeholder="Password" class="input" name="password_1"><br>
                    <input type="password" placeholder="Confirm Password" class="input" name="password_2"><br>
                    <button type="submit" class="btn" name="register">create account</button>
            </form>
        </div>
        <div class="login-form">
        <form method="post" action="index.php">
            <?php include('errors.php'); ?>  
            <input type="text" class="input" placeholder="UserName" name="username"><br>
            <input type="password" class="input" placeholder="Password" name="password"><br>
            <button type="submit" class="btn" name="login">Log in</button>
        </form>  
            
        </div>
    </div>
</body>
</html>