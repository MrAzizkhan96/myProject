@extends('backend.layouts.index')
@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card-card-primary">
                    <div class="card-header">
                        <h3>Yenilə</h3>
                    </div>
                    <form action="{{ route('blogback.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                            <img src="{{ asset('frontend/blog_images/' . $blog->image) }}" alt="" height="100"
                                width="100">
                            <div class="form-group">
                                <label for="image">Şəkil</label>
                                <input type="file" name="image" class="form-control" value="{{ $blog->image }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Başlıq</label>
                                <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Təsvir</label>
                                <input type="text" name="description" value="{{ $blog->description }}"
                                    class="form-control">
                            </div>
                            <div class="form-gorup">
                                <label for="status">Status</label>
                                <br>
                                <select class="custom-select form-control" name="status">
                                    <option value="1">Aktiv</option>
                                    <option value="0">Passiv</option>
                                </select>
                            </div>
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
