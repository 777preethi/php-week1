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
        h4{
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
            <h2>Multiplication Table!!!</h2>
            <div class="dataContents">           
                <div class="eachData">                    
                    <?php $num = 7; ?>     
                    <h4>Multiplication Table of <?php echo $num; ?></h4>
                    <?php for($i=1; $i<=10; $i++) {
                        $ans = ($i * $num);
                        echo "<p>".$i." x ".$num." = ".$ans."</p>";
                    } ?>
                </div>
            </div>
        </div>
    </body>
</html>