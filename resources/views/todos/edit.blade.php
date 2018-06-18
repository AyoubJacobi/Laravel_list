@extends('layout.app')
@section('content')


    <a href="/Todo/{{$todo->id}}" class="btn-lg btn-primary ">Go back</a>
        <h1>Edite Todo</h1>
    {!! Form::open(['action' => ['TodoController@update', $todo->id], 'method' => 'POST']) !!}
    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Submit',['class'=> 'btn btn-primary']) }}
    {!! Form::close() !!}


@endsection