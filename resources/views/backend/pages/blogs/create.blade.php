@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card-card-primary">
                    <div class="card-header">
                        <h3>Məlumat Əlavə Et</h3>
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
                    <form action="{{ route('blogback.store') }}" method="post" enctype="multipart/form-data">
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
                                <label for="description">Təsvir</label>
                                <input type="text" name="description"  class="form-control">
                            </div>
                            @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror                            
                            <div class="form-gorup">
                                <label for="status">Status</label>
                                <br>
                                <select class="custom-select form-control" name="status">
                                    <option value="1">Aktiv</option>
                                    <option value="0">Passiv</option>
                                </select>    
                            </div>
                            @error('status')
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
