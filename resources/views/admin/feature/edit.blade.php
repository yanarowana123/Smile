@extends('admin.layouts.app')

@section('content')
    <div>
        <div class="card ">
            <form method="POST" action="{{route('admin.feature.home.update',$feature)}}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">

                    <div class="form-group">
                        <label for="content_ru">  Контент</label>
                        <textarea name="content_ru" id="content_ru"
                                  class="form-control">{{$feature->content_ru}}</textarea>
                        @error('content_ru')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content_kz"> Мазмұны</label>
                        <textarea name="content_kz" id="content_kz"
                                  class="form-control">{{$feature->content_kz}}</textarea>
                        @error('content_kz')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content_en">Content</label>
                        <textarea name="content_en" id="content_en"
                                  class="form-control">{{$feature->content_en}}</textarea>

                        @error('content_en')
                        <div class="text-red">{{$message}}</div>
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
