<?php 
require('config.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    //finding file name
    $select_query = "SELECT * FROM filemanager WHERE id=$id";
    $select_result = mysqli_query($conn,$select_query);
    $select_row = mysqli_fetch_assoc($select_result);
    $select_name = $select_row['filelink'];
    
    $file_full_path = "uploads/".$select_name;
    
    //Now let's delete file
    unlink($file_full_path);

    $query = "DELETE FROM filemanager WHERE id=$id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo header('Location: uploadfile.php?msg=dsuccess');
    }
    else 
    {
        echo header('Location: uploadfile.php?msg=derror');
    }
}
?>