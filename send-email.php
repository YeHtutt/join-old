<?php

if (isset($_POST['email'])) {
  $to = $_POST['email'];
  $subject = 'Invite to Join';
  $message = 'Are you tired of struggling to manage your projects?
              Do you want a reliable and efficient tool to help you plan, track, and complete your projects with ease?
              If so, we have the perfect solution for you: Join!';
  $headers = 'From: Join-mail@web.de' . "\r\n" .
             'Reply-To: Join-mail@web.de' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
    if (mail($to, $subject, $message, $headers)) {
      echo 'Email sent to ' . $to;
    } else {
      echo 'Failed to send email';
    }
  } else {
    echo 'Invalid email address';
  }
}

?>