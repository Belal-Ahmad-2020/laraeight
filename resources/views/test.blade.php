<!-- Balde Template vid 9 -->
<p>
{{count($users)}}
</p>

@if(count($users)>=3)
    <p>Hello {{$users[0]}}</p>
@elseif(count($users)>3) 
    <p>Hello {{$users[1]}}</p>
@else
    <p>Bye {{$users[2]}}</p>    
@endif

<br><br>


@for ($i = 0; $i < 10; $i++)
    {{$i}}
@endfor

<br><br>

@foreach ($users as $user)
    {{$user}} <br> 
@endforeach

<br><br>



<br><br>

<script>
    var data = @json($users);
    alert(data[0]);
    console.warn(data)
</script>

