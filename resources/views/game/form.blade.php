<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Create Game</h1>
    <form method="post" action="/game">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control col-4" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control col-4" name="price" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control col-4" name="description" cols="20" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>