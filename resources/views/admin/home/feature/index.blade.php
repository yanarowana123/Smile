@extends('admin.layouts.app')
@section('content')


    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>Как мы работаем?
                </h2>
                <a href="{{route('admin.feature.work.create')}}"
                   class="btn btn-success mb-2">Добавить</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Контент</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody class="">
                    @foreach($features as $index=>$feature)
                        <tr>
                            <th scope="row"><a
                                    href="{{route('admin.feature.work.edit',$feature->id)}}">{{$index+1}} </a>
                            </th>
                            <th scope="row">
                                <a
                                    href="{{route('admin.feature.work.edit',$feature->id)}}">{{$feature->content_ru}} </a>
                            </th>
                            <td><a href="{{route('admin.feature.work.edit',$feature)}}">
                                    <i class="fa fa-pen fa-fw"></i></a>
                            </td>
                            <td><a onclick="return confirm('Are you sure?')"
                                   href="{{route('admin.feature.work.delete',$feature)}}"><i
                                        class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{$features->links()}}
        </div>
    </div>

@endsection
