<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <form action="odbierz.php" method="post" enctype="multipart/form-data">
        <div>
            <div>
                Login: <input tyle:"text" name="login" maxlength="8" size="5">
            </div>
            <div>
                Password: <input type="password" name="hasło" maxlength="15" size="5">
            </div>
            <div>
                <input type="submit" value="Zaloguj się">
            </div>
        </div>
    </form>
</body>

</html>