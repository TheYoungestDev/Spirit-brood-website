<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Collect the form data
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $studentnumber = $_POST['studentnumber'];
    $program = $_POST['program'];
    $startdate = $_POST['startdate'];
    $submission_link = $_POST['submission_link'];

    // Validate the input (You can add more validation based on your requirements)
    if (empty($surname) || empty($firstname) || empty($middlename) || empty($studentnumber) || empty($program) || empty($startdate) || empty($submission_link)) {
        echo "All fields are required!";
    } else {
        // Process the form data
        // Example: Save to the database or send email
        
        // Database connection (Example)
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

        // Prepare the SQL query
        $sql = "INSERT INTO graduations (surname, firstname, middlename, studentnumber, program, startdate, submission_link)
                VALUES ('$surname', '$firstname', '$middlename', '$studentnumber', '$program', '$startdate', '$submission_link')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Send email to registrar
            $to = "registrar@spiritbrood.org"; // Email recipient
            $subject = "New Graduation Submission: $surname $firstname"; // Email subject
            $message = "A new graduation submission has been received:\n\n" .
                       "Surname: $surname\n" .
                       "First Name: $firstname\n" .
                       "Middle Name: $middlename\n" .
                       "Student Number: $studentnumber\n" .
                       "Program: $program\n" .
                       "Start Date: $startdate\n" .
                       "Submission Link: $submission_link\n";
            $headers = "From: no-reply@spiritbrood.org\r\n"; // Sender email address

            // Send the email
            if (mail($to, $subject, $message, $headers)) {
                // Show pop-up confirmation on success
                echo '<script type="text/javascript">
                        alert("Your graduation details have been successfully submitted.A confirmation email has been sent to the registrar.");
                        window.location.href = "https://spiritbrood.org"; // Redirect to a thank you page or stay on the current page
                      </script>';
            } else {
                echo '<script type="text/javascript">
                        alert("There was an error sending the confirmation email.");
                      </script>';
            }

        } else {
            echo '<script type="text/javascript">
                    alert("Error: ' . $conn->error . '");
                  </script>';
        }

        // Close the connection
        $conn->close();
    }
}
?>
