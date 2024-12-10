<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $hobbies = htmlspecialchars($_POST['hobbies']);
    $country = htmlspecialchars($_POST['country']);
    echo "
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Submission Details</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <div class='background-overlay'>
            <div class='form-container'>
                <h1 class='form-title'>Submission Successful</h1>
                <p class='form-description'>Here are your details:</p>
                <ul>
                    <li><strong>First Name:</strong> $firstName</li>
                    <li><strong>Last Name:</strong> $lastName</li>
                    <li><strong>Email:</strong> $email</li>
                    <li><strong>Date of Birth:</strong> $dob</li>
                    <li><strong>Gender:</strong> $gender</li>
                    <li><strong>Hobbies:</strong> $hobbies</li>
                    <li><strong>Country:</strong> $country</li>
                </ul>
                <a href='index.html' class='submit-button'>Go Back</a>
            </div>
        </div>
    </body>
    </html>
    ";
} else {
    echo "Invalid request!";
}
?>
