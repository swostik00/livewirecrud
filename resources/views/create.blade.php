<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fill up the form</h1>
    <form action="{{route ('aaa.store')}}" method= "post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" name="name" aria-describedby="name">
        </div><br>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>