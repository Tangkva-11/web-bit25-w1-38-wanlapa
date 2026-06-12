<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณสูตรคูณ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="color: purple;"
    >

    งานที่ 1 วัลลภา หอมจำปา BIT.2/5 เลขที่ 38
    
    </h1>

    <div style="font-size: 30px; text-align: center;">

        <a href="index.php">For Loop</a>

    </div>

   <div style="color: #90286f; font-size: 30px; text-align: center;">

        <form action="">
            <label for="">เลขแม่สูตรคูณ</label> <br>

            <input type="number" name="num" id="">

            <input type="submit" value="คำนวณ">
        </form>

    </div>
    
    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "<div class='result'>";
            echo "<h2>สูตรคูณแม่ $num</h2>";

            $i = 1;
            while($i <= 12){
                echo "$num x $i = " . ($num * $i) . "<br>";
                $i++;
            }

            echo "</div>";
        }
    ?>
</body>
</html>