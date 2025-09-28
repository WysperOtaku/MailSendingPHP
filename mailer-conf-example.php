<?php
return [
"SMTP_HOST" => "smtp.tu-proveedor.com",      # Porfavor, para no complicarse, smtp.gmail.com
"SMTP_USER" => "usuario@tu-dominio.com",     # Tu email de envío
"SMTP_PASS" => "superSecretaClave123",       # No subir al repo
"SMTP_PORT" => 587,                          # 465 para SSL, 587 para TLS -> Se pondra 587 si no pones nada
"SMTP_SECURE" => "tls"                       # tls o ssl --> por defecto te pondre tls
];
?>