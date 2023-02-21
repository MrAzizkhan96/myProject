@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Haqqımızda</h2>
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('aboutback.create') }}"><i class="fa fa-plus"
                                            style="font-size:24px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @elseif($message = Session::get('error'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">İcon</th>
                                    <th scope="col">İcon başlığı</th>
                                    <th scope="col">Başlıq</th>
                                    <th scope="col">Məzmun</th>
                                    <th scope="col">Təsvir</th>
                                    <th scope="col">Funksiyalar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($abouts as $about)
                                    <tr scope="row">
                                        <td>{{ $about->id }}</td>
                                        <td><img src="{{ asset('frontend/about_icons/' . $about->icon) }}" alt=""
                                            height="100" width="100"></td>
                                        <td>{{ $about->icon_title }}</td>
                                        <td>{{ $about->title }}</td>
                                        <td>{{ $about->content }}</td>
                                        <td>{{ $about->description }}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a href="{{ route('aboutback.show', $about->id) }}">
                                                        <button class="btn btn-primary btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Bax"><i
                                                                class="fa fa-eye"></i></button>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{ route('aboutback.edit', $about->id) }}">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Yenilə"><i
                                                                class="fa fa-edit"></i></button>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('aboutback.destroy', $about->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm rounded-0" type="submit"
                                                            data-toggle="tooltip" data-placement="top" title="Sil"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
