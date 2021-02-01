@extends('layout.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
@endsection

@section('aside')
    @parent
    <p>Дополнительый текс</p>
@endsection
