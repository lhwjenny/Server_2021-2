<?php
    session_start();
    unset($_SESSION["username"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>예제 8-6</title>
    <link href = "../css/style.css" rel="stylesheet">
</head>
<body>
    <ul>
        <li><?= "userid 세션 : ".$_SESSION["userid"]."<br>" ?></li>
        <li><?= "username 세션 : ".$_SESSION["username"]."<br>" ?></li>
        <li><?= "username 세션이 삭제되었습니다!" ?></li>
    </ul>
</body>
</html>