@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">{{$team->id}} №-li üzv</h2> 
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('teamback.index') }}"><i class="fa fa-angle-double-right"
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
                                    <th scope="col">Üzv</th>
                                    <th scope="col">Vəzifəsi</th>
                                    <th scope="col">Təsvir</th>
                                    <th scope="col">Facebook</th>
                                    <th scope="col">Twitter</th>
                                    <th scope="col">Linkedin</th>
                                    <th scope="col">Gmail</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr scope="row">
                                        <td>{{ $team->id }}</td>
                                        <td><img src="{{ asset('frontend/team_images/'.$team->image) }}" alt="" height="100" width="100"></td>
                                        <td>{{ $team->employee }}</td>
                                        <td>{{ $team->position }}</td>
                                        <td>{{ $team->description }}</td>
                                        <td>{{ $team->facebook}}</td>  
                                        <td>{{ $team->twitter}}</td>  
                                        <td>{{ $team->linkedin}}</td> 
                                        <td>{{ $team->gmail}}</td>   
                                        <td>{{ $team->status}}</td>                                      
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
