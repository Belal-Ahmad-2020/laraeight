<h1>All data </h1>


<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Last Name</td>
        <td>Edit</td>
    </tr>
    @foreach ($data as $d)
    <tr>
        <td>{{$d['id']}}</td>
        <td>{{$d['name']}}</td>
        <td> {{$d['lname']}} </td>
        <td><a href="edit/{{ $d['id'] }}">Edit</a></td>
    </tr>
    @endforeach
</table>
