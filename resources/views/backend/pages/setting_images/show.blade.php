@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Şəkil № {{ $setting_image->id }}</h2>
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('setting_image.index') }}"><i class="fa fa-angle-double-right"
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
                                    <th scope="col">Açar</th>
                                    <th scope="col">Dəyər</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row">
                                    <td>{{ $setting_image->id }}</td>
                                    <td>{{ $setting_image->key }}</td>
                                    <td><img src="{{ asset('frontend/setting_images/'.$setting_image->value) }}" alt="" height="100" width="100"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
