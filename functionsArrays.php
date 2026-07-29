<html>
    <head>
        <title><?php echo "Developer Comeback 2026 - Week 1"; ?></title>
    </head>
    <style>
        body{
            background:#f5f5f5;
            font-family:Arial;
        }
        h2{
            text-align:center;
        }
    </style>
    <body>
        <div class="container">
            <h2>Functions and Arrays</h2>
            <div class="dataContents">
                <div class="eachData">
                    <?php
                        echo "<br>Simple Function: <br>";
                        function welcomeMessage()
                        {
                            echo "Welcome Back, Developer! <br>";
                        }
                        welcomeMessage();

                        echo "<br>Function with Parameters: <br>";
                        function greet($name)
                        {
                            echo "Hello, $name! <br>";
                        }
                        greet("Preethi");

                        echo "<br>Function Returning a Value: <br>";
                        function addNumbers($num1, $num2)
                        {
                            return $num1 + $num2;
                        }
                        $a = 10;
                        $b = 20;
                        $total = addNumbers($a, $b);
                        echo "Given numbers ".$a." and ".$b.". The sum is ".$total;

                        echo "<br>Indexed Array: <br>";
                        $languages = ["PHP", "Laravel", "MySQL", "Git"];
                        print_r($languages);
                        // echo "<br>Access Values: <br>";
                        // echo $languages[0];
                        // echo $languages[1];
                        echo "<br> Languages: <br>";
                        foreach ($languages as $language)
                        {
                            echo $language . "<br>";
                        }

                        echo "<br>Associative Array: <br>";
                        $student = [
                            "name" => "Preethi",
                            "age" => 35,
                            "city" => "Coimbatore"
                        ];
                        print_r($student);
                        echo "<br> Student Details: <br>";
                        // echo "Name: ".$student["name"]."<br>";
                        // echo "Age: ".$student["age"]."<br>";
                        // echo "City: ".$student["city"]."<br>";
                        foreach ($student as $key => $value)
                        {
                            echo ucfirst($key).": ".ucfirst($value)."<br>";
                        }

                    ?>
                </div>
            </div>
        </div>
    </body>
</html>