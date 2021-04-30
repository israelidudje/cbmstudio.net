
<?php
    $to = 'charlesben28@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $message=" ";
    $message.='A NEW MESSAGE FROM '.$_POST['name'].' via '.$_POST['email'].'<br />';    
    $message.=$_POST['message'];
    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
