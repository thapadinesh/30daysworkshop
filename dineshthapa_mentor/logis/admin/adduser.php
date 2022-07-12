<?php 
require('inc/toppart.php'); 
require('inc/navbar.php');
require('inc/sidebar.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <?php
              if(isset($_POST['submit']))
              {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $confirm_password = md5($_POST['confirm_password']);

                if($password == $confirm_password)
                {
                  $insert_query = "INSERT INTO users (name,email,password) VALUES('$name','$email','$password')";
                  $insert_result = mysqli_query($conn,$insert_query);
                  if($insert_result)
                  {
                    ?>
                   <meta http-equiv="refresh" content="0; URL=manageuser.php?msg=asuccess" />
                   <?php 
                  }
                  else 
                  {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>User couldn't be added successfully.</strong> 
                      </div>
                    <?php 
                  }

                }
              }
              ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require('inc/footer.php'); ?>