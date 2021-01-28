<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])) {
            echo 'username :' . $_GET['user-name'] . '<br>';
        }
    ?>
    <form method="post" action="form.php">
        <div>
            <label for="id-username">user-name</label>
            <input type="text" name="user-name" id="id-username">
        </div>
        <div>
            <label for="id-age">age</label>
            <input type="number" name="age" id="id-age">
        </div>
        <div>
            <label for="id-password">password</label>
            <input type="password" name="password" id="id-password">
        </div>
        <div>
            <label for="id-password-repeat">password repeat</label>
            <input type="password" name="passeword-repeat" id="id-password-repeat">
        </div>
        <div>
            <input type="submit" value="envoyer">
        </div>

    </form>


</body>
</html>
