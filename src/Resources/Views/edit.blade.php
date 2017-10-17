<h1>My Todos</h1>

<ul>
	@foreach ($todos as $todo)
	<li>{{$todo->todo}}</li>
	@endforeach
</ul>