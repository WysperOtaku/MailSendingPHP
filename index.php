<?php
    require_once('conf.php');
    require_once('app/controller/MailController.php');

    $mensaje = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller = new MailController();
        $mensaje = $controller->procesarFormulario($_POST);
    }

    require_once('app/view/form.php');
?>