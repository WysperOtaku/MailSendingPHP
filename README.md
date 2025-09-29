# MailSendingPHP

Sistema de envío de correos electrónicos usando PHPMailer con una interfaz web sencilla.

## Requisitos del Sistema

- **PHP**: 5.5.0 o superior (recomendado PHP 8.0+)
- **Extensiones PHP requeridas**:
  - `ext-ctype`
  - `ext-filter` 
  - `ext-hash`
- **Extensiones PHP recomendadas**:
  - `ext-mbstring` (para codificación multibyte)
  - `ext-openssl` (para SMTP seguro y firmas DKIM)
- **Composer** para gestión de dependencias

## Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/WysperOtaku/MailSendingPHP.git
cd MailSendingPHP
```

### 2. Instalar dependencias
```bash
composer install
```

### 3. Configurar el servidor de correo

**IMPORTANTE**: Debes crear tu archivo de configuración a partir del ejemplo proporcionado.

1. Copia el archivo de ejemplo:
   ```bash
   cp mailer-conf-example.php mailer-conf.php
   ```

2. Edita `mailer-conf.php` con tus datos reales:
   ```php
   <?php
   return [
       "SMTP_HOST" => "smtp.gmail.com",        // Tu servidor SMTP
       "SMTP_USER" => "tu-email@gmail.com",    // Tu dirección de correo
       "SMTP_PASS" => "tu-contraseña-app",     // Tu contraseña o token de aplicación
       "SMTP_PORT" => 587,                     // Puerto SMTP (587 para TLS, 465 para SSL)
       "SMTP_SECURE" => "tls"                  // Tipo de cifrado (tls o ssl)
   ];
   ?>
   ```

**⚠️ Importante**: 
- Nunca subas el archivo `mailer-conf.php` al repositorio ya que contiene información sensible
- El archivo `mailer-conf.php` está incluido en `.gitignore` por seguridad
- Para Gmail, necesitarás generar una "contraseña de aplicación" específica

## Entorno de Desarrollo Recomendado

### XAMPP
Se recomienda usar **XAMPP** como entorno de desarrollo local:

1. **Descargar e instalar XAMPP** desde [https://www.apachefriends.org/](https://www.apachefriends.org/)
2. **Iniciar Apache** desde el panel de control de XAMPP
3. **Colocar el proyecto** en la carpeta `htdocs` de XAMPP
4. **Acceder** al proyecto vía `http://localhost/MailSendingPHP/`

### phpMyAdmin
Para la gestión de la **base de datos** (funcionalidad futura):

1. **phpMyAdmin** viene incluido con XAMPP
2. Accede a `http://localhost/phpmyadmin/`
3. Aquí podrás gestionar las bases de datos cuando se implemente el historial de correos

## Uso

1. **Navega** al directorio del proyecto en tu navegador
2. **Completa el formulario** con:
   - Nombre del destinatario
   - Dirección de correo electrónico
   - Mensaje a enviar
3. **Haz clic en "Enviar"** para procesar el correo

## Estructura del Proyecto

```
MailSendingPHP/
├── app/
│   ├── controller/
│   │   └── MailController.php    # Controlador principal
│   ├── model/
│   │   └── Mail.php              # Modelo de datos del correo
│   ├── services/
│   │   └── Mailer.php            # Servicio de envío de correos
│   └── view/
│       └── form.php              # Vista del formulario
├── public/
│   └── style/
│       └── style.css             # Estilos CSS
├── vendor/                       # Dependencias de Composer
├── composer.json                 # Configuración de dependencias
├── conf.php                      # Configuración base del proyecto
├── index.php                     # Punto de entrada principal
├── mailer-conf-example.php       # Ejemplo de configuración SMTP
└── mailer-conf.php              # Tu configuración SMTP (crear manualmente)
```

## Configuración SMTP

### Gmail
```php
"SMTP_HOST" => "smtp.gmail.com",
"SMTP_PORT" => 587,
"SMTP_SECURE" => "tls"
```

### Outlook/Hotmail
```php
"SMTP_HOST" => "smtp-mail.outlook.com",
"SMTP_PORT" => 587,
"SMTP_SECURE" => "tls"
```

### Yahoo
```php
"SMTP_HOST" => "smtp.mail.yahoo.com",
"SMTP_PORT" => 587,
"SMTP_SECURE" => "tls"
```

## Resolución de Problemas

### Error: "No se puede conectar al servidor SMTP"
- Verifica que tus credenciales SMTP sean correctas
- Asegúrate de que el puerto y el tipo de cifrado sean los adecuados
- Para Gmail, verifica que tengas habilitada la verificación en 2 pasos y uses una contraseña de aplicación

### Error: "Class 'PHPMailer' not found"
- Ejecuta `composer install` para instalar las dependencias
- Verifica que el archivo `vendor/autoload.php` exista

### Error: "mailer-conf.php not found"
- Crea el archivo `mailer-conf.php` basándote en `mailer-conf-example.php`
- Asegúrate de que esté en el directorio raíz del proyecto

## Características Futuras

- **Base de datos**: Historial de correos enviados
- **Plantillas**: Sistema de plantillas para correos
- **Adjuntos**: Soporte para archivos adjuntos
- **Validación avanzada**: Verificación de correos electrónicos más robusta

## Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## Contribución

Las contribuciones son bienvenidas. Por favor, abre un issue o crea un pull request para mejoras o correcciones.
