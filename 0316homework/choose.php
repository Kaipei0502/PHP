<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <?php
        session_start();

        if(($_SESSION["login"] == "Yes") && ($_SESSION["type"] == "president")){
            echo "<h3>請選擇網頁</h3><br/>";
            echo "<a href ='president.php'>校長的網頁</a><br/>";
            echo "<a href ='teacher.php'>老師的網頁</a>";
        }elseif(($_SESSION["login"] == "Yes") && ($_SESSION["type"] == "teacher")   ){
            echo "<h3>請選擇網頁</h3><br/>";
            echo "<a href ='teacher.php'>老師的網頁</a><br/>";
            echo "<a href ='student.php'>學生的網頁</a>";
        }else{
            $_SESSION["login"]="No";
            header("Location:error.php");
        }
    ?>
</body>
</html>