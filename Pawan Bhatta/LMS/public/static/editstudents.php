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
                <h2>Update Students</h2>
                <hr>
                <?php 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $select_query = "SELECT * FROM students WHERE id='$id'";
                    $select_result = mysqli_query($conn,$select_query);
                    $select_row = $select_result->fetch_assoc();
                }
                ?>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $id_number = $_POST['id_number'];
                    $class = $_POST['class'];
                    $section = $_POST['section'];
                    if ($name != "" && $id_number !== "" && $class != "" && $section != "") {
                        $add_query = "UPDATE students SET name = '$name', id_number = '$id_number', class = '$class' , section = '$section' WHERE id = '$id'";
                        $add_result = mysqli_query($conn, $add_query);
                        if ($add_result) {
                ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Student Record has been updated</strong>
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
                        <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" value="<?php echo $select_row['name']; ?>" placeholder="Student Name">
                        <label for=""></label>
                        <input type="number" class="form-control" name="id_number" id="" aria-describedby="emailHelpId" value="<?php echo $select_row['id_number']; ?>" placeholder="Id Number">
                        <label for=""></label>
                        <input type="number" class="form-control" name="class" id="" aria-describedby="emailHelpId" value="<?php echo $select_row['class']; ?>" placeholder="Class">
                        <label for=""></label>
                        <input type="text" class="form-control" name="section" id="" aria-describedby="emailHelpId" value="<?php echo $select_row['section']; ?>" placeholder="Section">
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
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