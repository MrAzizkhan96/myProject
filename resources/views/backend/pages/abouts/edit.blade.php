@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('aboutback.update', $about->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <img src="{{ asset('frontend/about_icons/'.$about->icon) }}" alt="" height="100" width="100">
                        <div class="form-group">
                            <label for="title">İcon</label>                            
                            <input type="file" name="icon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="icon_title">İcon başlığı</label>
                            <input type="text" name="icon_title" class="form-control" value="{{$about->icon_title}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Başlıq</label>
                            <input type="text" name="title" value="{{$about->title}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content">Məzmun</label>
                            <input type="text" name="content" value="{{$about->content}}" class="form-control">
                        </div>
                        <div class="form-gorup">
                            <label for="description">Təsvir</label>
                            <input type="text" name="description" value="{{$about->description}}" class="form-control">
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