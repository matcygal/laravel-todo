@extends('layouts.app')
@section('content')
<h1>Create new task</h1>

{!! Form::open(['action' => 'TodosController@store' ,'method' => 'POST']) !!}
{{ Form::bsText('text') }}
{{ Form::bsTextArea('body') }}
{{ Form::bsText('due') }}
{{ Form::bsSubmit('Submit', ['class' => 'btn btn-submit col-md-12']) }}
{!! Form::close() !!}
@endsection