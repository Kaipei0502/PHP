<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <?php
        session_start();
        if($_SESSION["login"]=="Yes"){
            
        }else{
            header("Location:error.php");
        }
    ?>
    這是學生的網頁!<br/>
    <a href="reset.php">登出</a>
</body>
</html>