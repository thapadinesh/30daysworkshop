<?php require('inc/toppart.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

<?php require('inc/navbar.php'); ?>

<?php require('inc/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Pages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage Pages</li>
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
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Manage Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Action</th>
                        <th>Title</th>
                        <th>Slug</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      $select_query = "SELECT * FROM pages";
                      $select_result = mysqli_query($conn,$select_query);
                      $i=0;
                      while($data_row = mysqli_fetch_array($select_result))
                      {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                <a name="" id="" class="btn btn-success btn-sm" href="viewuser.php?id=<?php echo $data_row['id']; ?>" role="button">View</a>
                                <a name="" id="" class="btn btn-info btn-sm" href="edituser.php?id=<?php echo $data_row['id']; ?>" role="button">Edit</a>
                                <a name="" id="" class="btn btn-danger btn-sm" href="process/deleteuser.php?id=<?php echo $data_row['id']; ?>" role="button">Delete</a>
                            </td>
                            <td><?php echo $data_row['title'];?></td>
                            <td><?php echo $data_row['slug'];?></td>
                        </tr>
                        <?php 
                      }
                      ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>S.N.</th>
                        <th>Action</th>
                        <th>Title</th>
                        <th>Slug</th>
                    </tr>
                    </tfoot>
                </table>
              </div>
            </div>
                </div>
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php require('inc/footer.php'); ?>