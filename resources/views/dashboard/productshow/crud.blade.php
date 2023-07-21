@extends('layouts.dashboard.main')

@section('content')
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
    {{-- <div class="mb-2">
        <a href="{{ route('dashboard.productshow.index') }}"><button class="btn btn-primary" type="submit">Back</button></a>
    </div> --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Добавить Показать продукты</h5>
                </div>
                <form action="{{ route('dashboard.productshow.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    {{-- <img class="mb-3" src="/issets/size.png" alt="" style="height: 84px; width: 150px"> --}}
                                    <input class="form-control" id="exampleFormControlInput1" type="file" name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <input type="hidden" value="{{ $product_id }}" name="product_id"> --}}
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название RU</label>
                                    <input class="form-control" id="exampleFormControlInput1" required type="text"
                                        name="name_ru">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название UZ</label>
                                    <input class="form-control" id="exampleFormControlInput1" required type="text"
                                        name="name_uz">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название EN</label>
                                    <input class="form-control" id="exampleFormControlInput1" required type="text"
                                        name="name_en">
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Все Показать продукты</h5>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Фото</th>
                                <th scope="col" class="text-center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productshows as $key => $productshow)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>

                                    <td>{{ $productshow->name_ru }}</td>
                                    <td><img src="{{ $productshow->photo }}" alt=""
                                            style="height: 100px; width: 200px">
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-xs btn-success" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter{{ $productshow->id }}Edit"><i
                                                class="bx bx-pencil"></i>Изменить</button>
                                        <div class="modal fade" id="exampleModalCenter{{ $productshow->id }}Edit"
                                            tabindex="-1" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document"
                                                style="max-width: 50vw">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Изменить</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('dashboard.productshow.update', $productshow) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('put') }}
                                                            <div class="card-body">
                                                            </div>
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                                                    <div class="mb-3">
                                                                        <img class="mb-3" src="{{ $productshow->photo }}" alt="" style="height: 150px; width: 150px">
                                                                        <input class="form-control"
                                                                            id="exampleFormControlInput1" type="file"
                                                                            name="photo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="exampleFormControlInput1">Название
                                                                            RU</label>
                                                                        <input class="form-control"
                                                                            id="exampleFormControlInput1" type="text"
                                                                            required name="name_ru"
                                                                            value="{{ $productshow->name_ru }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="exampleFormControlInput1">Название
                                                                            UZ</label>
                                                                        <input class="form-control"
                                                                            id="exampleFormControlInput1" type="text"
                                                                            required name="name_uz"
                                                                            value="{{ $productshow->name_uz }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="exampleFormControlInput1">Название
                                                                            EN</label>
                                                                        <input class="form-control"
                                                                            id="exampleFormControlInput1" type="text"
                                                                            required name="name_en"
                                                                            value="{{ $productshow->name_en }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-end">
                                                                <button class="btn btn-primary"
                                                                    type="submit">Изменить</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                </div>

                <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter{{ $productshow->id }}"><i
                        class="bx bx-trash"></i>Удалить</button>
                <div class="modal fade" id="exampleModalCenter{{ $productshow->id }}" tabindex="-1"
                    aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Удалить?</h5>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('dashboard.productshow.destroy', $productshow) }}" method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button class="btn btn-primary" type="submit" data-bs-original-title=""
                                        title="">Да</button>
                                </form>
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                                    data-bs-original-title="" title="">Нет</button>
                            </div>
                        </div>
                    </div>
                </div>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
