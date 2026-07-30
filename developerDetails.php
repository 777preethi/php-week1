<html>
    <head>
        <title><?php echo "Developer Comeback 2026 - Week 1"; ?></title>
    </head>
    <style>
        body{
            margin:0;
            background:linear-gradient(135deg,#dbeafe,#f8fafc);
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
            margin-top:60px;
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
            width: 100%;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            /* transition:0.4s; */
        }
        .eachData h2{
            color:#2563eb;
            border-bottom:2px solid #dbeafe;
            padding-bottom:10px;
            margin-bottom:20px;
            margin-top:10px;
        }
        .eachData p{
            margin:10px 0;
            line-height:1.6;
        }
        /* .eachData:hover{
            transform:translateY(-8px);
            box-shadow:0 15px 30px rgba(0,0,0,0.2);
        } */
        .badge{
            display:inline-block;
            background:#2563eb;
            color:white;
            padding:6px 14px;
            border-radius:20px;
            margin:4px;
            font-size:13px;
        }
        .label{
            color:#555;
            font-weight:bold;
        }
        .profileImage{
            width:120px;
            height:120px;
            border-radius:50%;
            object-fit:cover;
            display:block;
            margin:auto;
            border:5px solid #2563EB;
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
        .quote{
            font-style:italic;
            color:#666;
            margin-top:20px;
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
                "Learning" => ["PHP", "Laravel", "Git", "AI"],
                "Profile" => "images/defaultAvatar.webp",
                "Email" => "sagar@gmail.com",
                "Years" => 17,
                "Quote" => "Build solutions, not excuses.",
            ]; 
            $developers[1] = [
                "Name" => "Preethi",
                "Age" => 35,
                "City" => "Trivandrum",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "Codeigniter", "Git", "AI"],
                "Profile" => "images/defaultAvatar.webp",
                "Email" => "preethi@gmail.com",
                "Years" => 5,
                "Quote" => "Code. Learn. Grow.",
            ]; 
            $developers[2] = [
                "Name" => "Pranav",
                "Age" => 25,
                "City" => "Chennai",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "CakePHP", "Git", "AI"],
                "Profile" => "images/defaultAvatar.webp",
                "Email" => "pranav@gmail.com",
                "Years" => 3,
                "Quote" => "Dream. Learn. Build.",
            ]; 
            $developers[3] = [
                "Name" => "Sudev",
                "Age" => 22,
                "City" => "Coimbatore",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "Yii", "Git", "AI"],
                "Profile" => "images/defaultAvatar.webp",
                "Email" => "sudev@gmail.com",
                "Years" => 1,
                "Quote" => "Believe in your comeback.",
            ];  
            $developers[4] = [
                "Name" => "Aadidev",
                "Age" => 20,
                "City" => "Chennai",
                "Experience" => "PHP Developer",
                "Goal" => "AI PHP Developer",
                "Learning" => ["PHP", "Python", "Git", "AI"],
                "Profile" => "images/defaultAvatar.webp",
                "Email" => "aadidev@gmail.com",
                "Years" => 0,
                "Quote" => "Every expert was once a beginner.",
            ]; 
            $developers[5] = [
                "Name" => "Malavika",
                "Age" => 37,
                "City" => "Coimbatore",
                "Experience" => "Java Developer",
                "Goal" => "AI Java Developer",
                "Learning" => ["Java", "Spring", "Git", "AI"],
                "Profile" => "images/defaultAvatar.webp",
                "Email" => "malavika@gmail.com",
                "Years" => 11,
                "Quote" => "Never stop Learning.",
            ]; 

            function developerDetails($id) {
                //
            }
        ?>
        <div class="container">
            <h2>Developer Details</h2>
            <div class="dataContents">
                <div class="eachData"></div>
            </div>
        </div>
    </body>
</html>