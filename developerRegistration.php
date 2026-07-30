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
        .container{
            padding-top:40px;
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
        .eachData{
            width:600px;
            background:#ffffff;
            padding:35px;
            border-radius:18px;
            box-shadow:0 12px 30px rgba(0,0,0,0.12);
        }
        .formGroup{
            margin-bottom:18px;
        }
        .radioGroup{
            display:flex;
            justify-content:space-between;
            margin-bottom:25px;
        }
        input, select{
            width:100%;
            padding:12px;
            margin-top:8px;
            margin-bottom:18px;
            border:1px solid #d1d5db;
            border-radius:8px;
            font-size:15px;
            box-sizing:border-box;
        }
        input:focus, select:focus{
            outline:none;
            border:1px solid #2563eb;
            box-shadow:0 0 8px rgba(37,99,235,.25);
        }
        label{
            font-weight:bold;
            color:#374151;
        }
        .btn{
            background:#2563eb;
            color:white;
            border:none;
            cursor:pointer;
            font-size:16px;
            font-weight:bold;
            transition:.3s;
        }
        .btn:hover{
            background:#1d4ed8;
        }
        .success{
            background:#dcfce7;
            color:#166534;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;
        }
        .resultTitle{
    color:#16a34a;
    text-align:center;
    font-size:28px;
    margin-bottom:10px;
}
.resultAvatar{
    font-size:70px;
    text-align:center;
    margin:20px 0;
}
.resultInfo{
    background:#f8fafc;
    border-radius:10px;
    padding:20px;
    margin-top:20px;
}
.infoRow{
    display:flex;
    justify-content:space-between;
    padding:10px 0;
    border-bottom:1px solid #e5e7eb;
}
    </style>
    <body>
        <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {

                $name=$_POST["name"];
                $email=$_POST["email"];
                $age=$_POST["age"];
                $city=$_POST["city"];
                $successString = '';
                $technology = $_POST["technology"];
                $experience = $_POST["experience"];
                $successString .= '<div class="container"><div class="dataContents"><div class="eachData">
                    <div class="success">
                    <p>Happy Registering, '.$name.'!</p>
                    <p>Your journey towards becoming an AI PHP Developer has officially begun.</p>
                    </div>
                    <h2>Developer Details</h2>
                    <p>Name : '.$name.' </p>
                    <p>Email : '.$email.' </p>
                    <p>City : '.$city.' </p>
                    </div></div></div>';
                //echo $successString;

            }

            if($_SERVER["REQUEST_METHOD"]=="POST"){ ?>

<div class="container">

    <div class="dataContents">

        <div class="eachData">

            <h2 class="resultTitle">
                🎉 Registration Successful
            </h2>

            <div class="resultAvatar">
                👩‍💻
            </div>

            <div class="resultInfo">

                <div class="infoRow">
                    <b>Name</b>
                    <span><?php echo $name; ?></span>
                </div>

                <div class="infoRow">
                    <b>Email</b>
                    <span><?php echo $email; ?></span>
                </div>

                <div class="infoRow">
                    <b>Technology</b>
                    <span><?php echo $technology; ?></span>
                </div>

                <div class="infoRow">
                    <b>Experience</b>
                    <span><?php echo $experience; ?></span>
                </div>

            </div>

        </div>

    </div>

</div>

<?php } ?>
        ?>
        <div class="container">
            <h2>Developer Registration</h2>
            <div class="dataContents">
                <div class="eachData">
                    <form method="post">
                        <div class="formGroup">
                            <label>Name</label><br>
                            <input type="text" name="name"><br><br>
                        </div>

                        <div class="formGroup">
                            <label>Email</label><br>
                            <input type="email" name="email"><br><br>
                        </div>

                        <div class="formGroup">
                            <label>Age</label><br>
                            <input type="number" name="age"><br><br>
                        </div>

                        <div class="formGroup">
                            <label>City</label><br>
                            <input type="text" name="city"><br><br>
                        </div>

                        <div class="formGroup">
                            <label>Skills</label><br>
                            <select name="technology">
                                <option>PHP</option>
                                <option>Laravel</option>
                                <option>CodeIgniter</option>
                                <option>CakePHP</option>
                            </select>
                        </div>

                        <div class="formGroup">
                            <label>Experience Level</label>
                            <div class="radioGroup">
                                <label><input type="radio" name="experience" value="Beginner">Beginner</label>
                                <label><input type="radio" name="experience"value="Intermediate">Intermediate</label>
                                <label><input type="radio" name="experience" value="Experienced">Experienced</label>
                            </div>
                        </div>

                        <input type="submit" value="Register Developer" class="btn">

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>