<?php
    session_start();
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
        <h3>Admin Login</h3>
        <div class="login_form">
            <?php
                if(isset($_POST["submit"]))
                {
                    $sql="SELECT * FROM `admin` WHERE ANAME='{$_POST["aname"]}' and APASS='{$_POST["apassword"]}'";
                    $res=$db->query($sql);
                    if($res->num_rows>0)
                    {
                        header("location:adminhome.php");
                    }
                    else{
                        echo "<h3 class='error' style='color :  red ; text-decoration : underline'>Invalid user</h3>";
                    }
                }
            ?>
            <form action="adminlogin.php" method="post">
                <label>Name</label>
                <input type="text" name="aname" required>
                <label>Password</label>
                <input type="password" name="apassword" required>
                <button class="login_button" type="submit" name="submit" ><h3>Login</h3></button>
            </form>
        </div>
    </div>
</body>
</html>