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
        <h3>View Book Details</h3>
        <?php
            $sql="SELECT * FROM book";
            $res=$db->query($sql);
            if($res->num_rows>0)
            {
                echo "<table>
                    <tr>
                        <th>S.NO</th>
                        <th>BOOK NAME</th>
                        <th>VIEW</th>
                    </tr>";
                    $num=0;
                    while($row=$res->fetch_assoc())
                    {
                        $num++;
                        echo "<tr>";
                        echo "<td>{$num}</td>";
                        echo "<td>{$row["BTITLE"]}</td>";
                        echo "<td><a href='{$row["FILE"]}' target='_blank'>VIEW</a></td>";
                    }
                        echo "</table>";
            }
            else
            {
                echo "<h3 style='color : red ; text-decoration : underline'>No Books Found</h3>";
            }
        ?>
    </div>
</body>
</html>