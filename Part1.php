<!-- 연습문제 4번 -->
<?php
    $name = "이혜원";
    $number = "010-4997-3261";
    $address = "경기도 화성시 어디쯤";
    $email = "lhwjenny@naver.com";

    echo "- 이름 : $name <br>";
    echo "- 휴대폰 번호 : $number <br>";
    echo "- 주소 : $address <br>";
    echo "- 이메일 : $email <br>";
?>
<br><hr>
<!-- 연습문제 5번 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1장 연습문제 5번</title>
</head>
<body>
    <table border = "1">
	    <th>이름</th>
	    <th>휴대폰 번호</th>
        <th>주소</th>
        <th>이메일</th>
	    <tr>
	        <td><?=$name?></td>
	        <td><?=$number?></td>
            <td><?=$address?></td>
            <td><?=$email?></td>
	    </tr>
    </table>
</body>
</html>