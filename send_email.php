<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST['email'];
    
    // Prewritten email subject and message
    $subject = "Thank you for trusting us!";
    $message = "Dear Subject,\n\nThank you for agreeing to participate in PORTAL. As promised, we're now sending you all the necessary information you'll need to get started. In order to gain access to the programme, you'll be required to pay a small fee for setting up your tests. You'll find a link in the bottom of this e-mail. As a reward for your coorporation we're already preparing a big celebration in which you'll be served a large portion of cake:) \n\nLINK: https://store.steampowered.com/app/400/Portal/ \n\nThank you, and good luck. \n\nBest regards,\nAperture Laboratories \n\nWe do what we must, because we can";
    
    // Send the email to the email address submitted in the form
    $headers = "From: aplab@tobiasskovhansen.com";
    if(mail($user_email, $subject, $message, $headers)) {
        echo "Fantastic. We will contact you as soon as possible with further information.";
    } else {
        echo "Huh, there seems to be a problem. Can you try again real quick?";
    }
}
?>
