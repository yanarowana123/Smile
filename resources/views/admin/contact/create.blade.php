@extends('admin.layouts.app')
@section('content')
    <div>
        <div class="card ">

            <form method="POST" action="{{route('admin.contact.index')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="content">Контент</label>
                        <input name="content" type="text" class="form-control" id="content"
                               value="{{old('content')}}"
                        >
                        @error('content')
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
