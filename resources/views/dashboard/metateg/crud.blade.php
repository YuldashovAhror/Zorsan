@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success') != null)
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error') != null)
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Добавить Второй слайдер</h5>
                </div>
                {{-- @dd('asd') --}}
                <form action="{{ route('dashboard.metateg.update', $metateg) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-6">
                                <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                <div class="col-12 text-center mb-2">
                                    <img style="height: 150px; width: 150px"
                                        src="{{ $metateg->photo }}">
                                </div>
                                <div>
                                    <input class="form-control" id="exampleFormControlInput1" type="file" name="photo"
                                        multiple>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название</label>
                                    <div class="col-12 text-center">
                                        <i data-feather="loader" style="height: 37.5%; width: 37.5%" ></i>
                                    </div>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="name" value="{{$metateg->name}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <label class="form-label" for="exampleFormControlInput1">Описание</label>
                            <div class="col-12">
                                <textarea name="discription" class="ckeditor" rows="10" cols="80">{{$metateg->discription}}</textarea>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
