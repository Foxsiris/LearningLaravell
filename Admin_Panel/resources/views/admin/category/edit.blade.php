@extends('layouts.admin_layout')

@section('title','Редактирование категории')

@section('content')
    <div>

        <div>
            <h1>Редактировать категорию:{{($category->title)}} </h1>
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
                            <form action="{{route('category.update',$category->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Название</label>
                                        <input type="text" value="{{$category->title}}" name="title" class="form-control" id="exampleInputEmail1"  required>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
