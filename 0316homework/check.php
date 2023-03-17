<meta charset="UTF-8">

<?php
    session_start();
    $presidentID = "president";
    $presidentPWD = "741";

    $teacherID = "teacher";
    $teacherPWD = "852";

    $studentID = "student";
    $studentPWD = "963";

    if(isset($_POST["id"]) && isset($_POST["pwd"])){
        $id = $_POST["id"];
        $pwd = $_POST["pwd"];
        
        if(($presidentID == $id) && ($presidentPWD == $pwd)){
            $_SESSION["login"]="Yes";
            $_SESSION["type"]="president";
            header("Location:choose.php");
        }elseif(($teacherID == $id) && ($teacherPWD == $pwd)){
            $_SESSION["login"]="Yes";
            $_SESSION["type"] = "teacher";
            header("Location:choose.php");
        }elseif(($studnetID == $id) && ($studnetPWD == $pwd)){
            $_SESSION["login"]="Yes";
            $_SESSION["type"]="student";   
            header("Location:stundet.php");
        }else{
            $_SESSION["login"]="No";
            header("Location:fail.php");
        }
    }else{
        header("Location:error.php");
    }
    
?>