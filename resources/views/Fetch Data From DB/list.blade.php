<h1>Fetching Data </h1>

<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Father Name</td>
        <td>Last Name</td>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d['id']}}</td>
        <td>{{$d['name']}}</td>
        <td>{{$d['fname']}}</td>
        <td>{{$d['lname']}}</td>
    </tr>
    @endforeach
</table>