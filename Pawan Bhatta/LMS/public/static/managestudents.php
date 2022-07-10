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
            <div class="col-sm-9 bg-success text-center text-light" style="height:98vh; overflow-y:scroll;">
                <h2>Manage Students</h2>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th> NAME</th>
                            <th> ID_NUMBER</th>
                            <th> CLASS</th>
                            <th> SECTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $manage_query = 'SELECT * FROM students';;
                        $manage_result = mysqli_query($conn, $manage_query);
                        $i=0;
                        while($row = $manage_result->fetch_assoc()){
                            $i++;
                            ?>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['id_number']; ?></td>
                            <td><?php echo $row['class']; ?></td>
                            <td><?php echo $row['section']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm"><a class="text-decoration-none text-light" href="editstudents.php?id=<?php echo $row['id']; ?>">Edit</a></button>
                                <button type="button" class="btn btn-danger btn-sm"><a class="text-decoration-none text-light" href="../../process/deletestudents.php?id=<?php echo $row['id']; ?>">Delete</a></button>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
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