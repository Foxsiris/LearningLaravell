@extends('layouts.admin_layout')

@section('title','Добавить статью')

@section('content')
    <div>

        <div>
            <h1>Добавить статью</h1>
        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check">{{session('success')}}</h4>
                </button>

            </div>
        @endif
        <section class="content mx-auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <form action="{{route('post.store')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Название</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="введите название статьи" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Выберите категорию</label>
                                        <select name="cat_id" class="form-control" required>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="editor" name="text">
                                            Welcome to TinyMCE!
                                    </textarea>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
