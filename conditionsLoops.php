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
            <h2>Conditions and Loops</h2>
            <div class="dataContents">
                <div class="eachData">if condition</div>
                <?php
                    $age = 20;
                    if($age >= 18) {
                        echo "Age is ".$age.". So, Eligible to vote";
                    }
                ?>
                <div><br></div>
                <div class="eachData">if...else conditions</div>
                <?php
                    $age = 10;
                    echo "Age is ".$age.". So, ";
                    if($age >= 18) {
                        echo "Eligible to vote";
                    }
                    else {
                        echo "Not Eligible to vote";
                    }
                ?>
                <div><br></div>
                <div class="eachData">elseif conditions</div>
                <?php
                    $marks = 85;
                    echo "Mark is ".$marks.". So, ";
                    if ($marks >= 90) {
                        echo "Grade A+";
                    } elseif ($marks >= 75) {
                        echo "Grade A";
                    } elseif ($marks >= 60) {
                        echo "Grade B";
                    } else {
                        echo "Need Improvement";
                    }
                ?>
                <div><br></div>
                <div class="eachData">switch conditions</div>
                <?php
                    $day = date('l');
                    echo "Day is ".$day.". So, ";
                    switch ($day) {
                        case "Monday":
                            echo "Start Learning";
                            break;
                        case "Friday":
                            echo "Weekend Coming";
                            break;
                        default:
                            echo "Keep Coding";
                    }
                ?>
                <div><br></div>
                <div class="eachData">for loop</div> 
                The numbers 1 to 10: 
                <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<br>".$i;
                    }
                ?>
                <div><br></div>
                <div class="eachData">while loop</div>                
                <?php
                    $i = 1;
                    echo "The number is ".$i;
                    echo "<br>Showing numbers ".$i." to 5: <br>";
                    while ($i <= 5) {
                        echo $i . "<br>";
                        $i++;
                    }
                ?>
                <div><br></div>
                <div class="eachData">do...while loop</div>                
                <?php
                    $i = 1;                    
                    echo "The number is ".$i;
                    echo "<br>Showing numbers ".$i." to 5: <br>";
                    do {
                        echo $i . "<br>";
                        $i++;
                    } while ($i <= 5);
                ?>
                <div><br></div>
                <div class="eachData">foreach loop</div>               
                <?php
                    $skills = ["PHP", "Laravel", "Git", "AI"];
                    echo "The skills: <br>"; 
                    foreach ($skills as $skill) {
                        echo "I am learning ".$skill . "<br>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>