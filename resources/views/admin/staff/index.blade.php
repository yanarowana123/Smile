@extends('admin.layouts.app')
@section('content')
    <div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between mt-3">
                    <h2>Сотрудники</h2>
                    <a href="{{route('admin.staff.create')}}" class="btn btn-success mb-2">
                        Добавить
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-hover">
                        <thead>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Фото</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="">
                        @foreach($staff as $index=>$staffItem)
                            <tr>
                                <th scope="row"><a href="{{route('admin.staff.edit',$staffItem->id)}}">{{$index+1}} </a>
                                </th>
                                <td><a href="{{route('admin.staff.edit',$staffItem->id)}}">{{$staffItem->name_ru}}</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.staff.edit',$staffItem->id)}}">{{$staffItem->content_ru}}</a>
                                </td>

                                <td><img
                                        src="{{asset($staffItem->image)}}"
                                        alt="avatar"
                                        style="width: 30px"></td>
                                <td><a onclick="return confirm('Вы уверены?')"
                                       href="{{route('admin.staff.delete',$staffItem)}}"><i
                                            class="fa fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
            <div class="card-footer">
                {{ $staff->links() }}
            </div>
        </div>
    </div>

@endsection
