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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sistem Informasi Sekolah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/classroom')}}">Classroom </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/students')}}">Students<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


    </div>
    <div class="mx-auto" style="width: 100%; padding: 30px 30px; text-align: center;">
        <div class="row">

            <div class="float-right margin-tb " style="margin-bottom: 10px;">

                <div class="pull-right">

                    <a class="btn btn-success" href="student/add"> Add New Student</a>
                </div>

            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Ruang Kelas</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $pelajar)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$pelajar -> nis}}</td>
                        <td>{{$pelajar -> name}}</td>
                        <td>{{$pelajar -> class_room}}</td>
                        <td>
                            <form action="{{url('/student/delete', $pelajar->id)}}" method="post">
                                <a href="{{url('/student/detail', $pelajar->id)}}" class="btn btn-info">Show</a>
                                <a href="{{url('/student/edit', $pelajar->id)}}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<html>