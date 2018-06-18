@extends('layout.app')
@section('content')
    <a href="/Todo" class="btn-lg btn-primary ">Go back</a>
    <hr>
<table class="table table-hover">
            <thead>
                    <tr>
                            <th>#</th>
                            <th>Id</th>
                            <th>Text</th>
                            <th>Body</th>
                            <th>Date</th>
                            <th>Date de cration</th>
                            <th>Date de Modification</th>
                          </tr>
            </thead>
            <tbody>
                    <tr>
                            <td></td>
                            <td>{{$todo->id}}</td>
                            <td>{{$todo->text}}</td>
                            <td>{{$todo->body}}</td>
                            <td>{{$todo->due}}</td>
                            <td>{{$todo->created_at}}</td>
                            <td>{{$todo->updated_at}}</td>
                        </tr>

            </tbody>
            
  
</table>
<a href="/Todo/{{$todo->id}}/edit" class="btn-lg btn-default ">Edit</a>
{!! Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
{{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete',['class'=> 'btn btn-primary']) }}
    {!! Form::close() !!}
    
@endsection