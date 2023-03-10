@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Haqqımızda № {{$about->id}}</h2> 
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('aboutback.index') }}"><i class="fa fa-angle-double-right"
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
                                    <th scope="col">İcon</th>
                                    <th scope="col">İcon başlığı</th>
                                    <th scope="col">Başlıq</th>
                                    <th scope="col">Məzmun</th>
                                    <th scope="col">Təsvir</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr scope="row">
                                        <td>{{ $about->id }}</td>
                                        <td><img src="{{ asset('frontend/about_icons/' . $about->icon) }}" alt=""
                                            height="100" width="100"></td>
                                        <td>{{ $about->icon_title }}</td>
                                        <td>{{ $about->title }}</td>
                                        <td>{{ $about->content}}</td>  
                                        <td>{{ $about->description}}</td>                                      
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
