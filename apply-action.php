<?php
// Include PHPMailer classes
require_once 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer/PHPMailer-master/src/Exception.php';
require_once 'PHPMailer/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database and email credentials
$dbHost = 'localhost';
$dbUsername = 'u645667967_spiritbrood';
$dbPassword = 'Islam2020.';
$dbName = 'u645667967_graduation';

$emailHost = 'smtp.hostinger.com';
$emailUsername = 'registrar@spiritbrood.org';
$emailPassword = 'Registrar@spiritbrood1';

// Create a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Collect and sanitize form data
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $maritalstatus = mysqli_real_escape_string($conn, $_POST['maritalstatus']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $passport = $_FILES['passport'];
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
    
    // Check if file is uploaded and valid (for example, PDF resume)
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0 && $_FILES['resume']['type'] == 'application/pdf') {
        // Read the resume file into a variable
        $resumeData = file_get_contents($_FILES['resume']['tmp_name']);

        // Prepare the SQL query to insert data into the 'application' table
        $sql = "INSERT INTO application (firstname, middlename, lastname, email, phonenumber, sex, maritalstatus, dob, age, address, city, state, country, postalcode, program, specialization, passport, qualifications) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Prepare and bind the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssssssssss", $firstname, $middlename, $lastname, $email, $phonenumber, $sex, $maritalstatus, $dob, $age, $address, $city, $state, $country, $postalcode, $program, $specialization, $passport, $qualification);

        // Execute the query
        if ($stmt->execute()) {
            // Send a confirmation email with PHPMailer
            $mail = new PHPMailer(true);

            try {
                // SMTP server settings
                $mail->isSMTP();
                $mail->Host = $emailHost;
                $mail->SMTPAuth = true;
                $mail->Username = $emailUsername;
                $mail->Password = $emailPassword;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Set sender and recipient information
                $mail->setFrom($emailUsername, 'SpiritBrood');
                $mail->addAddress($emailUsername);

                // Attach the resume as a PDF file
                $mail->addStringAttachment($resumeData, 'Resume.pdf');

                // Email content
                $// Email content
$mail->isHTML(true);
$mail->Subject = "New Application Submission: $lastname $firstname";
$mail->Body = "
    <h3>A new application submission has been received:</h3>
    <strong>Surname:</strong> $lastname<br>
    <strong>First Name:</strong> $firstname<br>
    <strong>Middle Name:</strong> $middlename<br>
    <strong>Email:</strong> $email<br>
    <strong>Phone Number:</strong> $phonenumber<br>
    <strong>Sex:</strong> $sex<br>
    <strong>Marital Status:</strong> $maritalstatus<br>
    <strong>Date of Birth:</strong> $dob<br>
    <strong>Age:</strong> $age<br>
    <strong>Address:</strong> $address<br>
    <strong>City:</strong> $city<br>
    <strong>State:</strong> $state<br>
    <strong>Country:</strong> $country<br>
    <strong>Postal Code:</strong> $postalcode<br>
    <strong>Program:</strong> $program<br>
    <strong>Specialization:</strong> $specialization<br>
    <strong>Qualification:</strong> $qualification<br>
    <strong>Passport:</strong> <a href='$passport'>View Passport</a><br>
";


                // Send the email
                $mail->send();
                echo '<script type="text/javascript">
                            alert("Your Application has been successfully submitted. A confirmation email has been sent to the registrar.");
                            window.location.href = "https://spiritbrood.org"; // Redirect to a thank you page or stay on the current page
                          </script>';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Error submitting data: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please upload a PDF file as your resume.";
    }
}
?>
