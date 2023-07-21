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
                    <h5>Добавить АРХИТЕКТУРА</h5>
                </div>
                {{-- @dd('asd') --}}
                <form action="{{ route('dashboard.arxitektura.update', $arxitektur) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img style="height: 150px; width: 150px"
                                    src="{{ $arxitektur->photo }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                <div>
                                    <input class="form-control" id="exampleFormControlInput1" type="file" name="photo"
                                        multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
