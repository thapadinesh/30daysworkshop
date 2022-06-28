<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://nikas.com.np/cascadelib/center.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <title>LOGIN</title>
</head>

<body><br>
    <div class="center">
        <form action="authenticate.php" method="post">
            <h2>ENTER THE KEYS</h2>
            <br>
            <input type="password" name="pw1"><br>
            <input type="password" name="pw2"><br><br>
            <input type="submit" value="GET IN" class="btn btn-primary">
        </form>
    </div>
    <br>
</body>

</html>