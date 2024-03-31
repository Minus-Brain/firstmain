<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>Form</title>
        <link rel="shortcut icon"
        href="images/icon.png"
        type="image/x-icon">
        <link rel="stylesheet" href="styleSignUP.css">
        <link rel="stylesheet" href="indexSignUP.css">
    </head>
    <body>
        <?php
            $name = $_POST['L-Password'];
            $email = $_POST['L-Email'];
            $password = $_POST['L-Password'];

            $name = htmlspecialchars($name);
            $email = htmlspecialchars($email);
            $password = htmlspecialchars($password);
        ?>
        <p>Здравствуйте, <?php echo $name ?></p>
        <p>На ваш email <?php echo $email ?> успешно отправлено письмо!</p>
    </body>
</html>