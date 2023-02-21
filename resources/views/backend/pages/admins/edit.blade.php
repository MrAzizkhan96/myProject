@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('admin.update', $admin->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Ad</label>
                            <input type="text" name="name" class="form-control" value="{{$admin->name}}" placeholder="Adınızı daxil edin">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" name="email" class="form-control" value="{{$admin->email}}" placeholder="Emailinizi daxil edin">
                        </div>
                        <div class="form-group">
                            <label for="name">Şifrə</label>
                            <input type="password" name="password" class="form-control" placeholder="Şifrənizi daxil edin">
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