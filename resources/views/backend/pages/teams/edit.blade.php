@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('teamback.update', $team->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <img src="{{ asset('frontend/team_images/'.$team->image) }}" alt="" height="100" width="100">
                        <div class="form-group">
                            <label for="image">Şəkil</label>
                            <input type="file" name="image" value="{{$team->image}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="employee">Üzv</label>
                            <input type="text" name="employee" class="form-control" value="{{$team->employee}}">
                        </div>
                        <div class="form-group">
                            <label for="position">Vəzifəsi</label>
                            <input type="text" name="position" class="form-control" value="{{$team->position}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Təsvir</label>
                            <input type="text" name="description" class="form-control" value="{{$team->description}}">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="url" name="facebook" value="{{$team->facebook}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="url" name="twitter" value="{{$team->twitter}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="url" name="linkedin" value="{{$team->linkedin}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gmail">Gmail</label>
                            <input type="email" name="gmail" value="{{$team->gmail}}" class="form-control">
                        </div>
                        <div class="form-gorup">
                            <label for="status">Status</label>
                            <br>
                            <select id="" class="custom-select form-control" name="status">
                                <option value="1">Aktiv</option>
                                <option value="0">Passiv</option>
                            </select>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-save" style="font-size:24px"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
    
@stop