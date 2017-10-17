
<input type="hidden" name="user_id" value="1">
<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Todo', 'Todo:') !!}
    {!! Form::text('todo', null, ['class' => 'form-control']) !!}
</div>
<input type="hidden" name="completed" value="0">
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('todo.index') !!}" class="btn btn-default">Cancelar</a>
</div>


