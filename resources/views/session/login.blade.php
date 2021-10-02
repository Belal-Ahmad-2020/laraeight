<form action="{{ route('loginSess') }}" method="post">
@csrf
<input type="text" name="username" id=""><br>
<input type="password" name="password" id=""><br>
<input type="submit" value="Login">
</form>