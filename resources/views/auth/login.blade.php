<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
</head>
<body>

<div class="container">
    <div class="row" style="margin: top 45px;">
        <div class="col-md-4 col-md-offset-4">
            <h4>User Login</h4>
            <hr>
            <form action="{{route('loginuser')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                
                </div>
                <div class="form-group">
                    <button type="submit" class ="btn btn-block btn-primary">Login</button>
                </div>
                <br>
                <a href="register">Create an new account now!</a>
            </form>
        </div>

    </div>
</div>

</body>
</html>
