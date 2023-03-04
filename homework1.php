<html>
<meta charset="UTF-8">
<head>
    <title>資管活動回覆</title>
</head>
<body style="background-color: #e3f2fd">
    <nav>
        <br/>
        <h2 class="text-center"><font color="#004B97"><b>報名結果</h2></font></b>
        </div>
    </nav>
    <hr style="border: 3px solid #003060";/>
    <?php
    if (isset($_POST["userName"])){
        $userName = $_POST["userName"];
        $id = $_POST["id"];
        $age = $_POST["age"];
        $eat = $_POST["eat"];
        $money = $_POST["money"];
        $phone = $_POST["phone"];

        echo "姓名: ".$userName. "<br/>";
        echo "學號: ".$id."<br/>";

        if($age == "one"){
            echo "系級是:115";
        }else if ($age == "two") {
            echo "系級是:114";
        }else if ($age == "three") {
            echo "系級是:113";
        }else{
            echo "系級是:112";
        }
        echo "<br/>";

        if ($eat =="meat") {
            echo "飲食習慣:葷";
        }else{
            echo "飲食習慣:素";
        }
        echo "<br/>";

        if ($money =="yes") {
            echo "有繳系費:150元";
        }else{
            echo "沒有繳系費:100元";
        }
        echo "<br/>";

        echo "電話:" .$phone. "<br/>";
        $talk = $_POST["talk"];
        echo "想說的話:<br/>";
        echo nl2br(strip_tags($talk));
    }else{
        echo "資料錯誤";
    } 
?>
</body>
</html>