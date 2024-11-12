<?php
// Include PHPMailer classes (adjusted paths based on your directory structure)
require_once 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer/PHPMailer-master/src/Exception.php';
require_once 'PHPMailer/PHPMailer-master/src/SMTP.php';


// Use PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Collect the form data
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $student_id = $_POST['student_id'];
    $street_address = $_POST['street_address'];
    $landmark = $_POST['landmark'];

    // Handle file uploads
    $proof_of_payment = $_FILES['proof_of_payment'];
    $proof_of_identity = $_FILES['proof_of_identity'];

    // Validate the input
    if (empty($surname) || empty($firstname) || empty($middlename) || empty($student_id) || empty($street_address) || empty($landmark) || empty($proof_of_payment) || empty($proof_of_identity)) {
        echo "All fields are required!";
    } else {
        // Read the files into variables
        $proof_of_payment_data = file_get_contents($proof_of_payment['tmp_name']);
        $proof_of_identity_data = file_get_contents($proof_of_identity['tmp_name']);

        // Database connection (Update with your actual database credentials)
        $host = 'localhost'; // Your database host
        $username = 'u645667967_spiritbrood'; // Your database username
        $password = 'Islam2020.'; // Your database password
        $dbname = 'u645667967_graduation'; // Your database name

        // Create a connection
        $conn = new mysqli($host, $username, $password, $dbname);

        // Check for connection errors
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL query to insert the form data and file data (as blobs) into the 'transcript' table
        $sql = "INSERT INTO transcript (surname, firstname, middlename, studentid, address, landmark, proof_of_payment, proof_of_identity)
                VALUES ('$surname', '$firstname', '$middlename', '$student_id', '$street_address', '$landmark', ?, ?)";

        // Prepare and bind the statement to handle blob data (proof of payment and identity)
        if ($stmt = $conn->prepare($sql)) {
            // Bind the file data (LONGBLOB) as parameters
            $stmt->bind_param("ss", $proof_of_payment_data, $proof_of_identity_data);

            // Execute the query
            if ($stmt->execute()) {
                // Send a confirmation email using PHPMailer
                $mail = new PHPMailer(true); // Create a new PHPMailer instance

                try {
                    //Server settings
                    $mail->isSMTP();                                            // Set mailer to use SMTP
                    $mail->Host = 'smtp.hostinger.com';                     // Set the SMTP server to send through
                    $mail->SMTPAuth = true;                                       // Enable SMTP authentication
                    $mail->Username = 'registrar@spiritbrood.org';                   // SMTP username
                    $mail->Password = 'Registrar@spiritbrood1';                      // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                            // TCP port to connect to

                    //Recipients
                    $mail->setFrom('registrar@spiritbrood.org', 'SpiritBrood');
                    $mail->addAddress('registrar@spiritbrood.org');               // Add a recipient

                    // Attach files
                    $mail->addStringAttachment($proof_of_payment_data, 'proof_of_payment.pdf'); // Attach proof of payment as a PDF file
                    $mail->addStringAttachment($proof_of_identity_data, 'proof_of_identity.pdf'); // Attach proof of identity as a PDF file

                    // Content
                    $mail->isHTML(true);                                          // Set email format to HTML
                    $mail->Subject = "New Transcript Submission: $surname $firstname";  // Email subject
                    $mail->Body    = "A new transcript submission has been received:<br><br>" .
                                     "Surname: $surname<br>" .
                                     "First Name: $firstname<br>" .
                                     "Middle Name: $middlename<br>" .
                                     "Student ID: $student_id<br>" .
                                     "Street Address: $street_address<br>" .
                                     "Landmark: $landmark<br>";

                    // Send the email
                    $mail->send();
                    echo '<script type="text/javascript">
                            alert("Your transcript details have been successfully submitted. A confirmation email has been sent to the registrar.");
                            window.location.href = "https://spiritbrood.org"; // Redirect to a thank you page or stay on the current page
                          </script>';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }

            } else {
                echo '<script type="text/javascript">
                        alert("Error: ' . $stmt->error . '");
                      </script>';
            }

            // Close the statement
            $stmt->close();
        } else {
            echo '<script type="text/javascript">
                    alert("Failed to prepare the SQL statement.");
                  </script>';
        }

        // Close the connection
        $conn->close();
    }
}
?>
