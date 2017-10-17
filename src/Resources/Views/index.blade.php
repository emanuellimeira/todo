@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Minhas Listas a Fazer</h1>
        </div>
    </div>
    <a href="{{ url('todo/create')}}" title="Adicionar" class="btn btn-default">Adicionar</a>
    <br>
    <hr>
    <br>



<ul>
	@foreach ($todos as $todo)
	<li>{{$todo->todo}} - {{-- <a href="{{ url('todo/destroy',['id'=>$todo->id])}}" title="Excluir" class="">Excluir</a> --}} 
		{{-- <a href="{{ route('todo.edit',['id'=>$todo->id]) }}" class="btn-sm btn-success">Editar</a>
		<a href="{{ route('todo.destroy',['id'=>$todo->id]) }}" class="btn-sm btn-danger">Remover</a></li> --}}

		{!! Form::open(['route' => ['todo.destroy', $todo->id], 'method' => 'DELETE']) !!}
                <div class='btn-group'>
                    <a href="{!! route('todo.show', [$todo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('todo.edit', [$todo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
	@endforeach
</ul>

   </div>
</div>
@endsection