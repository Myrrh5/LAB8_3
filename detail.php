<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stmt->bindParam(1,$_GET["username"]);
        $stmt->execute();
        $row = $stmt->fetch();
    ?>
    <div style="display:flex">
        <div>
            <img src='img/<?=$row["username"]?>.jpg' width='200px'>
        </div>
        <div style="padding: 15px">
        <h2>ชื่อ: <?=$row["name"]?></h2>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมล์: <?=$row["email"]?><br>
        </div>
    </div>
</body>
</html>