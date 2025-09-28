<?php
require_once __DIR__ . "../../model/Mail.php";
require_once __DIR__ .  "../../services/Mailer.php";

class MailController {
    public function procesarFormulario(array $datos): ?string {
        try {
            $mail = new Mail($datos['name'], $datos['email'], $datos['msg']);
            $mailer = new Mailer;
            $mailer->sendMail($mail);
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
        // TODO: Guardar en el historial de la bbdd -> a futuro

        //Una vez se ha podido mandar el mail-->>
        return "Email enviado!";
    }
}

?>