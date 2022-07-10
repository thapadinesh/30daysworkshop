<?php 
include 'db.php';
session_start();
include '../../process/secure.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_query = "DELETE FROM users WHERE id = '$id'";
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result){
        echo header("Location: ../public/static/manageusers.php?msg=record_deleted");
    }
    else{
        echo header("Location: ../public/static/manageusers.php?msg=record_deletion_failure");
    }
}
?>