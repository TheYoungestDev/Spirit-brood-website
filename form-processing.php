<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "admissions@spiritbrood.org";
    $subject = "New Admission Application";

    // Gather form data
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $middlename = filter_input(INPUT_POST, 'middlename', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $sex = filter_input(INPUT_POST, 'finduson', FILTER_SANITIZE_STRING);
    $marital_status = filter_input(INPUT_POST, 'marital_status', FILTER_SANITIZE_STRING);
    $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
    $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
    $postal = filter_input(INPUT_POST, 'postal', FILTER_SANITIZE_STRING);
    $program = filter_input(INPUT_POST, 'program', FILTER_SANITIZE_STRING);
    $certification = filter_input(INPUT_POST, 'certification', FILTER_SANITIZE_STRING);
    $bachelors = filter_input(INPUT_POST, 'bachelors', FILTER_SANITIZE_STRING);
    $bThSpecialization = filter_input(INPUT_POST, 'bThSpecialization', FILTER_SANITIZE_STRING);
    $reason = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

    // Construct the email content
    $message = "New Admission Application:\n\n";
    $message .= "First Name: $firstname\n";
    $message .= "Middle Name: $middlename\n";
    $message .= "Last Name: $lastname\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Sex: $sex\n";
    $message .= "Marital Status: $marital_status\n";
    $message .= "Date of Birth: $dob\n";
    $message .= "Age: $age\n";
    $message .= "Address: $address\n";
    $message .= "City: $city\n";
    $message .= "State: $state\n";
    $message .= "Country: $country\n";
    $message .= "Postal / Zip Code: $postal\n";
    $message .= "Program: $program\n";
    $message .= "Certification: $certification\n";
    $message .= "Bachelor's Program: $bachelors\n";
    $message .= "Bachelor's Theology Specialization: $bThSpecialization\n\n";
    $message .= "Reason for Enrolling:\n$reason\n";

    // Headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your application has been submitted successfully.";
    } else {
        echo "There was an error sending your application. Please try again.";
    }
}
?>
