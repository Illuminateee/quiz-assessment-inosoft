<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Detail</title>
</head>

<body>
    <div class="mx-auto" style="width: 100%; padding: 30px 30px; text-align: center;">
        <div class="row">

            <div class="float-right margin-tb " style="margin-bottom: 10px;">

                <div class="pull-right">
                    <a class="btn btn-danger" href="{{url('/classroom')}}"> Cancel </a>
                </div>

            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Student</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($class_arr as $student)
                    <tr>
                        <td>{{$class_arr->student[$i++]}}</td>
                       
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
</body>

</html>