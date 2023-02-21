@extends('backend.layouts.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card-card-primary">
                <div class="card-header">
                    <h3>Yenilə</h3>
                </div>
                <form action="{{ route('faq.update', $faq->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="question">Sual</label>
                            <input type="text" name="question" class="form-control" value="{{$faq->question}}">
                        </div>
                        <div class="form-group">
                            <label for="answer">Cavab</label>
                            <input type="text" name="answer" value="{{$faq->answer}}" class="form-control">
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