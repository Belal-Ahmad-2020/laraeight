<h1>Edit data</h1>

<form action="/update" method="POST">
    @csrf

    <input type="hidden" name="id"  value="{{ $data['id'] }}" >
    Name: <input type="text" name="name" id="" value="{{ $data['name'] }}"> <br>
    FName: <input type="text" name="fname" id="" value="{{ $data['fname'] }}"> <br>
    Lname: <input type="text" name="lname" id="" value="{{ $data['lname'] }}"> <br>
    <input type="submit" value="Update">
</form>