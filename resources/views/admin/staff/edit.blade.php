@extends('admin.layouts.app')

@section('content')
    <div class="card">

        <form method="POST" action="{{route('admin.staff.update',$staff->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label class="label" for="name_ru">
                      Имя
                    </label>

                    <div class="control">
                        <input type="text"
                               class="form-control @error('name_ru') is-invalid @enderror"
                               name="name_ru"
                               id="name_ru"
                               value="{{$staff->name_ru}}"
                               required>

                    </div>

                    @error('name_ru')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="label" for="name_en">
                        Name
                    </label>

                    <div class="control">
                        <input type="text"
                               class="form-control @error('name_en') is-invalid @enderror"
                               name="name_en"
                               id="name_en"
                               value="{{$staff->name_en}}"
                               required>

                    </div>

                    @error('name_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                    <div class="form-group">
                        <label class="label" for="content_ru">
Описание
                        </label>

                        <div class="control">
                      <textarea required class="form-control  @error('content_ru') is-invalid @enderror"
                                name="content_ru"
                                id="content_ru">{{$staff->content_ru}}</textarea>
                        </div>

                        @error('content_ru')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                <div class="form-group">
                    <label class="label" for="content_en">
                        Description
                    </label>

                    <div class="control">
                      <textarea required class="form-control  @error('content_en') is-invalid @enderror"
                                name="content_en"
                                id="content_en">{{$staff->content_en}}</textarea>
                    </div>

                    @error('content_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>





                <div class="form-group">
                    <label class="label" for="title_en">
                        Фото
                    </label>

                    <div class="control">
                        <input type="file" class="form-control  @error('image') is-invalid @enderror"
                               name="image"
                               id="image">

                    </div>

                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <div class="form-group">
                    <div class="control">
                        <button class="btn btn-success" type="submit">
                        Сохранить
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection


@push('scripts')
    <script>
        $(function () {
            $("#image").fileinput({
                theme: "fas",
                showUpload: false,
                showRemove: false,
                showCancel: false,
                showClose: false,
                initialPreview: [
                    '<img src="/{{$staff->image}}" class="file-preview-image" alt="" title="" style="width:100%;height:100%" title="thumbnail">'
                ]
            });
        });
    </script>
@endpush
