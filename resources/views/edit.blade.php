<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route ('aaa.update',$xyz->id)}}" method= "post">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="name" placeholder= "{{$xyz-> name}}" class="form-control" name="name" aria-describedby="name">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" placeholder= "{{$xyz-> password}}"  class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>