<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Blade ENgine</h1>
    {{10+10}}
    <br>
    @if($user=="belal")
        <h3>Hello {{$user}}</h3>
    @elseif($user=="milad")    
        <h3>Hi {{$user}}</h3>
    @else 
        <h3>Bye</h3>
    @endif    

    <br />

    @for($i = 0; $i < 10; $i++)
        {{$i}}
    @endfor
    <br />

    @foreach($user as $u)
        <p>{{$u}}</p>
    @endforeach

<!-- use php codes inside js  -->
    <script>
        var users = @json($user);
        console.warn(users  );
    </script>


</body>
</html>