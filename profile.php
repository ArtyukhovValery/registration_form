<?php include('server.php') ;
if(empty($_SESSION['username'])){
    header('location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <div class="container">
    <div class="signup-form">
    <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <?php if (isset($_SESSION["username"])):?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <div class="btn"><a href="index.php?logout='1'">Logout</a></div>
        <?php endif?>
</div>
    </div>
</body>
</html>