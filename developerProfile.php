<html>
    <head>
        <title><?php echo "Developer Profile"; ?></title>
    </head>
    <style>
        body{
            background:#f5f5f5;
            font-family:Arial;
        }
    </style>
    <body>
        <?php 
        $name = "Preethi R Chandran";
        $goal = "Become AI base PHP Developer";
        $experience = "5+ Years as PHP Developer";
        $learnings = ["HTML", "CSS", "JavaScript", "PHP", "Codeigniter", "Yii", "Laravel", "Git", "GitHub", "AI"];
        $quotes = ["I don't have to be perfect.", "I only have to keep going."];
        ?>
        <div class="container">
            <h2><center>Welcome Back!!!</center></h2>
            <div class="dataContents">
                <div class="eachData"><b>Name: </b><?php echo $name; ?></div>
                <div class="eachData"><b>Goal: </b><?php echo $goal; ?></div>
                <div class="eachData"><b>Experience: </b><?php echo $experience; ?></div>
                <div class="eachData">
                    <b>Learnings: </b>
                    <?php $learningString = '';
                    foreach ($learnings as $learning) {
                        $learningString .= $learning.", ";
                    }
                    $learningString = substr($learningString,0,strlen($learningString)-2);
                    echo $learningString; ?>
                </div>
                <div class="eachData">
                    <b>Quotes: </b>
                    <?php echo "<br>";
                    foreach ($quotes as $quote)
                    {
                        echo $quote."<br> ";
                    } ?>
                </div>
            </div>
        </div>
    </body>
</html>