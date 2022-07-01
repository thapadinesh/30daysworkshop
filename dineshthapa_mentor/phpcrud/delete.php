<?php 
require('config.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    
    $delete_query = "DELETE FROM contacts WHERE id=$id";
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result)
    {
        echo header('Location: index.php?msg=dsuccess');
    }
    else 
    {
        echo header('Location: index.php?msg=derror');
    }
}
?>