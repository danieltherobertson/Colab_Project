 <?php
       $firstname = $_POST['firstname'];
	   $secondname= $_post['secondname'];
	   $businessname= $_post['businessname'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       $from = 'From: My Contact Form';
       $to = 'lgorton95@outlook.com';
       $subject = 'From Website';

       $body = "From: $firstname\n $secondname\n $businessname\n E-Mail: $email\n Message:\n $message";

       if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
           echo '<p>Message Sent Successfully!</p>';
           } else {
           echo '<p>Ah! Try again, please?</p>';
           }
       }
    ?>