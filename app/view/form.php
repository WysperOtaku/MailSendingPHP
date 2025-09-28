<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/style/style.css">
    <title>MailSender</title>
</head>
<body>
    <form method="POST" action="<?= BASE_URL ?>index.php">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name"
           value="<?= htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8') ?>" />

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"
           value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>" />

        <label for="msg">Mensaje:</label>
        <textarea id="msg" name="msg"><?= htmlspecialchars($_POST['msg'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
        
        <button type="submit">Enviar</button>

        <output><?= $mensaje ?></output>
    </form>
</body>
</html>