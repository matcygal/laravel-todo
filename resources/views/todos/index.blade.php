@extends('layouts.app')
@section('content')
<h1>To do List</h1>
@if(count($todos) > 0)
@foreach($todos as $todo)
<div class="well"><div class="row">
<div class="col-md-4"><h3><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h3></div>
<div class="col-md-4"><h3 class="">created: {{$todo->created_at}}</h3></div>
<div class="col-md-4"><h3 class="pull-right">task due to    <span class="label label-danger">{{$todo->due}}</span></h3></div>
</div>
</div>
<hr>
@endforeach
@endif
@endsection