<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Register</h1>
    <form method="post" action="/account/register-success">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control col-4" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control col-4" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control col-4" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>FullName</label>
            <input type="text" class="form-control col-4" name="fullname" placeholder="Enter fullName">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <input type="radio" class="" name="gender" value="0" checked>Male
            <input type="radio" class="" name="gender" value="1">Female
            <input type="radio" class="" name="gender" value="2">Other
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>
</body>
</html>