<?php
require 'vendor/autoload.php';



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader

// Instantiation and passing `true` enables exceptions
    session_start();
      include_once("conexao.php");

         $sql = "SELECT * FROM usuarios;"; // sql para obter os dados que quer apresentar
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
         
  
      $nome = $row["nome"];
      $usuario = $row["usuario"];
      $email = $row['email'];

      $_SESSION["nome"] = $nome;
        
                
        $_SESSION["usuario"] = $usuario;
      

        $_SESSION["email"] = $email;
            
        }
      
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 4;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hello2@wanderson.pro.br';              // SMTP username
    $mail->Password   = 'Tevlm8kqHUpP';                         // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
                               // TCP port to connect to

    //Recipients
    $mail->setFrom('hidrapjt@gmail.com', 'Hidra');
    $mail->addAddress($email, $nome); 

      // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
       // Add attachments
    //$mail->addAttachment('arquivo/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'conta';
    $mail->Body    = 'z Texto: '.$textt;
    $mail->AltBody = 'sucesso!!!';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}