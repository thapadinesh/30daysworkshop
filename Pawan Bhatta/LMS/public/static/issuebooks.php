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
                <h2>Issue Books</h2>
                <hr>
                <div class="form-group">
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $number = $_POST['number'];
                        $student_name = $_POST['student_name'];
                        $rollno = $_POST['rollno'];
                        if ($name != "" && $number !== "" && $student_name != "" && $rollno != "") {
                            $search_query = "SELECT * FROM issued_books where rollno = '$rollno'";
                            $search_result = mysqli_query($conn, $search_query);
                            $row = $search_result->fetch_assoc();
                            $rows = mysqli_num_rows($search_result);
                            if($number != $row['number']){
                            if ($rows <= 1) {
                                $add_query = "INSERT INTO issued_books(name,number,student_name,rollno) VALUES('$name','$number','$student_name','$rollno')";
                                $add_result = mysqli_query($conn, $add_query);
                                if ($add_result) {
                    ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Book has been issued</strong>
                                    </div>

                                    <script>
                                        $(".alert").alert();
                                    </script>
                            <?php
                                }
                                else{

                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Only two books can be issued to a student</strong>
                                    </div>

                                    <script>
                                        $(".alert").alert();
                                    </script>
                                    <?php
                                }
                                }
                            }
                            else{
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>This book has already been issued.</strong> 
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
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <label for=""></label>
                        <select name="name" class="form-select form-select-xl w-100" aria-label=".form-select-xl example">
                            <option selected>Select Book</option>
                            <?php
                            $book_query = "SELECT * FROM books";
                            $book_result = mysqli_query($conn, $book_query);
                            while ($book_row = $book_result->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $book_row['name']; ?>"><?php echo $book_row['name']; ?></option>
                            <?php } ?>
                        </select>
                        <label for=""></label>
                        <select name="number" class="form-select form-select-xl w-100" aria-label=".form-select-xl example">
                            <option selected>Select Book Number</option>
                            <?php
                            $book_query = "SELECT * FROM books";
                            $book_result = mysqli_query($conn, $book_query);
                            while ($book_row = $book_result->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $book_row['number']; ?>"><?php echo $book_row['number']; ?></option>
                            <?php } ?>
                        </select>
                        <label for=""></label>
                        <select name="student_name" class="form-select form-select-xl w-100" aria-label=".form-select-xl example">
                            <option selected>Select Students Name</option>
                            <?php
                            $students_query = "SELECT * FROM students";
                            $students_result = mysqli_query($conn, $students_query);
                            while ($students_row = $students_result->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $students_row['name']; ?>"><?php echo $students_row['name']; ?></option>
                            <?php } ?>
                        </select>
                        <label for=""></label>
                        <select name="rollno" class="form-select form-select-xl w-100" aria-label=".form-select-xl example">
                            <option selected>Select ID Number</option>
                            <?php
                            $students_query = "SELECT * FROM students";
                            $students_result = mysqli_query($conn, $students_query);
                            while ($students_row = $students_result->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $students_row['id_number']; ?>"><?php echo $students_row['id_number']; ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Issue</button>
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