@extends('admin.layouts.app')

@section('content')
    <div>
        <div class="card ">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('admin.feature.service.update',$feature)}}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">


                    <div class="form-group">
                        <label for="title_ru">Заголовок</label>
                        <input name="title_ru" type="text" class="form-control" id="title_ru"
                               value="{{$feature->title_ru}}">
                        @error('title_ru')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="title_en">Title</label>
                        <input name="title_en" type="text" class="form-control" id="title_en"
                               value="{{$feature->title_en}}">
                        @error('title_en')
                        <div class="text-red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content_ru">Контент</label>
                        <textarea name="content_ru" id="content_ru"
                                  class="form-control">{{$feature->content_ru}}</textarea>
                        @error('content_ru')
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



                    <div class="form-group">
                        <label for="image">Изображение</label>
                        <input type="file" name="image" class="form-control"
                               accept="image/*"
                               id="image">
                        @error('image')
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

@push('styles')

@endpush
@push('scripts')
    <script>
        $("#image").fileinput({
            theme: "fas",
            showUpload: false,
            showRemove: false,
            showCancel: false,
            showClose: false,
            initialPreview: [
                '<img src="{{asset($feature->image)}}" class="file-preview-image" alt="" title="" style="width:100%;height:100%" title="thumbnail">'

            ]
        });

        let config = {
            filebrowserImageBrowseUrl: '/elfinder/ckeditor',
            allowedContent: true,
            removeFormatAttributes: ''
        };
        CKEDITOR.replace('content_en',config);
        CKEDITOR.replace('content_ru', config);
    </script>
@endpush
