<!doctype html>
<html lang="en">
  <head>
    <title>Create Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
                <div class="card-header font-weight-bold">
                    Create Task

                    <a name="" id="" class="btn btn-primary btn-sm" href="{{route('task.index')}}" role="button">Manage Tasks</a>
                </div>
                <div class="card-body">
                    <form action="{{route('task.store')}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                            <label for="">Task Title</label>
                            <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            @error('title')
                            <p class="form-text text-warning">
                            {{$message}}
                            </p>
                            @enderror

                          </div>
                          <div class="form-group col-md-12">
                              <label for="">Task Description</label>
                              <textarea name="des" class="form-control" id="" cols="30" rows="10"></textarea>
                              @error('des')
                            <p class="form-text text-warning">
                            {{$message}}
                            </p>
                            @enderror
                          </div>
                          @csrf
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-footer text-muted">

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
