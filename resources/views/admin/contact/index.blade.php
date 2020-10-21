@extends('admin.layouts.app')

@section('content')
    <div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h2>Контакты</h2>
                    <a href="{{route('admin.contact.create')}}"
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
                            <th scope="col">Тип</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="">
                        @foreach($contacts as $index=>$contact)
                            <tr>
                                <th scope="row"><a
                                        href="{{route('admin.contact.edit',$contact->id)}}">{{$index+1}} </a>
                                </th>
                                <th scope="row">
                                    <a
                                        href="{{route('admin.contact.edit',$contact->id)}}">{{$contact->content_ru}} </a>
                                </th>
                                <th scope="row">
                                    <a
                                        href="{{route('admin.contact.edit',$contact->id)}}">{{$contact->typeTitle}} </a>
                                </th>
                                <td><a
                                        href="{{route('admin.contact.edit',$contact->id)}}"><i
                                            class="fa fa-pen fa-fw"></i></a>
                                </td>

                                <td><a onclick="return confirm('Вы уверены?')"
                                       href="{{route('admin.contact.delete',$contact)}}"><i
                                            class="fa fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
