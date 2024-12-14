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
            <?php include "admin_navbar.php" ?>
        </div>
    </nav>
    <div class="login">
        <h3>Upload Books</h3>
        <div class="login_form">
            <?php
                if(isset($_POST["submit"]))
                {
                   $loc="upload/";
                   $loc_file=$loc.basename($_FILES["efile"]["name"]);
                   if(move_uploaded_file($_FILES["efile"]["tmp_name"],$loc_file))
                   {
                        $sql="insert into book(BTITLE,KEYWORDS,FILE) values ('
                        {$_POST["bname"]}','{$_POST["keys"]}','{$loc_file}')";
                        $db->query($sql);
                        echo "<h3 style='color : green ; text-decoration : underline'>Book Uploaded</h3>";
                   }
                   else
                   {
                         echo "<h3 style='color : red ; text-decoration : underline'>Unable to upload Book</h3>";
                   }
                }
            ?>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
            <label>Book Title</label>
            <input type="text" name="bname" required>
            <label>Keywords</label>
            <input name="keys" required>
            <label>Upload File</label>
            <input type="file" name="efile" required>
            <button class="login_button" type="submit" name="submit" class="b"><h3>Upload</h3></button>
            </form>
        </div>
    </div>
</body>
</html>