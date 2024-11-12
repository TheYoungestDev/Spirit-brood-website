<?php
// Include PHPMailer classes
require_once 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer/PHPMailer-master/src/Exception.php';
require_once 'PHPMailer/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Collect and sanitize form data
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $studentnumber = $_POST['studentnumber'];
    $program = $_POST['program'];
    $courses = $_POST['courses'];
    $resume = $_FILES['resume'];

    // Validate file upload
    if ($resume['error'] == 0 && $resume['type'] == 'application/pdf') {
        // Read the resume file into a variable
        $resumeData = file_get_contents($resume['tmp_name']);

        // Database connection details (replace with actual credentials)
        $host = 'localhost';
        $username = 'u645667967_spiritbrood';
        $password = 'Islam2020.';
        $dbname = 'u645667967_graduation';

        // Create a database connection
        $conn = new mysqli($host, $username, $password, $dbname);

        // Check for connection errors
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL query to insert data into the 'life_experience' table
        $sql = "INSERT INTO life_experience (surname, firstname, middlename, studentnumber, program, courses, resume) VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Prepare and bind the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $surname, $firstname, $middlename, $studentnumber, $program, $courses, $resumeData);

        // Execute the query
        if ($stmt->execute()) {
            // Send a confirmation email with PHPMailer
            $mail = new PHPMailer(true);

            try {
                // SMTP server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'registrar@spiritbrood.org';
                $mail->Password = 'Registrar@spiritbrood1';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Set sender and recipient information
                    $mail->setFrom('registrar@spiritbrood.org', 'SpiritBrood');
                    $mail->addAddress('registrar@spiritbrood.org'); 

                // Attach the resume as a PDF file
                $mail->addStringAttachment($resumeData, 'Resume.pdf');

                // Email content
                $mail->isHTML(true);
                $mail->Subject = "New Life Experience Submission: $surname $firstname";
                $mail->Body = "A new life experience submission has been received:<br>
                               <strong>Surname:</strong> $surname<br>
                               <strong>First Name:</strong> $firstname<br>
                               <strong>Middle Name:</strong> $middlename<br>
                               <strong>Student Number:</strong> $studentnumber<br>
                               <strong>Program:</strong> $program<br>
                               <strong>Courses Seeking to Waive:</strong> $courses<br>";

                // Send the email
                $mail->send();
                echo '<script type="text/javascript">
                            alert("Your details have been successfully submitted. A confirmation email has been sent to the registrar.");
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
