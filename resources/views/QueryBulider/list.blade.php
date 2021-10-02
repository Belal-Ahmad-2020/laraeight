<h1>Query Bulider</h1>

<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Last Name</td>
    </tr>
    @foreach ($data as $d)
    <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->name }}</td>
        <td>{{ $d->lname }}</td>
    </tr>   
    @endforeach

</table>