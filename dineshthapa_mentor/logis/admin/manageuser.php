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
            <h1 class="m-0">Manage User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage User</li>
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
        <a name="" id="" class="btn btn-primary btn-sm mb-2" href="adduser.php" role="button">Add User</a>
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Users</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Email</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php 
                  $select_query = "SELECT * FROM users";
                  $select_result = mysqli_query($conn,$select_query);
                  $i=0;
                  while($select_row = mysqli_fetch_array($select_result))
                  {
                    $i++;
                    ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td>
                        <a name="" id="" class="btn btn-primary btn-sm" href="edituser.php?id=<?php echo $select_row['id']; ?>" role="button">Edit</a>
                        <a name="" id="" class="btn btn-danger btn-sm" href="process/deleteuser.php?id=<?php echo $select_row['id']; ?>" role="button">Delete</a>
                    </td>
                    <td><?php echo $select_row['name']; ?></td>
                    <td><?php echo $select_row['email']; ?></td>
                  </tr>
                    <?php 
                  }
                  ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S.N.</th>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Email</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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