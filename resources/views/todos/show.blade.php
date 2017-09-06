@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-6"><h1>{{$todo->text}}</h1></div>
<div class="col-md-6"><h2 class="pull-right"><span class="label label-danger">{{$todo->due}}</h2><span></div>
</div>
<div class="well">
<p>{{$todo->body}}</p>
</div><div class="container">
<div class="row"><h6 class="pull-right">created: {{$todo->created_at}}</h6>
</div></div>
<a class="btn btn-default col-md-12" href="/">Go back</a>

@endsection