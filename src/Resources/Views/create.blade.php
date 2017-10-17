@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Feed</h1>
        </div>
    </div>

   {{--  @include('core-templates::common.errors') --}}

    <div class="row">
	{!! Form::open(['route' => 'todo.store']) !!}
	{!! Form::token('csrfToken') !!}
		@include('todo::form')

	{!! Form::close() !!}
    </div>
</div>
@endsection