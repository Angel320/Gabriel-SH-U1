<?php  
//echo getcwd();

require_once "../BD/recuperar-correo.php";







class crudcorreo{


    public function enviarcorreo($correM, $pswM){
         

        // echo $correM;
        //echo $pswM;

        

        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        require 'PHPMailer/Exception.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;


        $mail = new PHPMailer(true);

        try {
        	//Cuenta que enviara los correos
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'latamerica320@gmail.com';
            $mail->Password = 'oqgnunmblqkisgvd';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Envio del correo
            $mail->setFrom('latamerica320@gmail.com', 'Latam-erica');
            $mail->addAddress($correM, 'Nombe de usuario');
            //$mail->addCC('concopia@gmail.com');

            //$mail->addAttachment('docs/dashboard.png', 'Dashboard.png');

            $mail->isHTML(true);
            $mail->Subject = 'Recuperar Contraseña';
            $mail->Body = '¡Buen día!, Se ha solicitado un correo para recuperar su contraseña <br/>Su contraseña es: <b>'.$pswM.'</b>.';
            $mail->send();

            //echo 'Correo enviado';
        } catch (Exception $e) {
            echo 'Mensaje ' . $mail->ErrorInfo;
        }
        

    }//Fin de la funcion

}//Fin del CRUD



?>
