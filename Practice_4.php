
<?php
    $name = "홍길동";
    $p_num = "010-1234-5678";
    $address = "경기도 어딘가 살고있겠지";
    $email = "phpTest@naver.com";

    echo "- 이름 : $name <br>";
    echo "- 휴대폰 번호 : $p_num <br>";
    echo "- 주소 : $address <br>";
    echo "- 이메일 : $email <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2장 연습문제 5번</title>
</head>
<body>
    <table>
        <tr>
            <td>이름</td>
            <td>휴대폰 번호</td>
            <td>주소</td>
            <td>이메일</td>
        </tr>
        <tr>
            <td><?=$name?></td>
            <td><?=$p_num?></td>
            <td><?=$address?></td>
            <td><?=$email?></td>
        </tr>
    </table>
</body>
</html>