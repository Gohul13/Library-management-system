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
        <h3>View Comments</h3>
        <?php
            $sql="SELECT book.BTITLE,users.NAME,comment.COMM,comment.LOGS FROM comment INNER JOIN book on book.BID=comment.BID INNER JOIN users on comment.SID=users.ID";
            $res=$db->query($sql);
            if($res->num_rows>0)
            {
                echo "<table>
                    <tr>
                        <th>S.NO</th>
                        <th>BOOK</th>
                        <th>NAME</th>
                        <th>COMMENT</th>
                        <th>LOGS</th>
                    </tr>";
                    $num=0;
                    while($row=$res->fetch_assoc())
                    {
                        $num++;
                        echo "<tr>";
                        echo "<td>{$num}</td>";
                        echo "<td>{$row["BTITLE"]}</td>";
                        echo "<td>{$row["NAME"]}</td>";
                        echo "<td>{$row["COMM"]}</td>";
                        echo "<td>{$row["LOGS"]}</td>";
                    }
                        echo "</table>";
            }
            else
            {
                echo "<h3 style='color : red ; text-decoration : underline'>No Comments Found</h3>";
            }
        ?>
    </div>
</body>
</html>