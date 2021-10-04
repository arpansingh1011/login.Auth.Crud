<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding Role</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
</head>
<body>

<div class="container">
    <div class="row" style="margin: top 45px;">
        <div class="col-md-4 col-md-offset-4">
            <h4>Roles</h4>
            <hr>
            <form action='Roleuser' method="POST">
                @csrf
                <label for="name" class="form-label">New Role</label>
            <input type="text" name="role" id="role">
            <button class="btn btn-info">Submit</button>
               
    
                <br>
            </form>
        </div>

    </div>
</div>

</body>
</html>
