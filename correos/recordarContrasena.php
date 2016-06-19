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
    $mailer->SetFrom("no-reply@ties-out.com", "TIESOUT, no responder este correo.");

    $mailer->AddReplyTo("fzarater@gmail.com","Copia de contraseña");
    $mailer->Subject = "Reecordar contraseña de TIESOUT";

    $mailer->Body = '
    <body>
        <body>
            <div style="width:800px; margin-left:auto; margin-right:auto;">
                <center >
                    <figure>
                        <div style="display:inline-block; top:0; margin-right:30px;">
                            <img alt="Logo" src="logoTieOut.png" width="50" height="50">
                        </div>
                        <figcaption style="display:inline-block;">
                            <h2 style="margin:0;"><b>Reestablecer contraseña</b></h2><br>
                        </figcaption>
                    </figure>
                    <hr style="margin-bottom:30px;">
                </center>
                <span style="font-size:16px;">Hola,</span><br><br>
                <span style="font-size:16px;">Te mandamos tu nueva contraseña.</span><br><br>
                <span style="font-size:16px;"><?php echo $contrasena; ?></span><br><br>
                <hr style="margin-bottom:30px;">
                <span style="color:#CCC;">Este mensaje se envi&oacute; a <?php echo $correo; ?>. Si no pediste est&aacute; informaci&oacute;n, favor de ignorarla.
                    Para dejar de recibir correos <a>Cancela tu suscripci&oacute;n</a></span>
            </div>
        </body>
    </body>';

        $mailer->IsHTML(true);
    if($correo != ""){
        $mailer->AddAddress($correo);
    }
    $exito = false;
    if(!$mailer->Send()) {
      $exito = false;
    } else {
      $exito = true;
    }

?>
