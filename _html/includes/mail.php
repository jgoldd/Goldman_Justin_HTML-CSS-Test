<?php
/* Set e-mail recipient */
$myemail = "torim@bayardad.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$email = check_input($_POST['email']);
$subject = 'HTML/CSS Test';
$headers = 'From: dareu2forget@gmail.com' . "\r\n" .
    'Reply-To: dareu2forget@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$message = "

Name: $name
E-mail: $email



";

/* Send the message using mail() function */
mail($myemail, $subject, $message, $headers);

/* Redirect visitor to the thank you page */
header('Location: ../index.html');

exit();

/* ERROR HANDLING */
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

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}

 ?>
