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
                <form action="{{route('z',$data->id)}}" method="post">
                    @csrf
                    <input type="text" name="toDo" value="{{$data->nameToDo}}">

                    <button type="submit" class="btn btn-primary">изменить</button>
                </form>
            </div>
        </div>
    </div>

@endsection
