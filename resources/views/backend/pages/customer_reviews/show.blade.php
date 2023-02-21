@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Müştəri rəyi № {{ $customer_review->id }}</h2>
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('customer_review.index') }}"><i class="fa fa-angle-double-right"
                                            style="font-size:24px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Məzmun</th>
                                    <th scope="col">Ad və Soyad</th>
                                    <th scope="col">Vəzifəsi</th>
                                    <th scope="col">Şəkil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row">
                                    <td>{{ $customer_review->id }}</td>
                                    <td>{{ $customer_review->content }}</td>
                                    <td>{{ $customer_review->fullname }}</td>
                                    <td>{{ $customer_review->position }}</td>
                                    <td><img src="{{ asset('frontend/customer_images/' . $customer_review->image) }}"
                                            alt="" height="100" width="100"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
