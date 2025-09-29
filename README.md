# MailSendingPHP 📧✨

¡El sistema de envío de correos más molón que vas a ver! Usando PHPMailer porque somos así de sofisticados 😎

## Lo Que Necesitas (spoiler: casi nada) 🎯

- **PHP**: 7.4+ (o lo que tengas por ahí, que no somos exigentes)
- **Composer** para que haga la magia de las dependencias ✨

¡Y ya está! Sin extensiones raras, sin complicaciones. Solo PHP y Composer haciendo su trabajo como campeones.

## Instalación (más fácil que hacer tortilla) 🍳

### 1. Clona esto como si fuera tu repo favorito
```bash
git clone https://github.com/WysperOtaku/MailSendingPHP.git
cd MailSendingPHP
```

### 2. Deja que Composer haga su magia
```bash
composer install
```
*Y ya tienes todo listo, champion* 🏆

### 3. Configura tu servidor de correo (la parte "secreta") 🕵️

**IMPORTANTE**: No seas como esos que suben las contraseñas a GitHub, ¿vale?

1. Copia el archivo de ejemplo (que somos majos y te lo damos hecho):
   ```bash
   cp mailer-conf-example.php mailer-conf.php
   ```

2. Edita `mailer-conf.php` con tus datos reales (¡los de verdad, eh!):
   ```php
   <?php
   return [
       "SMTP_HOST" => "smtp.gmail.com",        // Tu servidor SMTP favorito
       "SMTP_USER" => "tu-email@gmail.com",    // Tu email molón
       "SMTP_PASS" => "tu-contraseña-app",     // Tu súper-contraseña secreta
       "SMTP_PORT" => 587,                     // El puerto que mola (587 para TLS)
       "SMTP_SECURE" => "tls"                  // Porque la seguridad está guay
   ];
   ?>
   ```

**🚨 ¡OJO AL PARCHE!**: 
- Nunca, JAMÁS, subas el archivo `mailer-conf.php` al repo (tu yo futuro te lo agradecerá)
- Ya está en `.gitignore` porque somos previsores
- Si usas Gmail, necesitas una "contraseña de aplicación" (Google cosas 🤷‍♂️)

## Entorno de Desarrollo (para los que molan) 💻

### XAMPP es tu amigo
Te recomendamos **XAMPP** porque es fácil y funciona de lujo:

1. **Descárgate XAMPP** desde [https://www.apachefriends.org/](https://www.apachefriends.org/) (es gratis, no te preocupes)
2. **Arranca Apache** desde el panel de control (botoncito verde y listo)
3. **Mete el proyecto** en la carpeta `htdocs` de XAMPP
4. **Accede** a `http://localhost/MailSendingPHP/` y ¡tachán! ✨

### phpMyAdmin (para el futuro)
Para cuando añadamos la **base de datos** (que ya llegará):

1. **phpMyAdmin** viene con XAMPP (regalo de la casa)
2. Ve a `http://localhost/phpmyadmin/`
3. Aquí podrás hacer de DBA cuando implementemos el historial de correos 🗄️

## Cómo Usar Esto (spoiler: es súper fácil) 🎯

1. **Ve al proyecto** en tu navegador (ya sabes, esa ventanita)
2. **Rellena el formulario** con:
   - Nombre del destinatario (no pongas "Fulanito")
   - Email del destinatario (que sea real, por favor)
   - El mensaje molón que quieras enviar
3. **Dale a "Enviar"** y ¡voilà! El correo vuela hacia su destino 🚀

## Estructura del Proyecto (para los curiosos) 🗂️

```
MailSendingPHP/
├── app/
│   ├── controller/
│   │   └── MailController.php    # El jefe que controla todo
│   ├── model/
│   │   └── Mail.php              # El modelo que valida los datos
│   ├── services/
│   │   └── Mailer.php            # El trabajador que envía los correos
│   └── view/
│       └── form.php              # La cara bonita del formulario
├── public/
│   └── style/
│       └── style.css             # Los estilos que hacen que no duela la vista
├── vendor/                       # Las dependencias de Composer (no tocar)
├── composer.json                 # La lista de la compra de Composer
├── conf.php                      # Configuración base (muy básica)
├── index.php                     # La puerta de entrada
├── mailer-conf-example.php       # El ejemplo que te salvará la vida
└── mailer-conf.php              # Tu config secreta (crea este archivo)
```

## Configuración SMTP (los chuletas) 📨

### Gmail (el clásico)
```php
"SMTP_HOST" => "smtp.gmail.com",
"SMTP_PORT" => 587,
"SMTP_SECURE" => "tls"
```

### Outlook/Hotmail (para los de Microsoft)
```php
"SMTP_HOST" => "smtp-mail.outlook.com",
"SMTP_PORT" => 587,
"SMTP_SECURE" => "tls"
```

### Yahoo (los nostálgicos)
```php
"SMTP_HOST" => "smtp.mail.yahoo.com",
"SMTP_PORT" => 587,
"SMTP_SECURE" => "tls"
```

## Cuando las Cosas se Tuercen (troubleshooting con estilo) 🔧

### Error: "No se puede conectar al servidor SMTP"
- Revisa que tus credenciales no sean "123456" (en serio, cámbialas)
- Asegúrate de que el puerto y el cifrado sean los correctos
- Para Gmail: activa la verificación en 2 pasos y usa contraseña de aplicación (Google es así de especial)

### Error: "Class 'PHPMailer' not found"
- Ejecuta `composer install` (¿lo hiciste ya? ¿Seguro?)
- Comprueba que existe `vendor/autoload.php` (si no está, algo raro pasa)

### Error: "mailer-conf.php not found"
- Crea el archivo `mailer-conf.php` copiando `mailer-conf-example.php`
- Ponlo en la raíz del proyecto (no en una carpeta perdida)

*Si sigues teniendo problemas, respira hondo y vuelve a intentarlo* 🧘‍♂️

## Lo Que Viene (el futuro molón) 🚀

- **Base de datos**: Para guardar un historial de correos épico
- **Plantillas**: Porque mandar emails feos está pasado de moda
- **Adjuntos**: Para enviar esos memes que tanto te gustan
- **Validación premium**: Verificación de emails de nivel ninja

*Paciencia, que las buenas cosas se hacen esperar* ⏰

## Licencia 📄

Este proyecto está bajo la Licencia MIT. Mira el archivo `LICENSE` si te gusta leer la letra pequeña.

## Contribuir (únete a la fiesta) 🎉

¡Las contribuciones son súper bienvenidas! Abre un issue o manda un pull request. No seas tímido/a, que no mordemos 😄

---

*Hecho con ❤️ y mucho café por Wysper*
