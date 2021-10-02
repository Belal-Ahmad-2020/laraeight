<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<br><br>
GET
<form action="{{ url('/htt') }}" method="GET">
    @csrf
    <input type="text" name="name" id=""><br>
    <input type="password" name="password" id=""><br>
    <input type="submit" value="Login">
</form>


<br><br>

<form action="{{ url('/htt') }}" method="post">
    @csrf
    <input type="text" name="name" id=""><br>
    <input type="password" name="password" id=""><br>
    <input type="submit" value="Login">
</form>

<br><br>

<form action="htt" method="post">
    @method('DELETE')
    @csrf
    <input type="text" name="name" id=""><br>
    <input type="password" name="password" id=""><br>
    <input type="submit" value="Login">
</form>

<br><br>

<form action="htt" method="post">
    {{method_field('PUT')}}
    @csrf
    <input type="text" name="name" id=""><br>
    <input type="password" name="password" id=""><br>
    <input type="submit" value="Login">
</form>



</body>
</html>