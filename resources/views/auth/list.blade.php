<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
</head>
<h1><b>USERS LIST</b></h1>
<button type="button" class="btn btn-danger"><a href={{'register/'}}>Create</a></button>
<table border="2">

    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Role</td>
        <td>Action</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['role']}}</td>
        <td>
            <button type="button" class="btn btn-danger"><a href={{'delete/'.$user['id']}}>Delete</a></button>
            <button type="button" class="btn btn-warning">Role</button>
            <button type="button" class="btn btn-danger"><a href={{'edit/'.$user['id']}}>Edit</a></button>
        </td>

    </tr>
    
    @endforeach
   
</table>
<button type="button" class="btn btn-danger"><a href={{"AddRole"}}>Add role</a></button>