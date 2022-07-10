<?php include 'process/db.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>Login || Library Management Systen</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="card text-center">
    <img class="card-img-top" src="holder.js/100px180/" alt="">
    <div class="card-body">
      <h4 class="card-title">Login</h4>
      <p class="card-text">
      <div class="form-group">
        <?php
        if (isset($_POST['submit'])) {
          $email = base64_encode($_POST['email']);
          $password = md5($_POST['password']);
          $select_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
          $select_result = mysqli_query($conn, $select_query);
          $count = mysqli_num_rows($select_result);
          if ($count == 1) {
            session_start();
            $session = $select_result->fetch_assoc();
            $_SESSION['id'] = $session['id'];
            $_SESSION['name'] = $session['name'];
            $_SESSION['email'] = $session['email'];
            echo header('Location: public/static/index.php');
          } else {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Wrong Credentails</strong>
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
          <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Enter your Email">
          <label for=""></label>
          <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="Enter your Password">
          <br>
          <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      </p>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>