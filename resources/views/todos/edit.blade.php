@extends('layouts.app')
@section('content')
<h1>Edit task</h1>

{!! Form::open(['action' => ['TodosController@update', $todo->id] ,'method' => 'POST']) !!}
{{ Form::bsText('text', $todo->text) }}
{{ Form::bsTextArea('body', $todo->body) }}
{{ Form::bsText('due', $todo->due) }}
{{ Form::hidden('_method', 'PUT') }}
{{ Form::bsSubmit('Submit', ['class' => 'btn btn-submit col-md-12']) }}
{!! Form::close() !!}
<hr>
<br>
<a class="btn btn-primary col-md-12" href="/todo/{{$todo->id}}/">Go Back</a></div>
@endsection