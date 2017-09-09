@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-6"><h1>{{$todo->text}}</h1></div>
<div class="col-md-6"><h2 class="pull-right"><span class="label label-danger">{{$todo->due}}</h2><span></div>
</div>
<div class="well">
<p>{{$todo->body}}</p>
</div>
<div class="row"><h6 class="pull-right">created: {{$todo->created_at}}</h6></div>
<div class="row">
<div class="col-md-4"><a class="btn btn-info col-md-12" href="/">Go back</a></div>
<div class="col-md-4"><a class="btn btn-primary col-md-12" href="/todo/{{$todo->id}}/edit">Edit</a></div>
<div class="col-md-4"><a class="btn btn-danger col-md-12" href="/todo/{{$todo->id}}/delete">Delete</a></div>

</div>

<hr>
<br>
@endsection