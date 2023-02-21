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
                    <form action="{{ route('customer_review.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="content">Məzmun</label>
                                <input type="text" name="content" class="form-control" placeholder="Məzmunu daxil edin">
                            </div>
                            @error('content')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="fullname">Ad və Soyad</label>
                                <input type="text" name="fullname" class="form-control"
                                    placeholder="Ad və Soyadı daxil edin">
                            </div>
                            @error('fullname')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="position">Vəzifə</label>
                                <input type="text" name="position" class="form-control"
                                    placeholder="Vəzifəni daxil edin">
                            </div>
                            @error('position')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="image">Şəkil</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            @error('image')
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
