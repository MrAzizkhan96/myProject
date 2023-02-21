@extends('backend.layouts.index')
@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card-card-primary">
                    <div class="card-header">
                        <h3>Yenilə</h3>
                    </div>
                    <form action="{{ route('serviceback.update', $service->id) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                            <img src="{{ asset('frontend/services/images/' . $service->image) }}" alt=""
                                height="100" width="100">
                            <div class="form-group">
                                <label for="image">Şəkil</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <img src="{{ asset('frontend/services/icons/' . $service->icon) }}" alt=""
                                height="100" width="100">
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="file" name="icon" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Başlıq</label>
                                <input type="text" name="title" class="form-control" value="{{ $service->title }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Təsvir</label>
                                <input type="text" name="description" value="{{ $service->description }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="file" name="url" value="{{ $service->url }}" class="form-control">
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
