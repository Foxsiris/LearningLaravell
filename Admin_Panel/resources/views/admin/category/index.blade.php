@extends('layouts.admin_layout')

@section('title','Все категории')

@section('content')
    <div>
        <div>
            <h1>Все категории</h1>
        </div>

        <section class="content mx-auto">
            <div class="container-fluid">

                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                            <tr>
                                                <th style="width: 10%">
                                                    ID
                                                </th>
                                                <th style="width: 30%">
                                                    Название
                                                </th>
                                                <th style="width: 20%">
                                                </th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)

                                        <tr>
                                            <th style="width: 10%">
                                                {{$category->id}}
                                            </th>
                                            <th style="width: 30%">
                                                {{$category->title}}
                                            </th>
                                            <th style="width: 20%">
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-info btn-sm" href="{{route('category.edit',$category->id)}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Редактировать
                                                </a>
                                                <form action="{{route('category.destroy',$category->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Удалить
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
        </section>
    </div>

@endsection
