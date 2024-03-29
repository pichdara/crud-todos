@extends('layouts.app')

@section('content')
    
<div class="container">
        <h1 class="text-center my-5">Todo List page</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($todos as $todo)
                                <li class="list-group-item">
                                    {{$todo->name}}
                                    @if (!$todo->completed)
                                    <a href="/todos/{{ $todo->id }}/complete"><button class="btn btn-warning btn-sm float-right ml-2" style="color:aliceblue">Complete</button></a> 
                                    @endif
                                <a href="/todos/{{ $todo->id }}"><button class="btn btn-primary btn-sm float-right">View</button></a> 
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection



