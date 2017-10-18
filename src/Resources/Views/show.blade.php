@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">{{$todo->todo}}</h1>
        </div>
        <a href="{{route('todo.index')}}" title="Voltar">Voltar</a>
    </div>


   </div>
</div>
@endsection


