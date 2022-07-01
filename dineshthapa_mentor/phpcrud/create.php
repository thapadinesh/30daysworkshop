<?php
require('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Telephone Book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <a name="" id="" class="btn btn-primary" href="index.php" role="button">Manage Contacts</a>
                <h1>Add Contact</h1>
                <?php 
                if(isset($_POST['submit']))
                {
                  $name = $_POST['name'];
                  $address = $_POST['address'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];

                  $insert_query = "INSERT INTO contacts(name,address,email,phone) VALUES('$name','$address','$email','$phone')";
                  $insert_result = mysqli_query($conn,$insert_query);
                  if($insert_result)
                  {
                    echo "Contact added successfully.";
                  }
                  else 
                  {
                    echo "Contact couldn't be added successfully.";
                  }
                }
                ?>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="">Name:</label>
                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Address:</label>
                      <input type="text" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Email:</label>
                      <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Phone:</label>
                      <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
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