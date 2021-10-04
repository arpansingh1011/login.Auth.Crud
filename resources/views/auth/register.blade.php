<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registeration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
</head>
<body>

<div class="container">
    <div class="row" style="margin: top 45px;">
        <div class="col-md-4 col-md-offset-4">
            <h4>User Register</h4>
            <hr>
            <form action="{{route('create')}}"method="POST">
            @csrf

            <div class="results">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>                

                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail')}}
                    </div>                

                @endif

            </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter full name">
                    <span class="text-danger">@error('name'){{  $message  }}@enderror</span>

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email">
                    <span class="text-danger">@error('email'){{  $message  }}@enderror</span>



                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    <span class="text-danger">@error('password'){{  $message  }}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <span class="text-danger">@error('role'){{  $message  }}@enderror</span>
                    <select name="role">
                        @foreach($data as $row)
                        <option value={{"$row->id"}}>{{$row->role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class ="btn btn-block btn-primary">Register</button>
                </div>
                <br>
                <a href="login">Already have a account!</a>
            </form>
        </div>

    </div>
</div>

</body>
</html>

