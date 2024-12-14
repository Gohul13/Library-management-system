<?php
    include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="nav">
        <div class="lib-name">
            <h3><span id="first">Story</span><br><span id="second">Corner</span></h3>
        </div>
        <div class="nav-bar">
            <?php include "navbar.php" ?>
        </div>
    </nav>
    <div class="login">
        <h3>New User</h3>
        <div class="login_form">
            <?php
                if(isset($_POST["submit"]))
                {
                   $sql="insert into users(NAME,PASS,MAIL) values ('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}')";
                   $db->query($sql);
                   echo "<h3 style='color : green ; text-decoration : underline'>User Registration Success</h3>";
                }
            ?>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <label>Name</label>
            <input type="text" name="name" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <button class="login_button" type="submit" name="submit"><h3>Signup</h3></button>
            </form>
        </div>
    </div>
</body>
</html>