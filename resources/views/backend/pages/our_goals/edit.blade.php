@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('our_goal.update', $our_goal->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <img src="{{ asset('frontend/our_goals/'.$our_goal->image) }}" alt="" height="100" width="100">
                        <div class="form-group">
                            <label for="image">Şəkil</label>
                            <input type="file" name="image" class="form-control" value="{{$our_goal->image}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Başlıq</label>
                            <input type="text" name="title" class="form-control" value="{{$our_goal->title}}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Alt başlıq</label>
                            <input type="text" name="subtitle" value="{{$our_goal->subtitle}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content">Məzmun</label>
                            <input type="text" name="content" value="{{$our_goal->content}}" class="form-control">
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