@extends('admin.layouts.app')

@section('content')
    <div>
        <div class="card">
            <div class="card-header">
                <h1>{{\App\Models\Photo::getPage($block)}}</h1>
            </div>
            <form method="POST" action="{{route('admin.gallery.update',$block)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">


                    <div class="form-group">
                        <input type="file" name="images[]" class="form-control"
                               accept="image/*" multiple
                               id="images">
                        @error('images.*')
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

@push('scripts')
    <script>
        $(function () {
            $("#images").fileinput({
                theme: "fas",
                showUpload: false,
                showRemove: false,
                showCancel: false,
                showClose: false,
                initialPreview: [
                    @foreach($imagesUrls as $image)
                        '{{asset($image['path'])}}',
                    @endforeach
                ],
                initialPreviewAsData: true,
                initialPreviewConfig: [
                        @foreach($imagesUrls as $image)
                    {
                        key:{{$image['id']}}
                    },
                    @endforeach
                ],
                deleteUrl: "/admin/gallery/delete-image",
                deleteExtraData: function () {
                    return {
                        _token: $("input[name='_token']").val(),
                    };
                },
                overwriteInitial: false,


            });
        });
    </script>
@endpush
