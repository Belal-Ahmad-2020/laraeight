<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Login Form</h2>
    
    @if($errors->any())
        @foreach($errors->all() as $err) 
            <li>{{$err}}</li>
        @endforeach
    @endif
    
    <form action="{{ route('loginCon') }}" method="post" autocomplete='off'>
        @csrf
        <input type="text" name="username" id="" value="{{ old('username') }}"  ><br>
        <span>@error('username') {{$message}} @enderror</span><br>
        <input type="password" name="password" id=""><br>
        <span>@error('password') {{$message}} @enderror</span><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>