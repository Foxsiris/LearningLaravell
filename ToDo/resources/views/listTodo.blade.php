@extends('layouts.app')

@section('result')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <h2>Добро пожаловать {{Auth::user()->name}}</h2>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('submit')}}" method="post">
                @csrf
                <input type="text" name="toDo" placeholder="введите дело">

                <button type="submit" class="btn btn-primary">добавить</button>
            </form>
        </div>
    </div>

    @foreach($data as $element)
        <div class="alert alert-info">
            <ul class="list-group">
                <li class="list-group-item"> {{$element->nameToDo}}</li>
            </ul>
            <div>
                <a href="{{route('update',$element->id)}}">
                    <button class="btn btn-primary">изменить</button>
                </a>
            </div>
            <div>
                <a href="{{route('todo-delete',$element->id)}}">
                    <button class="btn btn-danger">удалить</button>
                </a>
            </div>
        </div>

    @endforeach
</div>

@endsection
