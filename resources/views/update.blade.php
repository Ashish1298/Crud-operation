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
    <h1 class="text-center">UPDATE YOUR DETAILS</h1>
    <div class="container">
        <form action="{{route('update', $item->id)}}" method="POST">
            {{csrf_field()}}
            <div class="mb-3">
                <label><b>Name</b></label>
                <input type="text" name="name"  value="{{$item['name']}}" class="form-control">
            </div>

            <div class="mb-3">
                <label><b>Class</b></label>
                <input type="text" name="class"  value="{{$item['class']}}" class="form-control">
            </div>

            <div class="mb-3">
                <label><b>dob</b></label>
                <input type="date" name="dob" value="{{$item['dob']}}"  class="form-control">
            </div>

            <input type="submit" name ="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

</body>
</html>