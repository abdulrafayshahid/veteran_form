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

    $date = $_POST['date'];
    $name = $_POST['name'];
    $state = $_POST['state'];
    $older_than_55 = $_POST['older_than_55'];
    $hear_about_us = $_POST['hear_about_us'];
    $seeking_resources = $_POST['seeking_resources'];
    $dob = $_POST['dob'];
    $street_address = $_POST['street_address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $abundant_aging_question1 = $_POST['abundant_aging_question1'];
    $abundant_aging_question2 = $_POST['abundant_aging_question2'];
    $abundant_aging_question3 = $_POST['abundant_aging_question3'];
    $volunteering_question1 = $_POST['volunteering_question1'];
    $volunteering_question2 = $_POST['volunteering_question2'];
    $volunteering_question3 = $_POST['volunteering_question3'];
    $volunteering_question4 = $_POST['volunteering_question4'];
    $kinship_family_question1 = $_POST['kinship_family_question1'];
    $kinship_family_question2 = $_POST['kinship_family_question2'];
    $kinship_family_question3 = $_POST['kinship_family_question3'];
    $kinship_family_question4 = $_POST['kinship_family_question4'];
    $care_services_question1 = $_POST['care_services_question1'];
    $care_services_question2 = $_POST['care_services_question2'];
    $care_services_question3 = $_POST['care_services_question3'];
    $legal_decision_making_question1= $_POST['legal_decision_making_question1'];
    $legal_decision_making_question2= $_POST['legal_decision_making_question2'];
    $legal_decision_making_question3= $_POST['legal_decision_making_question3'];
    $legal_decision_making_question4= $_POST['legal_decision_making_question4'];
    $legal_decision_making_question5= $_POST['legal_decision_making_question5'];
    $legal_decision_making_question6= $_POST['legal_decision_making_question6'];
    $lss_meals_question1 = $_POST['lss_meals_question1'];
    $lss_meals_question2 = $_POST['lss_meals_question2'];
    $lss_meals_question3 = $_POST['lss_meals_question3'];
    $lss_meals_question4 = $_POST['lss_meals_question4'];
    $lss_meals_question5 = $_POST['lss_meals_question5'];
    $volunteer_paid_opportunities_question1 = $_POST['volunteer_paid_opportunities_question1'];
    $volunteer_paid_opportunities_question2 = $_POST['volunteer_paid_opportunities_question2'];
    $volunteer_paid_opportunities_question3 = $_POST['volunteer_paid_opportunities_question3'];
    $volunteer_paid_opportunities_question4 = $_POST['volunteer_paid_opportunities_question4'];
    $volunteer_paid_opportunities_question5 = $_POST['volunteer_paid_opportunities_question5'];

    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO questionnaire (`date`, `name`, `state`, `older_than_55`, `hear_about_us`, `seeking_resources`, `dob`, `street_address`, `phone`, `email`) 
            VALUES ('$date', '$name', '$state', '$older_than_55', '$hear_about_us', '$seeking_resources', '$dob', '$street_address', '$phone', '$email')";

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
