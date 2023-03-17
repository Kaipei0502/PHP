<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <?php
        session_start();
        if(($_SESSION["login"]=="Yes") && ($_SESSION["type"] == "president")){
            
        }else{
            header("Location:error.php");
        }
    ?>
    這是校長的網頁!<br/>
    <a href="reset.php">登出</a>
</body>
</html>