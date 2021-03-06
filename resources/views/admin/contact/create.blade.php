@extends('admin.layouts.app')
@section('content')
    <div>
        <div class="card ">

            <form method="POST" action="{{route('admin.contact.index')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="content_ru">Контент</label>
                        <input name="content_ru" type="text" class="form-control" id="content_ru"
                               value="{{old('content_ru')}}"
                        >
                        @error('content_ru')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content_en">Content</label>
                        <input name="content_en" type="text" class="form-control" id="content_en"
                               value="{{old('content_en')}}"
                        >
                        @error('content_en')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content_kz">Мазмұны</label>
                        <input name="content_kz" type="text" class="form-control" id="content_kz"
                               value="{{old('content_kz')}}"
                        >
                        @error('content_kz')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="label" for="type">
                            Тип
                        </label>

                        <div class="control">
                            <select class="form-control" id="type" name="type" required>
                                <option value="" selected disabled>Type</option>
                                @foreach(\App\Models\Contact::getTypeList() as $index=>$type)
                                    <option
                                        value="{{$index}}">{{$type}}</option>
                                @endforeach
                            </select>

                        </div>

                        @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <button type="submit"
                                class="btn btn-success d-inline-flex align-items-center justify-content-center">
                            Сохранить
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
