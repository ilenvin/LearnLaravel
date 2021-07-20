<div>
    <h1>Todo {{$me}}</h1>
    <p>{{$hello}}</p>

    <form method="GET" action="{{ route('todo.submit') }}">
        <input type="text" placeholder="Input title" name="title">
        <input type="text" placeholder="Input body" name="body">
        <input type="submit" value="Submit">
    </form>

    <ul>
        @foreach($todo as $key => $value) 
            <li>{{$key}} : {{$value -> title}} - {{$value -> body}}
                <a href="{{ route('todo.delete', $value->id)}}">DELETE</a>
            </li>
        @endforeach
    </ul>
</div>