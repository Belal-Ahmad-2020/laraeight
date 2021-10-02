<h1>Edit </h1>

<form action="/update" method="post">
@csrf
<input type="hidden" name="id" value="{{ $data['id'] }}">
Name: <input type="text" name="name"  value="{{ $data['name'] }}" id=""> <br>
Last Name: <input type="text" name="lname" id="" value="{{ $data['lname'] }}">
<input type="submit" value="Update">
</form>