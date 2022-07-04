<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($name!="" && $email!="" && $password!="" && $confirm_password !="")
    {
        if($password==$confirm_password)
        {
            $
        }
        else 
        {
            echo header('Location: ../index.php?msg=login_password_not_match');
        }
    }
    else 
    {
        echo header('Location: ../index.php?msg=login_empty');
    }

} 
?>