<h1>Add Member</h1>

@if (session('name'))
    <h4>{{session('name')}} added successfully! </h4>
@endif

<form action="add-new-member" method="post">
@csrf
<input type="text" name="name" id=""><br>
<input type="text" name="lname" id=""><br>
<input type="submit" value="Add Member">
</form>