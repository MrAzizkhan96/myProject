@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Məqsəd № {{ $our_goal -> id }}</h2>
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('our_goal.index') }}"><i class="fa fa-angle-double-right"
                                            style="font-size:24px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Şəkil</th>
                                    <th scope="col">Başlıq</th>
                                    <th scope="col">Alt başlıq</th>
                                    <th scope="col">Məzmun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row">
                                    <td>{{ $our_goal->id }}</td>
                                    <td><img src="{{ asset('frontend/our_goals/' . $our_goal->image) }}" alt=""
                                            height="100" width="100"></td>
                                    <td>{{ $our_goal->title }}</td>
                                    <td>{{ $our_goal->subtitle }}</td>
                                    <td>{{ $our_goal->content }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
