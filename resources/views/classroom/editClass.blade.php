<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container" style="padding: 30px 20px;">
        <form action="{{url('/classroom/update',$class->id)}}" method="post">
        {{ csrf_field() }}
        @method('PATCH')
            <div class="form-group">
                <label for="class_name">Class Name</label>
                <input type="text" class="form-control" name="class_name" value="{{$class->class_name}}">
            </div>
           
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="{{ url('classroom')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</body>
</html>