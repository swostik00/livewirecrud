<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<style>
    table, th, td {
    border:1px solid black;
    }
</style>
<body>
    <table class="table table-dark table-striped" style="width:20%">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>
        @foreach($abc as $abcd)
            <tr>
                <td>{{$abcd->id}}</td>
                <td>{{$abcd->name}}</td>
                <td>
                    <form action="{{route('aaa.destroy', $abcd->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('aaa.edit', $abcd->id)}}" method="post">
                        @csrf
                        @method('GET')
                        <button>Edit</button>
                    </form>
                </td>
            </tr>    
        
        @endforeach
    </table>
</body>
</html>