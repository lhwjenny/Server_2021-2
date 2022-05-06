<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>예제 7-16</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        $file_dir = "C:/xampp/htdocs/myPractice/images/";
        $file_path = $file_dir.$_FILES["upload"]["name"];
        if(move_uploaded_file($_FILES["upload"]["tmp_name"],$file_path)) {
            $img_path = "images/".$_FILES["upload"]["name"];
    ?>
    <ul>
        <li><img src="<?= $img_path?>"></li>
        <li><?= $_POST["comment"]?></li>
    </ul>
    <?php
        }
        else{
            echo "파일 업로드 오류가 발생하였습니다!!";
        }
    ?>
</body>
</html>