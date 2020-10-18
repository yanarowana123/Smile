@extends('admin.layouts.app')


@section('content')
    <div class="card">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('admin.staff.index')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label class="label" for="name_ru">
                        Имя
                    </label>

                    <div class="control">
                        <input type="text"
                               class="form-control @error('name_ru') is-invalid @enderror"
                               name="name_ru"
                               id="name_ru"
                               value="{{old('name_ru')}}"
                               required>
                    </div>

                    @error('name_ru')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label" for="name_kz">
                        Есімі
                    </label>

                    <div class="control">
                        <input type="text"
                               class="form-control @error('name_kz') is-invalid @enderror"
                               name="name_kz"
                               id="name_kz"
                               value="{{old('name_kz')}}"
                               required>
                    </div>

                    @error('name_kz')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label" for="fullname_en">
                        Name
                    </label>

                    <div class="control">
                        <input type="text"
                               class="form-control @error('name_en') is-invalid @enderror"
                               name="name_en"
                               id="name_en"
                               value="{{old('name_en')}}"
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
                          id="content_ru"
                >{{old('content_ru')}}</textarea>
                    </div>

                    @error('content_ru')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label" for="content_kz">
                        Сипаттама
                    </label>

                    <div class="control">
                <textarea required class="form-control  @error('content_kz') is-invalid @enderror"
                          name="content_kz"
                          id="content_kz"
                >{{old('content_kz')}}</textarea>
                    </div>

                    @error('content_kz')
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
                          id="content_en"
                >{{old('content_en')}}</textarea>
                    </div>

                    @error('content_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="label" for="photo">
                        Фото
                    </label>

                    <div class="control">
                        <input type="file" class="form-control  @error('image') is-invalid @enderror"
                               name="image" accept="image/png, image/jpeg"
                               id="image" required>

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
    @csrf
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
            });
        });
    </script>
@endpush
