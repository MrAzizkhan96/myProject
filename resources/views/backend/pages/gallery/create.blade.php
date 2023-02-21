@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card-card-primary">
                    <div class="card-header">
                        <h3>Şəkil Əlavə Et</h3>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @elseif($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form action="{{ route('galleryback.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="image">Şəkil</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="title">Başlıq</label>
                                <input type="text" name="title" class="form-control" placeholder="Başlığı daxil edin">
                            </div>
                            @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="subtitle">Alt başlıq</label>
                                <input type="text" name="subtitle" class="form-control"
                                    placeholder="Alt başlığı daxil edin">
                            </div>
                            @error('subtitle')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-gorup">
                                <label for="gallery_category_id">Kateqoriya</label>
                                <select class="form-control" name="gallery_category_id">
                                    @foreach ($gallery_categories as $gallery_category)
                                        <option value="{{ $gallery_category->id }}">{{ $gallery_category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('gallery_category_id')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-save"
                                    style="font-size:24px"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@stop
