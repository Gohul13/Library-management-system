<?php
    session_start();
    include "database.php";
    function countDetails($sql,$db)
    {
        $res=$db->query($sql);
        return $res->num_rows;
    }
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
            <?php include "admin_navbar.php" ?>
        </div>
    </nav>
    <div class="login">
        <h3>Admin Home</h3>
        <div class="login_form">
            <ul class="ali">
                <li>Total no of Users : <?php echo countDetails("select * from users",$db); ?></li>
                <li>Total no of Books : <?php echo countDetails("select * from book",$db); ?></li>
                <li>Total no of Request : <?php echo countDetails("select * from request",$db); ?></li>
                <li>Total no of Comments : <?php echo countDetails("select * from comment",$db); ?></li>
            </ul>
        </div>
    </div>
</body>
</html>