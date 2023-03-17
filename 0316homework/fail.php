<?php 
    ob_start(); 
    session_start();
    if($_SESSION["login"]=="No"){
        
    }else{
        header("Location:reset.php");
    }

?>
<html>
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    登入失敗<br/>
    網頁將在三秒後跳轉至登入頁面或<br/>
    <a href="reset.php">點選這裡</a>
    <?php
        header("Refresh:3;url=reset.php");
    ?>    
</body>
</html>
<?php ob_flush(); ?>