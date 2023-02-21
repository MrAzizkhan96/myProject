@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card-card-primary">
                    <div class="card-header">
                        <h3>Admin Əlavə Et</h3>
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
                    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Ad</label>
                                <input type="text" name="name" class="form-control" placeholder="Adınızı daxil edin">
                            </div>
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ 'Emaili düzgün daxil edin' }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Emailinizi daxil edin">
                            </div>
                            <div class="form-group">
                                <label for="name">Şifrə</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Şifrənizi daxil edin">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-outline-primary"><i class="fas fa-save"
                                    style="font-size:24px"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@stop
