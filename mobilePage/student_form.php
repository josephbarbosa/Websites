<?php
if(isset($_POST['email'])) {
    $email_to = "to@domain.com";
    $email_final = "oshintudayan@oshint.com";
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $email_subject = $_POST['location']; // required
    $address = $_POST['address']; // required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Contact Form From Oshin's Website\n\n";
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "\n\nSubject:\n".clean_string($email_subject)."\n";
    $email_message .= "\nMessage:\n".clean_string($address)."\n";

// create email headers
$headers = 'From: '.$email_final."\r\n".
'Reply-To: '.$email_final."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail('oshintudayan@oshint.com', $email_subject, $email_message, $headers);
?>
  <!-- include your own success html here -->

  <meta http-equiv="refresh" content="0;url=mobilecontactsuccess.html"/>
  
  <?php
}
?>