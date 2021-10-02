<h1>Deleting Data </h1>

@if (session('msg'))
    {{session('msg')}}
@endif

<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Father Name</td>
        <td>Last Name</td>
        <td>Action</td>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d['id']}}</td>
        <td>{{$d['name']}}</td>
        <td>{{$d['fname']}}</td>
        <td>{{$d['lname']}}</td>
        <td>
            <a href="delete/{{$d['id']}}">Delete</a>
            <a href="edit/{{ $d['id'] }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>