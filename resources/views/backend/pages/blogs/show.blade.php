@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Bloq № {{$blog->id}}</h2> 
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('blogback.index') }}"><i class="fa fa-angle-double-right"
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
                                    <th scope="col">Təsvir</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr scope="row">
                                        <td>{{ $blog->id }}</td>
                                        <td><img src="{{ asset('frontend/blog_images/'.$blog->image) }}" alt="" height="100" width="100"></td>
                                        <td>{{ $blog->title }}</td> 
                                        <td>{{ $blog->description}}</td>
                                        <td>{{ $blog->status}}</td>                                       
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
