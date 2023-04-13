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
        <form action="{{url('/student/post')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" placeholder="Enter Student NIS">
            </div>
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Student name">
            </div>
            <div class="form-group">
                <label for="name">Ruang Kelas</label>
                <input type="text" class="form-control" name="class_room" placeholder="Enter Student name">
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="{{ url('/students')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</body>

</html>