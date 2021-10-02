<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>About us page </h1>


    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>            
        </tr>
        @foreach($posts as $p) 
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->title}}</td>
            <td>{{$p->description}}</td>
        </tr>
        @endforeach
    </table>


<x-footer data="about us footer" />

</body>
</html>