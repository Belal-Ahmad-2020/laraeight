

@if($errors->any())
    @foreach ($errors->all() as $error)
           <p>{{$error}}</p> 
    @endforeach
@endif

<form action="/submitController" method="post">
@csrf
<input type="text" name="name" value="{{ old('name') }}" id=""><br>
<span>@error('name')
    {{$message}}
@enderror</span><br>
<input type="password" name="password" id="" value="{{ old('password') }}"><br>
<span>@error('password')
    {{$message}}
@enderror</span> <br>
<input type="submit" value="Login">
</form>