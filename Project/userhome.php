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
        <h3>User Home</h3>
        <p id="welcome">
            Welcome to Story Corner! <br>
            Step into a world of imagination, knowledge, and endless possibilities. At Story Corner, you’ll find an expansive collection of stories, books, articles, and resources—perfect for every reader, researcher, and dreamer. Whether you’re here to explore new worlds, fuel your curiosity, or find that perfect story to get lost in, we’re here to help guide you.

            Feel free to browse, search, and discover all the wonderful things Story Corner has to offer. If you need any help or recommendations, we’re just a click away. Enjoy your journey through the pages!

            Happy reading and exploring!
        </p>
    </div>
</body>
</html>