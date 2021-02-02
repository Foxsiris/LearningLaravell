@extends('layout.app')

@section('title-block')
    Contact
@endsection

@section('content')
    <h1>Our contact</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Enter your mail</label>
            <input type="text" name="email" placeholder="Enter your mail" id="mail" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Enter your subject</label>
            <input type="text" name="subject" placeholder="Enter your mail" id="subject" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection

