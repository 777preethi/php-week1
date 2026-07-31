<?php 
function validateDeveloper($developer)
{
    $errors = [];

    // validations
    if(empty(trim($developer['name']))) {
        $errors[] = "Name is required.";
    }
    if(empty(trim($developer['email']))) {
        $errors[] = "Email is required.";
    }
    if(empty(trim($developer['age']))) {
        $errors[] = "Age is required.";
    }
    if(empty(trim($developer['city']))) {
        $errors[] = "City is required.";
    }
    if(empty($developer['technology'])) {
        $errors[] = "Please select your technology.";
    }
    if(empty($developer['experience'])) {
        $errors[] = "Please select your experience level.";
    }
    if(!empty(trim($developer['email'])) && !filter_var($developer['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    if(!empty(trim($developer['age'])) && $developer['age'] < 18) {
        $errors[] = "Age must be at least 18.";
    }
    return $errors;
}
?>