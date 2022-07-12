<!doctype html>
<html lang="en">
  <head>
    <title>Create Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @notifyCss
  </head>
  <body>

    <x:notify-messages />
    {{-- @include('notify::components.notify') --}}

    <div class="container">
        <div class="row">

                <div class="card-header font-weight-bold">
                    Manage Tasks

                    <a name="" id="" class="btn btn-primary btn-sm" href="{{route('task.create')}}" role="button">Create Task</a>
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Action</th>
                                    <th>Task Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($task as $t)
                                <tr>
                                    <td scope="row">{{$loop->iteration}}</td>
                                    <td>
                                        <a name="" id="" class="btn btn-info" href="{{route('task.show',$t->id)}}" role="button">View</a>
                                        <a name="" id="" class="btn btn-primary" href="{{route('task.edit',$t->id)}}" role="button">Edit</a>
                                        <form action="{{route('task.destroy',$t->id)}}" method="POST" enctype="multipart/form-data">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" name="submit">Delete</button>
                                        </form>
                                    </td>
                                    <td>{{$t->title}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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

    @notifyJs
  </body>
</html>
