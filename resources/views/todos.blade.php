@extends('layouts.layouts')

@section('content')
<div class="links">

    <h1>ToDos</h1>
    <div class="row">
        <div class="col-lg-6 offset-lg-3"> <!-- this will centralize things -->
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input style="font-weight: 900;"  type="text" class="form-control input-lg " name="todo" placeholder="Create a New ToDo">
                    
                </input>
            </form>
        </div>
    </div>
    <hr>
    
        @foreach($todos as $todo)
        <a style="color:bolder" href="">{{$todo->todos}}</a>

        <a href="{{ route('todo.delete',['id'=>$todo->id])}}">
                <button type="button" class="btn btn-outline-danger btn-sm">X</button>
        </a>
        <a href="{{ route('todo.update',['id'=>$todo->id])}}">
            <button type="button" class="btn btn-outline-danger btn-sm">update</button>
        </a>
        @if(!$todo->completed)
            <a href=" {{route('todos.finished',['id'=>$todo->id])}} ">
                <button class="btn btn-sm btn-outline-success  ">
                Finished
                </button>
            </a>
        @else
            <span class="text-success">Completed!</span>
        @endif
        <br>

        @endforeach
    

@stop



