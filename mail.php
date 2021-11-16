
<?php
/* Set e-mail recipient */
$myemail  = "sales@digidocconvergence.com,digidocconvergence@gmail.com";

/* Check all form inputs using check_input function */
$firstname = check_input($_POST['first'], "Enter your first name");
// $lastname = check_input($_POST['last'], "Enter your last name");
$subject  = "Enquiry From DigiDoc Website";
$phone  = check_input($_POST['phone'], "Enter your phone number");
$email    = check_input($_POST['email']);
$likeit   = check_input($_POST['services']);
$comments = check_input($_POST['message'], "Write your message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* If URL is not valid set $website to empty */
if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
{
    $website = '';
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

Your got new enquiry from DigiDoc Website:

First Name: $firstname
E-mail: $email
Phone: $phone

Enquired Service for:  $likeit


Message:
$comments

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);
if ($email)
{
        echo"<script>alert('Your Message has been sucessfully send to DigiDoc Convergence');</script>";
				echo"<script>window.location.assign('index.php');</script>";
}

/* Redirect visitor to the thank you page */
header('Location: index.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>