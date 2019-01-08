@extends('layouts.layouts')

@section('content')
<div class="links">

    <h1>ToDos</h1>
    <div class="row">
        <div class="col-lg-12"> <!-- this will centralize things -->
            <form action=" {{route('todos.save',['id'=>$todo->id ])}} " method="post">
                {{ csrf_field() }}
                <input style="font-weight: 900;" type="text" 
                class="form-control input-lg " name="todo"
                value=" {{$todo->todos}} ">
                    
                </input>
            </form>
        </div>
    </div>
    <hr>
    

@stop






