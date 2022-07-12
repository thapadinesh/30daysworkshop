<?php 
require('inc/toppart.php'); 
require('inc/navbar.php');
require('inc/sidebar.php');
?>

<?php 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $select_query = "SELECT * FROM users WHERE id=$id";
    $select_result = mysqli_query($conn,$select_query);
    $select_row = mysqli_fetch_assoc($select_result);
    $select_name = $select_row['name'];
    $select_email = $select_row['email'];
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
                <h3 class="card-title">Edit User</h3>
              </div>
              <?php
              if(isset($_POST['submit']))
              {
                $name = $_POST['name'];
                $email = $_POST['email'];

                  $update_query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
                  $update_result = mysqli_query($conn,$update_query);
                  if($update_result)
                  {
                   ?>
                   <meta http-equiv="refresh" content="0; URL=manageuser.php?msg=usuccess" />
                   <?php 
                  }
                  else 
                  {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>User couldn't be Updated successfully.</strong> 
                      </div>
                    <?php 
                  }
              }
              ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="<?php echo $select_row['name']; ?>" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" value="<?php echo $select_row['email']; ?>" class="form-control" id="exampleInputPassword1" >
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