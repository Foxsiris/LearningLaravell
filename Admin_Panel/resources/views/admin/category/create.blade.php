@extends('layouts.admin_layout')

@section('title','Добавить категорию')

@section('content')
    <div>

        <div>
            <h1>Добавить категорию</h1>
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
                           <form action="{{route('category.store')}}" method="post">
                               @csrf
                               <div class="card-body">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Название</label>
                                       <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="введите название категории" required>
                                   </div>
                               </div>
                               <!-- /.card-body -->

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
