<?php
require_once("authenticate.php");
if (!isset($_SESSION['UID'])) {
    header("Location: index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="shell.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHELL</title>
</head>

<body>
    <div class="main">
        <div class="output">
            <?php
            $command = isset($_POST['command']) ? $_POST['command'] : 'CMD';
            $output = shell_exec($command);
            ?>
        </div>

        <div class="display">
            <?php
            echo ($output);
            ?>
        </div>

        <div class="input">
            <form action="shell.php" method="POST">
                <input type="text" name="command" id="command" placeholder="COMMAND HERE" autocomplete="off" autofocus="on">
            </form>
        </div>
    </div>
    </div>
</body>
</html>