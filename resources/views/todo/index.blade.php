<div>
    <h1>Todo {{$me}}</h1>
    <p>{{$hello}}</p>

    <form method="POST" action="{{ route('todo.submit') }}">
        @csrf
        <input type="text" placeholder="Input title" name="title">
        <input type="text" placeholder="Input body" name="body">
        <input type="submit" value="Submit">
    </form>

    <ul>
        @foreach($todo as $key => $value) 
            <li>{{$key}} : {{$value -> title}} - {{$value -> body}} ID:{{{$value -> id}}}
                <a href="{{ route('todo.delete', $value->id)}}">DELETE</a>
            </li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('todo.update') }}">
        @csrf
        @method("PATCH")
        <input type="text" placeholder="Input id" name="id">
        <input type="text" placeholder="Input title" name="title">
        <input type="text" placeholder="Input body" name="body">
        <input type="submit" value="Update">
    </form>
</div>