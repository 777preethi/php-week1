<?php require "header.php";
require "functions.php"; ?>

        <div class="container">
            <h2>Developer Registration</h2>
            <div class="dataContents">
                <div class="eachData">

                    <?php session_start();
                    if(isset($_SESSION["errors"]))
                    { ?>
                        <div class="errorBox">
                            <?php foreach($_SESSION["errors"] as $error)
                            { ?>
                                <p><?php echo $error; ?></p>
                            <?php }
                            unset($_SESSION["errors"]); ?>
                        </div>
                    <?php } ?>
                    
                    <form action="developerRegistered.php" method="post">
                        <div class="formGroup">
                            <label>Name</label><br>
                            <input type="text" name="name" placeholder="Enter your full name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>
                        </div>

                        <div class="formGroup">
                            <label>Email</label><br>
                            <input type="email" name="email" placeholder="Enter your email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                        </div>

                        <div class="formGroup">
                            <label>Age</label><br>
                            <input type="number" name="age" placeholder="Enter your age" value="<?php echo isset($age) ? htmlspecialchars($age) : ''; ?>" required>
                        </div>

                        <div class="formGroup">
                            <label>City</label><br>
                            <input type="text" name="city" placeholder="Enter your city" value="<?php echo isset($city) ? htmlspecialchars($city) : ''; ?>" required>
                        </div>

                        <div class="formGroup">
                            <label>Skills</label><br>
                            <select name="technology">
                                <option value="0">Select your technology</option>
                                <option value="PHP" <?php if(isset($technology) && $technology=="PHP") echo "selected"; ?>>PHP</option>
                                <option value="Laravel" <?php if(isset($technology) && $technology=="Laravel") echo "selected"; ?>>Laravel</option>
                                <option value="CodeIgniter" <?php if(isset($technology) && $technology=="CodeIgniter") echo "selected"; ?>>CodeIgniter</option>
                                <option value="CakePHP" <?php if(isset($technology) && $technology=="CakePHP") echo "selected"; ?>>CakePHP</option>
                                <option value="Yii" <?php if(isset($technology) && $technology=="Yii") echo "selected"; ?>>Yii</option>
                            </select>
                        </div>

                        <div class="formGroup">
                            <label>Experience Level</label>
                            <div class="radioGroup">
                                <label><input type="radio" name="experience" value="Beginner" <?php if(isset($experience) && $experience=="Beginner") echo "checked"; ?>>Beginner</label>
                                <label><input type="radio" name="experience" value="Intermediate" <?php if(isset($experience) && $experience=="Intermediate") echo "checked"; ?>>Intermediate</label>
                                <label><input type="radio" name="experience" value="Experienced" <?php if(isset($experience) && $experience=="Experienced") echo "checked"; ?>>Experienced</label>
                            </div>
                        </div>

                        <input type="submit" value="Register Developer" class="btn">

                    </form>
                </div>
            </div>
        </div>
        
<?php require "footer.php"; ?>