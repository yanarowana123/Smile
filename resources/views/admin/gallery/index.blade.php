@extends('admin.layouts.app')

@section('content')
    <div>

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h2>Фотографии</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Страница</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        @foreach($photos as $index=>$photo)
                            <tr>
                                <th scope="row"><a
                                        href="{{route('admin.gallery.edit',$photo['id'])}}">{{$index+1}} </a>
                                </th>
                                <th scope="row">
                                    <a
                                        href="{{route('admin.gallery.edit',$photo['id'])}}">{{$photo['title']}} </a>
                                </th>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
