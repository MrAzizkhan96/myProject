@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('galleryback.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <img src="{{ asset('frontend/gallery_images/'.$gallery->image) }}" alt="" height="100" width="100">
                        <div class="form-group">
                            <label for="image">Şəkil</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Başlıq</label>
                            <input type="text" name="title" class="form-control" value="{{$gallery->title}}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Alt başlıq</label>
                            <input type="text" name="subtitle" value="{{$gallery->subtitle}}" class="form-control">
                        </div>
                        <div class="form-gorup">
                            <label for="gallery_category">Kateqoriya</label>
                            <select class="form-control" name="gallery_category_id">
                                @foreach ($gallery_categories as $gallery_category)
                                    <option value="{{ $gallery_category->id }}">{{ $gallery_category->title }}</option>
                                @endforeach
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