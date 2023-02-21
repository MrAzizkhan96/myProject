@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Başlıq</label>
                            <input type="text" name="title" class="form-control" value="{{$banner->title}}" placeholder="Başlığı daxil edin">
                        </div>
                        @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        <div class="form-group">
                            <label for="description">Təsvir</label>
                            <input type="text" name="description" class="form-control" value="{{$banner->description}}" placeholder="Təsviri daxil edin">
                        </div>
                        @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        <img src="{{ asset('frontend/banners/'.$banner->image) }}" alt="" height="100" width="100">
                        <div class="form-group">
                            <label for="image">Şəkil</label>
                            <input type="file" name="image" value="{{$banner->image}}" class="form-control">
                        </div>
                        @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror 
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" name="url" value="{{$banner->url}}" class="form-control">
                        </div>
                        @error('url')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        <div class="form-gorup">
                            <label for="status">Status</label>
                            <br>
                            <select id="" class="custom-select form-control" name="status">
                                <option value="1">Aktiv</option>
                                <option value="0">Passiv</option>
                            </select>
                        </div>
                        @error('status')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
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