<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>예제 7-4</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        $id = $_POST["id"];
        $pass = $_POST["pass"];
    ?>
    <ul>
        <li>아 &nbsp;이 &nbsp;디 : <?= $id?></li>
        <li>비밀번호 : <?= $pass?></li>
    </ul>
</body>
</html>