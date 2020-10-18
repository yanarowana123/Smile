@extends('admin.layouts.app')
@section('content')
    <div>
        <div class="card ">
            <form method="POST" action="{{route('admin.content.update',$content->id)}}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">

                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="title_ru">Заголовок</label>
                        <input name="title_ru" type="text" class="form-control" id="title_ru"
                               value="{{$content->title_ru}}">
                        @error('title_ru')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title_kz">
                            Тақырып
                        </label>
                        <input name="title_kz" type="text" class="form-control" id="title_kz"
                               value="{{$content->title_kz}}">
                        @error('title_kz')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title_en">Title</label>
                        <input name="title_en" type="text" class="form-control" id="title_en"
                               value="{{$content->title_en}}">
                        @error('title_en')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="content_ru">Контент</label>
                        <textarea name="content_ru" id="content_ru"
                                  class="form-control">{{$content->content_ru}}</textarea>
                        @error('content_ru')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content_kz">Мазмұны</label>
                        <textarea name="content_kz" id="content_kz"
                                  class="form-control">{{$content->content_kz}}</textarea>
                        @error('content_kz')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content_en">Content</label>
                        <textarea name="content_en" id="content_en"
                                  class="form-control">{{$content->content_en}}</textarea>
                        @error('content_en')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>


                    @if($content->image)
                        <div class="form-group">
                            <label for="image">Изображение</label>
                            <input type="file" name="image" class="form-control"
                                   accept="image/*"
                                   id="image">
                            @error('image')
                            <div class="text-red">{{$message}}</div>
                            @enderror
                        </div>
                    @endif

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
                    '<img src="{{asset($content->image)}}" class="file-preview-image" alt="" title="" style="width:100%;height:100%" title="thumbnail">'

                ]
            });
        });
        CKEDITOR.replace('content_en', {filebrowserImageBrowseUrl: '/elfinder/ckeditor'});
        CKEDITOR.replace('content_ru', {filebrowserImageBrowseUrl: '/elfinder/ckeditor'});
        CKEDITOR.replace('content_kz', {filebrowserImageBrowseUrl: '/elfinder/ckeditor'});
    </script>
@endpush
