<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/style/style.css">
    <title>MailSender</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" />
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" />
        <label for="email">Missatge:</label>
        <textarea type="text" id="email" name="email"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>