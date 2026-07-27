<html>
    <head>
        <title><?php echo "Developer Comeback 2026 - Week 1"; ?></title>
    </head>
    <body>
        <?php 
        echo "Variables: ";
        echo "<br>";
        $name = "Preethi R Chandran";
        $age = 30;
        echo "Name: ".$name;
        echo "<br>";
        echo "Age: ".$age;
        echo "<br><br>";
        echo "Strings: ";
        echo "<br>";
        echo "Welcome Back ".$name."!!!";
        echo "<br><br>";
        echo "Numbers: ";
        echo "<br>";
        $a = 10;
        $b = 20;
        $c = $a + $b;
        echo "If a = ".$a." and b = ".$b." then, <br>Sum = a+b = ".$a." + ".$b." = ".$c;
        echo "<br><br>";
        echo "Arrays: ";
        echo "<br>";
        $languages = ["PHP", "HTML", "CSS", "JavaScript"];
        //print_r($languages);
        echo "My Programming Strengths: <br>";
        foreach ($languages as $language)
        {
            echo $language."<br>";
        }
        echo "<br><br>";
        echo "Date Constraints: ";
        echo "<br>";
        echo "Todays Date: <br>";
        echo "d-m-Y: ".date('d-m-Y')."<br>";
        echo "d-M-Y: ".date('d-M-Y')."<br>";
        echo "d-M-Y H i s: ".date('d-M-Y H:i:s')."<br>";
        ?>
    </body>
</html>