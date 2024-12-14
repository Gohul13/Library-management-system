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
            <?php include "user.php" ?>
        </div>
    </nav>
    <div class="login">
        <h3>Change Password</h3>
        <div class="login_form">
            <?php
                if(isset($_POST["submit"]))
                {
                    $sql="SELECT * from users WHERE Pass='{$_POST["opass"]}'";
                    $res=$db->query($sql);
                    if($res->num_rows>0)
                    {
                        $s="update users set PASS='{$_POST["npass"]}'"; 
                        $db->query($s);
                        echo "<h3 style='color : green ; text-decoration : underline'>Password Changed</h3>";
                    }
                    else
                    {
                        echo  "<h3 style='color : red ; text-decoration : underline'>Invalid Password</h3>";
                    }
                }
            ?>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <label>Old Password</label>
            <input type="password" name="opass" required>
            <label>New Password</label>
            <input type="password" name="npass" required>
            <button class="login_button" type="submit" name="submit"><h3>Update</h3></button>
            </form>
        </div>
    </div>
</body>
</html>