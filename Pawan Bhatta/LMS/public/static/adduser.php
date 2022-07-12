<?php include '../../process/db.php'; 
session_start();
include '../../process/secure.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Library Management System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../../favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container my-1 border border-secondary">
        <div class="row">
            <?php include '../inc/sidebar.php'; ?>
            <div class="col-sm-9 bg-success text-center text-light">
                <h2>Add User</h2>
                <hr>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = base64_encode($_POST['email']);
                    $password = md5($_POST['password']);
                    $confirm_password = md5($_POST['confirm_password']);
                    if ($name != "" && $email !== "" && $password != "" && $confirm_password != "") {
                        $select_query = "SELECT * FROM users WHERE email = '$email'";
                        $select_result = mysqli_query($conn, $select_query);
                        $rows  = mysqli_num_rows($select_result);
                        if ($rows <= 0) {
                            if($password==$confirm_password){
                            $add_query = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
                            $add_result = mysqli_query($conn, $add_query);
                            if ($add_result) {
                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>New User has been added</strong>
                                </div>

                                <script>
                                    $(".alert").alert();
                                </script>
                            <?php
                            }}
                            else{
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Password don't match</strong>
                                </div>
                                <?php
                            }
                        } else {
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>User Already Exists</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>All fields are required</strong>
                        </div>

                        <script>
                            $(".alert").alert();
                        </script>
                <?php
                    }
                }
                ?>
                <div class="form-group">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <label for=""></label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="User Name">
                        <label for=""></label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Email">
                        <label for=""></label>
                        <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="Password">
                        <label for=""></label>
                        <input type="password" class="form-control" name="confirm_password" id="" aria-describedby="emailHelpId" placeholder="Confirm Password">
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>