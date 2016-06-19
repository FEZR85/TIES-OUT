<?php

    //require('phpmailer/class.phpmailer.php');
    require 'phpmailer/PHPMailerAutoload.php';
    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPAuth = true;
    $mailer->SMTPSecure = 'tls';
    $mailer->Host = "mx1.hostinger.mx";
    $mailer->Port = 587;

    $mailer->Username   = "no-reply@ties-out.com";
    $mailer->Password   = "Nyd263UyvVCQ";
    $mailer->SetFrom($correo);

    $mailer->AddReplyTo("fzarater@gmail.com","Copia de registro");
    $mailer->Subject = "Ususario envio correo";

    $mailer->Body = '<body>
            <div style="width:800px; margin-left:auto; margin-right:auto;">
                <center >
                    <figure>
                        <div style="display:inline-block; top:0; margin-right:30px;">
                            <img alt="Logo" src="logoTieOut.png" width="50" height="50">
                        </div>
                        <figcaption style="display:inline-block;">
                            <h2 style="margin:0;"><b>Correo de usuario <?php echo $nombre; ?></b></h2><br>
                        </figcaption>
                    </figure>
                    <hr style="margin-bottom:30px;">
                </center>
                <span style="font-size:16px;"><?php echo $mensaje; ?></span><br><br>
                <hr style="margin-bottom:30px;">
            </div>
        </body>
    </body>
';


    $mailer->IsHTML(true);
    if($correo != ""){
        $mailer->AddAddress('contacto@ties-out.com');
    }
    $exito = false;
    if(!$mailer->Send()) {
      $exito = false;
    } else {
      $exito = true;
    }

?>
