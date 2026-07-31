<?php require "header.php";
require "functions.php"; ?>

<?php if($_SERVER["REQUEST_METHOD"]=="POST") { 

    $developer = [
        "name" => trim($_POST["name"] ?? ""),
        "email" => trim($_POST["email"] ?? ""),
        "age" => trim($_POST["age"] ?? ""),
        "city" => trim($_POST["city"] ?? ""),
        "technology" => trim($_POST["technology"] ?? ""),
        "experience" => trim($_POST["experience"] ?? "")
    ];
            
    // Validation Conditions Starts 
    $errors = [];
    $errors = validateDeveloper($developer);
    // Validation Conditions Ends 
        
    if(empty($errors)) { ?>
        <div class="container">
            <div class="dataContents">
                <div class="eachData">
                    <h2 class="resultTitle">
                        Registration Successful
                    </h2>
                    <div class="resultInfo">
                        <div class="infoRow">
                            <b>Name</b>
                            <span><?php echo htmlspecialchars($developer['name']); ?></span>
                        </div>
                        <div class="infoRow">
                            <b>Email</b>
                            <span><?php echo htmlspecialchars($developer['email']); ?></span>
                        </div>
                        <div class="infoRow">
                            <b>Technology</b>
                            <span><?php echo htmlspecialchars($developer['technology']); ?></span>
                        </div>
                        <div class="infoRow">
                            <b>Experience</b>
                            <span><?php echo htmlspecialchars($developer['experience']); ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="formGroup">
                        <a href="developerRegistration.php">
                            <input type="button" value="Register Another Developer" class="btn">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php } else {
            session_start();
            $_SESSION["errors"] = $errors;
            header("Location: developerRegistration.php");
            exit;
        }
} ?>
        
<?php require "footer.php"; ?>  