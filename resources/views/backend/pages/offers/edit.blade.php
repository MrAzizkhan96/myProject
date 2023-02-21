@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('offer.update', $offer->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Başlıq</label>
                            <input type="text" name="title" class="form-control" value="{{$offer->title}}">
                        </div>
                        <img src="{{ asset('frontend/offers/images/'.$offer->image) }}" alt="" height="100" width="100">
                        <div class="form-group">
                            <label for="image">Şəkil</label>
                            <input type="file" name="image" class="form-control" value="{{$offer->image}}">
                        </div>
                        <div class="form-group">
                            <label for="url">Video</label>
                            <input type="url" name="video" value="{{$offer->video}}" class="form-control">
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