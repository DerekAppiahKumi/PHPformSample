<?php
$firstname = sanitization($_POST('fname'), 'Please input your name');

$lastname = sanitization($_POST('lname'), 'Please input your last name');

$email = email_validate($_POST('email'));

function sanitization($input, $noinput = ''){
 $input = htmlspecialchars($input);
 $input = stripslashes($input);
 $input = trim($input);
 if($noinput && strlen($input) == 0)
 {
      die($noinput);
 }

 return $input;

}

function show_error($error)
{
?>

     <strong>Please correct the following errors</strong><br>
      <?php echo $error; ?>
    
<?php
exit();
}
?>
<php
function email_validate($email){
    htmlspecialchars($email);
    if(!preg_match( ^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$ ))
{
     die("Email Address is not valid");

}
}

$subject = "test";

mail($email, $subject, 'Hello!');
header('Location: thank_you.html');
?>