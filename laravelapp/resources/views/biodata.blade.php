<!DOCTYPE HTML>
<html>
    <head>
        <title>Biodata</title>
    </head>
    <body>
        <h1>Biodata</h1>
        <p>Nama : {{$nama}}</p>
        <p>Materi Semester 4 :</p>
        <ul>
            @foreach($materi as $datamateri)
                <li>{{$datamateri}}</li>
            @endforeach
        </ul>
    </body>
</html>