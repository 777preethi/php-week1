<html>
    <head>
        <title><?php echo "Developer Comeback 2026 - Week 1"; ?></title>
    </head>
    <style>
        body{
            margin:0;
            background:#eef2f7;
            font-family:Arial, Helvetica, sans-serif;
        }
        h2{
            text-align:center;
        }
        h4{
            text-align:center;
        }
        .container h2{
            text-align:center;
            color:#2c3e50;
            margin-top:40px;
            margin-bottom:30px;
            font-size:34px;
        }
        .dataContents {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            padding: 30px;
        }
        .eachData {
            width: 320px;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition:0.4s;
        }
        .eachData h2{
            color:#2563eb;
            border-bottom:2px solid #dbeafe;
            padding-bottom:10px;
            margin-bottom:20px;
        }
        .eachData p{
            margin:10px 0;
            line-height:1.6;
        }
        .eachData:hover{
            transform:translateY(-8px);
            box-shadow:0 15px 30px rgba(0,0,0,0.2);
        }
        .badge{
            display:inline-block;
            background:#2563eb;
            color:white;
            padding:6px 12px;
            border-radius:20px;
            margin:5px 5px 0 0;
            font-size:13px;
        }
        .label{
            color:#555;
            font-weight:bold;
        }
        .profileBtn{

    width:100%;

    padding:12px;

    background:#2563EB;

    color:white;

    border:none;

    border-radius:8px;

    cursor:pointer;

    font-size:16px;

}
.profileBtn:hover{

    background:#1E40AF;

}
    </style>
    <body>
        <?php //Developers Details
            $developers[0] = [
                "Name" => "Sagar",
                "Age" => 39,
                "City" => "Kochi",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "Laravel", "Git", "AI"]
            ]; 
            $developers[1] = [
                "Name" => "Preethi",
                "Age" => 35,
                "City" => "Trivandrum",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "Codeigniter", "Git", "AI"]
            ]; 
            $developers[2] = [
                "Name" => "Pranav",
                "Age" => 25,
                "City" => "Chennai",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "CakePHP", "Git", "AI"]
            ]; 
            $developers[3] = [
                "Name" => "Sudev",
                "Age" => 22,
                "City" => "Coimbatore",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "Yii", "Git", "AI"]
            ];  
            $developers[4] = [
                "Name" => "Aadidev",
                "Age" => 20,
                "City" => "Chennai",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "Python", "Git", "AI"]
            ]; 
            $developers[5] = [
                "Name" => "Malavika",
                "Age" => 37,
                "City" => "Coimbatore",
                "Experience" => "Java Developer",
                "Goal" => "AI Java Developer",
                "Learning" => ["Java", "Spring", "Git", "AI"]
            ]; 
            function displayDevelopers($developers)
            {
                $totalProfileString = '';
                foreach ($developers as $developer)
                {
                    $totalProfileString .= displayDeveloper($developer);
                } 
                echo $totalProfileString;
            }
            function displayDeveloper($developer)
            {
                // isEligibleForInterview($experience)
                // If experience is:
                // 2 or more years
                // Return:
                // Eligible
                // Else:
                // Keep Learning

                $profileString = '';
                $profileString .= '<div class="eachData"><h2>'.$developer["Name"].'</h2>
                    <p><span class="label">Age: </span>'.$developer["Age"].'</p>
                    <p><span class="label">City: </span>'.$developer["City"].'</p>
                    <p><span class="label">Experience: </span>'.$developer["Experience"].'</p>
                    <p><span class="label">Goal: </span>'.$developer["Goal"].'</p>
                    <p><span class="label">Learning: </span>';
                    $technologyString = '';
                foreach ($developer["Learning"] as $technology)
                {
                    $technologyString .= "<span class='badge'>$technology</span>";
                }
                $profileString .= $technologyString.'</p>';
                $profileString .= '<br><br><button class="profileBtn">View Profile</button></div>';
                return $profileString;
            }
        ?>
        <div class="container">
            <h2>Developer Profile Card</h2>
            <div class="dataContents">
                <?php displayDevelopers($developers); ?>
            </div>
        </div>
    </body>
</html>