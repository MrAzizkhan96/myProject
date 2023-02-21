@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card-card-primary">
                    <div class="card-header">
                        <h3>Üzv Əlavə Et</h3>
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
                    <form action="{{ route('teamback.store') }}" method="post" enctype="multipart/form-data">
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
                                <label for="employee">Üzv</label>
                                <input type="text" name="employee" class="form-control" placeholder="Üzvü daxil edin">
                            </div>
                            @error('employee')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="position">Vəzifəsi</label>
                                <input type="text" name="position" class="form-control" placeholder="Vəzifəni daxil edin">
                            </div>
                            @error('position')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="name">Təsvir</label>
                                <input type="text" name="description" class="form-control"
                                    placeholder="Təsviri daxil edin">
                            </div>
                            @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror                         
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="url" name="facebook" class="form-control" placeholder="Facebook ünvanını daxil edin">
                            </div>
                            @error('facebook')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="url" name="twitter" class="form-control" placeholder="Twitter ünvanını daxil edin">
                            </div>
                            @error('twitter')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                <input type="url" name="linkedin" class="form-control" placeholder="Linkedin ünvanını daxil edin">
                            </div>
                            @error('linkedin')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="gmail">Gmail</label>
                                <input type="email" name="gmail" class="form-control" placeholder="Gmail ünvanını daxil edin">
                            </div>
                            @error('gmail')
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
                            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-save"
                                    style="font-size:24px"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@stop
