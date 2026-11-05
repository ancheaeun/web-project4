<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            align-items:center;
        }
        div{
            width:800px;
            display:flex;
            align-items:right;
        }
    </style>
</head>
<body>
    <div>
        <?php
        session_start();
        if(!isset($_SESSION['session_id'])){
        ?>
            <a href = "#">로그인</a>
            <a href = "#">회원가입</a>
        <?php
        }
        ?>
    </div>
</body>
</html>