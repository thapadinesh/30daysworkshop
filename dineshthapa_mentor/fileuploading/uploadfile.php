<?php require('config.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>File Uploading</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $s_query = "SELECT * FROM filemanager WHERE id=$id";
        $s_result = mysqli_query($conn,$s_query);
        $s_row = $s_result->fetch_assoc();

    } 
    ?>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php
                    if(isset($_POST['submit']))
                    {
                        if(isset($_GET['id']))
                        {
                            echo "You are editing data";
                        }
                        else 
                        {
                            $name = $_POST['name'];

                            //A bcd.jpg // A bcd jpg
                            $filename = $_FILES['dataFile']['name'];
                            $filesize = $_FILES['dataFile']['size'];

                            $explode_values = explode('.',$filename);
                            $firstname = $explode_values[0];
                            $ext = $explode_values[1];
                            $secondname = strtolower($firstname);
                            $thirdname = str_replace(' ','',$secondname);
                            $fourthname = $thirdname.time();

                            $finalfilename = $fourthname.".".$ext;
                            
                            if($filesize<=2000000)
                            {
                                if($ext=="jpg" || $ext == "png" || $ext == "jpeg")
                                {
                                    if(move_uploaded_file($_FILES['dataFile']['tmp_name'],'uploads/'.$finalfilename))
                                    {
                                        $insert_query = "INSERT INTO filemanager (title,filelink,ext) VALUES('$name','$finalfilename','$ext')";
                                        $insert_result = mysqli_query($conn,$insert_query);
                                        if($insert_result)
                                        {
                                            echo "File Uploaded Successfully.";
                                        }
                                        else 
                                        {
                                            echo "File couldn't uploaded successfully.";
                                        }
                                    }
                                }
                                else 
                                {
                                    echo "File not supported. Only upload jpg, png, and jpeg.";
                                }
                            }
                            else 
                            {
                                echo "File size exceeded.";
                            }   
                        }
                    }
                    
                    ?>
                    <div class="card-header">
                        Upload File
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">File Name</label>
                                <input type="text" class="form-control" name="name" value="<?php if(isset($_GET['id'])){echo $s_row['title']; } ?>" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Upload File</label>
                                <input type="file" class="form-control" name="dataFile" id="" aria-describedby="helpId" placeholder="">
                                <?php 
                                if(isset($_GET['id']))
                                {
                                    ?>
                                Preview:- 
                                <img src="uploads/<?php echo $s_row['filelink']; ?>" alt="" height="90px;" width="90px;"></td>
                                    <?php
                                }
                                ?>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Image Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_query = "SELECT * FROM filemanager ORDER BY id DESC";
                                $select_result = mysqli_query($conn,$select_query);
                                $i=0;
                                while($data_row = mysqli_fetch_array($select_result))
                                {
                                    $i++;
                                    ?>
                                        <tr>
                                            <td scope="row"><?php echo $i; ?></td>
                                            <td><?php echo $data_row['title']; ?></td>
                                            <td><img src="uploads/<?php echo $data_row['filelink']; ?>" alt="" height="90px;" width="90px;"></td>
                                            <td>
                                                <a name="" id="" class="btn btn-primary" href="uploadfile.php?id=<?php echo $data_row['id']; ?>" role="button">Edit</a>
                                                <a name="" id="" class="btn btn-danger" href="deletefile.php?id=<?php echo $data_row['id']; ?>" role="button">Delete</a>
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
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>