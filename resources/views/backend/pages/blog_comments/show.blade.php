@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Bloq rəyi № {{$blog_comment->id}}</h2> 
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('blog_comment.index') }}"><i class="fa fa-angle-double-right"
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
                                    <th scope="col">Bloq</th>
                                    <th scope="col">Ad</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Komment</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr scope="row">
                                        <td>{{ $blog_comment->id }}</td>
                                        <td>{{ $blog_comment->belongBlog->id }}</td> 
                                        <td>{{ $blog_comment->name}}</td>
                                        <td>{{ $blog_comment->email}}</td>
                                        <td>{{ $blog_comment->comment }}</td>                                       
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
