<?php
include('connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'progsportsdev.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@progsportsdev.com'; // SMTP username
    $mail->Password   = 'Pass@Email1234'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('noreply@progsportsdev.com', 'Mailer');
    $mail->addAddress('abdulrafay99910@gmail.com', 'Wide Awake Community'); // Add a recipient

    $first_name = $_POST['first_name'];
    $middle_initial = $_POST['middle_initial'];
    $last_name = $_POST['last_name'];
    $cell_phone = $_POST['cell_phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $homeless = $_POST['homeless'];
    $your_description = $_POST['your_description'];
    $other_details = $_POST['other_details'];
    $homeless2 = $_POST['homeless2'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $race = $_POST['race'];
    $hear_about_us = $_POST['hear_about_us'];
    $county_residence = $_POST['county_residence'];
    $work_hours = $_POST['work_hours'];
    $school_certification = $_POST['school_certification'];
    $learn_about_services = $_POST['learn_about_services'];
    $learn=implode(',',$learn_about_services);

    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO questionnaire (`first_name`, `middle_initial`, `last_name`, `cell_phone`, `email`, `address`, `homeless`, `your_description`, `other_details`, `homeless2`,`sex`,`age`,`race`,`hear_about_us`,`county_residence`,`work_hours`,`school_certification`,`learn_about_services`) 
            VALUES ('$first_name', '$middle_initial', '$last_name', '$cell_phone', '$email', '$address', '$homeless', '$your_description', '$other_details', '$homeless2','$sex','$age','$race','$hear_about_us','$county_residence','$work_hours','$school_certification','$learn')";

    $result = $conn->query($sql);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Form Submission';

    $bodyContent = '<h1>Form Submission Details</h1>';
    foreach ($_POST as $key => $value) {
        $bodyContent .= "<p><strong>$key:</strong> $value</p>";
    }
    $mail->Body    = $bodyContent;
 
    $mail->send();
    header('Location: ../index.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
