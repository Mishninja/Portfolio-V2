<?php
require 'includes/PHPMailer.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (array_key_exists('email', $_POST)) {
    $err = false;
    $msg = "";
    $email = '';

    //Basic Validation to query
    if (array_key_exists('message', $_POST)) {
        //get subject and message
        $subj = substr(strip_tags($_POST['subject']), 0, 1000);
        $query = substr(strip_tags($_POST['message']), 0, 1000);
    } else {
        $query = '';
        $msg = 'No message provided';
        $err = true;
    }

    //Basic validation to name
    if (array_key_exists('name', $_POST)) {
        $name =  substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }

    //Validate email address
    if (array_key_exists('name', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= 'Error: invalid email address provided';
        $err = true;
    }

    $to = 'mcheung1998@gmail.com';
    $email_body = "";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "E-mail: " . $email . "\n";
    $email_body .= "Message: " . $query . "\n";

    $mail = new PHPMailer();
    $mail->Port = 25;
    $mail->CharSet = PHPMailer::CHARSET_UTF8;
    $mail->setFrom('contact@michellecheung.net', 'Portfolio Contact Form');
    $mail->addAddress($to);
    $mail->addReplyTo($email, $name);
    $mail->Subject = 'Portfolio Contact Form Submission:' . " " . $subj;
    $mail->Body = $email_body;

    $siteKey = "6Lcb9nsgAAAAAImVLS72C-fFIENAuAlGbWHbhlKS";
    $secretKey = "6Lcb9nsgAAAAAMXICVnlO8pd08Kv6viVVyDQrn78";
    $responseKey = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $responseKey;
    $res = file_get_contents($url);
    $results = json_decode($res);

    if ($results->success) {
        if (!$err) {
            if (!$mail->send()) {
                $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $msg .= 'Message sent!';
            }
        }
    } else {
        echo $results->success;
        $msg .= 'Please complete verification';
    }
}
?>


<h2 class="section-heading">Connect</h2>
<div class="connect-container">
    <div class="col content">
        <h3 class="sec-header">Let's chat!</h3>
        <p>Get in touch using the form below!</p>
    </div>
    <div class="col image">
        <img src="images/connect/connect.jpg">
    </div>
    <div class="triangle bg-repeat"></div>
</div>
<div class="form-container" id='form-container'>
    <div class="graphic bg-repeat"><img src="images/bnr-img.svg" alt="Peace sign graphic"></div>
    <?php if (empty($msg)) { ?>
        <form class="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="text" name="name" placeholder="First and Last Name" id="name" required />
            <input type="email" name="email" placeholder="Email" id="email" required>
            <input type="subject" name="subject" placeholder="Subject" id="subject">
            <textarea id="message" class="textarea" placeholder="Your Message" name="message" rows="8"></textarea>
            <div class="g-recaptcha" data-callback="captchaVerified" data-sitekey="6Lcb9nsgAAAAAImVLS72C-fFIENAuAlGbWHbhlKS"></div>
            <input type="submit" value="Send" id="submit" disabled>
        </form>
    <?php } else {
        echo "<div class='error-msg-wrap'>";
        echo "<h2 class='error-msg'>" . $msg . "</h2>";
        echo "<div class='btn'>
                <a href=index.php>Send another message.</a>
            </div>";
        echo "</div>";
    } ?>

    <div class="graphic bg-repeat"><img src="images/bnr-img.svg" alt="Peace sign graphic"></div>
</div>

<script>
    function captchaVerified() {
        var submitBtn = document.getElementById("submit");
        submitBtn.removeAttribute("disabled");
    }
</script>
</body>

</html>