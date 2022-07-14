<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">ADD YOUR INFORMAITON</h1>
    <div class="container">
        <form action="{{route('crud.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label><b>Name</b></label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label><b>Class</b></label>
                <input type="text" name="class" class="form-control">
            </div>

            <div class="mb-3">
                <label><b>dob</b></label>
                <input type="date" name="dob" class="form-control">
            </div>

            <input type="submit" name ="submit" value="Submit" class="btn btn-primary">
        </form>

        <table class="table table-border shadow text-center table-striped">
            <tr>
                <th>person id</th>
                <th>person name</th>
                <th>person class</th>
                <th>person dob</th>
                <th>Action one</th>
                <th>Action two</th>
            </tr>
            @foreach($person as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->class}}</td>
                <td>{{$item->dob}}</td>
                <td> <a href={{"edit/".$item['id']}}><button>Update</button></a></td>
                <td> <a href={{"delete/".$item['id']}}><button>Delete</button></a></td>
            </tr>
            @endforeach
        </table>

    </div>

</body>
</html>