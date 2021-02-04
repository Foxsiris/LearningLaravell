@extends('layout.app')

@section('title-block')
    {{$data->subject}}
@endsection

@section('content')
    <h1>{{$data->subject}}</h1>
        <div class="alert alert-info">
            <h3>{{$data->subject}}</h3>
            <p>Your email:{{$data->email}}</p>
            <p><small>Date: {{$data->created_at}}</small></p>
            <a href="{{route('contact-update',$data->id)}}">
                <button class="btn btn-warning">Редактировать</button>
            </a>
            <a href="{{route('contact-delete',$data->id)}}">
                <button class="btn btn-danger">Удалить</button>
            </a>
        </div>

@endsection

