<?php

//Recipient
$to = 'marlon.timogan96@gmail.com';

//Subject
$subject = 'Test Email';

//Message
$message = 'This is to test the email';

//headers
$headers = 'From: The Sender Name <sender@marlontimogan.test.com>\r\n';
$headers .= 'Reply-To: replyto@marlontimogan.test.com\r\n';
$headers .= 'Content-type: text/html\r\n';


//Send email
mail($to,$subject,$message,$headers);