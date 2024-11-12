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
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname'] ?? '');
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename'] ?? '');
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber'] ?? '');
    $sex = mysqli_real_escape_string($conn, $_POST['sex'] ?? '');
    $maritalstatus = mysqli_real_escape_string($conn, $_POST['maritalstatus'] ?? '');
    $dob = mysqli_real_escape_string($conn, $_POST['dob'] ?? '');
    $age = mysqli_real_escape_string($conn, $_POST['age'] ?? '');
    $address = mysqli_real_escape_string($conn, $_POST['address'] ?? '');
    $city = mysqli_real_escape_string($conn, $_POST['city'] ?? '');
    $state = mysqli_real_escape_string($conn, $_POST['state'] ?? '');
    $country = mysqli_real_escape_string($conn, $_POST['country'] ?? '');
    $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode'] ?? '');
    $program = mysqli_real_escape_string($conn, $_POST['program'] ?? '');
    $qualificationsText = mysqli_real_escape_string($conn, $_POST['qualifications'] ?? '');

    // Capture program-specific data
    $certification = $bachelors = $masters = $doctors = '';
    $bThSpecialization = $bMinSpecialization = $bDivSpecialization = '';
    $mThSpecialization = $mMinSpecialization = $mDivSpecialization = '';
    $dThSpecialization = $dMinSpecialization = $dDivSpecialization = '';

    if ($program == 'Certification') {
        $certification = mysqli_real_escape_string($conn, $_POST['certification'] ?? '');
    } elseif ($program == 'Bachelors') {
        $bachelors = mysqli_real_escape_string($conn, $_POST['bachelors'] ?? '');
        if ($bachelors == 'BTh') {
            $bThSpecialization = mysqli_real_escape_string($conn, $_POST['bThSpecialization'] ?? '');
        } elseif ($bachelors == 'BMin') {
            $bMinSpecialization = mysqli_real_escape_string($conn, $_POST['bMinSpecialization'] ?? '');
        } elseif ($bachelors == 'BDiv') {
            $bDivSpecialization = mysqli_real_escape_string($conn, $_POST['bDivSpecialization'] ?? '');
        }
    } elseif ($program == 'Masters') {
        $masters = mysqli_real_escape_string($conn, $_POST['masters'] ?? '');
        if ($masters == 'MTh') {
            $mThSpecialization = mysqli_real_escape_string($conn, $_POST['mThSpecialization'] ?? '');
        } elseif ($masters == 'MMin') {
            $mMinSpecialization = mysqli_real_escape_string($conn, $_POST['mMinSpecialization'] ?? '');
        } elseif ($masters == 'MDiv') {
            $mDivSpecialization = mysqli_real_escape_string($conn, $_POST['mDivSpecialization'] ?? '');
        }
    } elseif ($program == 'Doctorate') {
        $doctors = mysqli_real_escape_string($conn, $_POST['doctors'] ?? '');
        if ($doctors == 'DTh') {
            $dThSpecialization = mysqli_real_escape_string($conn, $_POST['dThSpecialization'] ?? '');
        } elseif ($doctors == 'DMin') {
            $dMinSpecialization = mysqli_real_escape_string($conn, $_POST['dMinSpecialization'] ?? '');
        } elseif ($doctors == 'DDiv') {
            $dDivSpecialization = mysqli_real_escape_string($conn, $_POST['dDivSpecialization'] ?? '');
        }
    }

    // Handle file uploads
    $passportPath = '';
    if (isset($_FILES['passport']) && $_FILES['passport']['error'] === UPLOAD_ERR_OK) {
        $passportPath = 'uploads/' . basename($_FILES['passport']['name']);
        if (!move_uploaded_file($_FILES['passport']['tmp_name'], $passportPath)) {
            echo "Error moving passport file.";
            exit();
        }
    } else {
        echo "Error uploading passport file. Error Code: " . ($_FILES['passport']['error'] ?? 'No file uploaded');
        exit();
    }

    // Handle qualifications files
    $qualificationsPaths = [];
    if (isset($_FILES['qualifications']) && is_array($_FILES['qualifications']['name'])) {
        foreach ($_FILES['qualifications']['name'] as $key => $name) {
            if ($_FILES['qualifications']['error'][$key] === UPLOAD_ERR_OK) {
                $qualificationsPath = 'uploads/' . basename($name);
                if (move_uploaded_file($_FILES['qualifications']['tmp_name'][$key], $qualificationsPath)) {
                    $qualificationsPaths[] = $qualificationsPath;
                } else {
                    echo "Error moving qualification file: $name";
                    exit();
                }
            } else {
                echo "Error uploading qualification file: " . $_FILES['qualifications']['error'][$key];
                exit();
            }
        }
    }

    // Convert the qualifications paths to a string if needed
    $qualificationsString = implode(", ", $qualificationsPaths);

    // Prepare the SQL query
    $stmt = $conn->prepare("INSERT INTO application 
        (firstname, middlename, lastname, email, phonenumber, sex, maritalstatus, dob, age, address, city, state, country, postalcode, program, certification, bachelors, bThSpecialization, bMinSpecialization, bDivSpecialization, masters, mThSpecialization, mMinSpecialization, mDivSpecialization, doctors, dThSpecialization, dMinSpecialization, dDivSpecialization, qualificationsText, passport_path, qualifications_paths) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssssssssssssssssssssssss", 
        $firstname, $middlename, $lastname, $email, $phonenumber, $sex, $maritalstatus, $dob, $age, $address, $city, $state, $country, $postalcode, $program, $certification, $bachelors, $bThSpecialization, $bMinSpecialization, $bDivSpecialization, $masters, $mThSpecialization, $mMinSpecialization, $mDivSpecialization, $doctors, $dThSpecialization, $dMinSpecialization, $dDivSpecialization, $qualificationsText, $passportPath, $qualificationsString);

    if ($stmt->execute()) {
        echo "Application submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();

    // Send confirmation email to applicant
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $emailHost;
        $mail->SMTPAuth = true;
        $mail->Username = $emailUsername;
        $mail->Password = $emailPassword;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($emailUsername, 'Registrar');
        $mail->addAddress($email, "$firstname $lastname");

        $mail->isHTML(true);
        $mail->Subject = 'Spirit Brood Application Confirmation';
        $mail->Body = 'Thank you for your application. We will review your application and get back to you shortly.';

        $mail->send();
        echo '<script type="text/javascript">
                alert("Your application has been successfully submitted. A confirmation email has been sent to your email.");
                window.location.href = "https://spiritbrood.org";
              </script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
    // Send email to the website owner with full application details
$adminMail = new PHPMailer(true);
try {
    $adminMail->isSMTP();
    $adminMail->Host = $emailHost;
    $adminMail->SMTPAuth = true;
    $adminMail->Username = $emailUsername;
    $adminMail->Password = $emailPassword;
    $adminMail->SMTPSecure = 'tls';
    $adminMail->Port = 587;

    $adminMail->setFrom($emailUsername, 'Registrar');
    $adminMail->addAddress('admissions@spiritbrood.org');

    $adminMail->isHTML(true);
    $adminMail->Subject = 'New Application Submitted';
    $adminMail->Body = "
        <h3>New Application Details</h3>
        <p><strong>First Name:</strong> $firstname</p>
        <p><strong>Middle Name:</strong> $middlename</p>
        <p><strong>Last Name:</strong> $lastname</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone Number:</strong> $phonenumber</p>
        <p><strong>Sex:</strong> $sex</p>
        <p><strong>Marital Status:</strong> $maritalstatus</p>
        <p><strong>Date of Birth:</strong> $dob</p>
        <p><strong>Age:</strong> $age</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>City:</strong> $city</p>
        <p><strong>State:</strong> $state</p>
        <p><strong>Country:</strong> $country</p>
        <p><strong>Postal Code:</strong> $postalcode</p>
        <p><strong>Program:</strong> $program</p>
        <p><strong>Certification:</strong> $certification</p>
        <p><strong>Bachelor's Degree:</strong> $bachelors</p>
        <p><strong>BTh Specialization:</strong> $bThSpecialization</p>
        <p><strong>BMin Specialization:</strong> $bMinSpecialization</p>
        <p><strong>BDiv Specialization:</strong> $bDivSpecialization</p>
        <p><strong>Master's Degree:</strong> $masters</p>
        <p><strong>MTh Specialization:</strong> $mThSpecialization</p>
        <p><strong>MMin Specialization:</strong> $mMinSpecialization</p>
        <p><strong>MDiv Specialization:</strong> $mDivSpecialization</p>
        <p><strong>Doctorate Degree:</strong> $doctors</p>
        <p><strong>DTh Specialization:</strong> $dThSpecialization</p>
        <p><strong>DMin Specialization:</strong> $dMinSpecialization</p>
        <p><strong>DDiv Specialization:</strong> $dDivSpecialization</p>
        <p><strong>Qualifications:</strong> $qualificationsText</p>
        <p><strong>Passport:</strong> $passportPath</p>
        <p><strong>Qualifications Files:</strong> $qualificationsString</p>
    ";
        $adminMail->send();
    } catch (Exception $e) {
        echo "Error sending email to admin: {$adminMail->ErrorInfo}";
    }
}
?>
