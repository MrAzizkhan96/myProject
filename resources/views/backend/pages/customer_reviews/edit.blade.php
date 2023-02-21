@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('customer_review.update', $customer_review->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">                        
                        <div class="form-group">
                            <label for="content">Məzmun</label>
                            <input type="text" name="content" class="form-control" value="{{$customer_review->content}}">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Ad və Soyad</label>
                            <input type="text" name="fullname" value="{{$customer_review->fullname}}" class="form-control">
                        </div>
                        <div class="form-gorup">
                            <label for="position">Vəzifə</label>
                            <input type="text" name="position" class="form-control" value="{{$customer_review->position}}">
                        </div><br>
                        <img src="{{ asset('frontend/customer_images/'.$customer_review->image) }}" alt="" height="100" width="100">                        
                        <div class="form-group">                            
                            <label for="image">Şəkil</label>
                            <input type="file" name="image" class="form-control" value="{{$customer_review->image}}">
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