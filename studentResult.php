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
        .dataContents {
            display: flex;
            justify-content: center;
        }
        .eachData {
            width: 500px;
            border: solid 2px black;
            padding: 2%;
            border-radius:10px;
            background:white;
            box-shadow:0 2px 8px rgba(0,0,0,0.15);
        }
    </style>
    <body>
        <div class="container">
            <h2>Student Result!!!</h2>
            <div class="dataContents">
                <div class="eachData">
                    <?php $name = "Preethi";
                        $marks = 89;
                        $grade = "";
                        $result = "";
                        if ($marks >= 90 && $marks <= 100) {
                            $grade = "A+";
                            $result = "PASS";
                        } elseif ($marks >= 75 && $marks <= 89) {                            
                            $grade = "A";
                            $result = "PASS";
                        } elseif ($marks >= 60 && $marks <= 74) {
                            $grade = "B";
                            $result = "PASS";
                        } elseif ($marks >= 35  && $marks <= 59) {
                            $grade = "C";
                            $result = "PASS";
                        } else {                            
                            $grade = "D";
                            $result = "FAIL";
                        }
                        echo "<p>Student Name : ".$name."</p>";
                        echo "<p>Marks : ".$marks."</p>";                        
                        echo "<p>Grade : ".$grade."</p>";
                        echo "<p>Result : ".$result."</p>";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>