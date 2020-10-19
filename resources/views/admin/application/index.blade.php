@extends('admin.layouts.app')
@section('content')
    <div>
        <div class="card">
            <div class="card-header">
                <h2>Заявки</h2>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-hover">
                        <thead>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Сообщение</th>
                            <th scope="col">Ответили?</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="">
                        @foreach($applications as $index=>$application)
                            <tr>
                                <th scope="row"><a
                                        href="{{route('admin.feedback.edit',$application->id)}}">{{$index+1}} </a>
                                </th>
                                <th scope="row"><a
                                        href="{{route('admin.feedback.edit',$application->id)}}">{{$application->name}} </a>
                                </th>
                                <th scope="row"><a
                                        href="{{route('admin.feedback.edit',$application->id)}}">{{$application->phone}} </a>
                                </th>
                                <th scope="row"><a
                                        href="{{route('admin.feedback.edit',$application->id)}}">{{$application->message}} </a>
                                </th>
                                <th scope="row"><a
                                        href="{{route('admin.feedback.contacted',$application)}}"
                                    >{{$application->isContacted()}} </a>
                                </th>
                                <td><a href="{{route('admin.feedback.edit',$application->id)}}"><i
                                            class="fa fa-pen fa-fw"></i></a>
                                </td>
                                <td><a onclick="return confirm('Are you sure?')"
                                       href="{{route('admin.feedback.delete',$application)}}"><i
                                            class="fa fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{$applications->links()}}
            </div>
        </div>
    </div>

@endsection

