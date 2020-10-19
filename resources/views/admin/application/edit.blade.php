@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Заявка</h1>
        </div>
        <form method="POST" action="{{route('admin.feedback.update',$application->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label class="label" for="name">
                        Имя
                    </label>
                    <div class="control">
                        <input type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               name="name"
                               id="name"
                               value="{{$application->name}}"
                               disabled>

                    </div>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label" for="phone">
                        Телефон
                    </label>
                    <div class="control">
                        <input type="text"
                               class="form-control @error('phone') is-invalid @enderror"
                               name="phone"
                               id="phone"
                               value="{{$application->phone}}"
                               disabled>

                    </div>

                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label" for="commentary">
                        Сообщение
                    </label>

                    <div class="control">
                 <textarea disabled class="form-control  @error('message') is-invalid @enderror" name="message"
                           id="message">{{$application->message}}</textarea>
                    </div>

                    @error('message')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="label" for="is_contacted">
                        Ответили?
                    </label>
                    <div class="control">
                        <select class="form-control" id="is_contacted" name="is_contacted" required>
                            <option value="" disabled></option>
                            <option
                                @if($application->is_contacted == 1)selected
                                @endif
                                value="1">Да
                            </option>
                            <option
                                @if($application->is_contacted == 0)selected
                                @endif
                                value="0">Нет
                            </option>
                        </select>

                    </div>

                    @error('is_contacted')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


            </div>

            <div class="card-footer">
                <div class="form-group">
                    <div class="control">
                        <button class="btn btn-success float-right" type="submit">Сохранить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


