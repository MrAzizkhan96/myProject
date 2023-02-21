@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Müştəri rəyləri</h2>
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('customer_review.create') }}"><i class="fa fa-plus"
                                            style="font-size:24px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @elseif($message = Session::get('error'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Məzmun</th>
                                    <th scope="col">Ad və Soyad</th>
                                    <th scope="col">Vəzifəsi</th>
                                    <th scope="col">Şəkil</th>
                                    <th scope="col">Funksiyalar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer_reviews as $customer_review)
                                    <tr scope="row">
                                        <td>{{ $customer_review->id }}</td>
                                        <td>{{ $customer_review->content }}</td>
                                        <td>{{ $customer_review->fullname }}</td>
                                        <td>{{ $customer_review->position }}</td>
                                        <td><img src="{{ asset('frontend/customer_images/' . $customer_review->image) }}"
                                                alt="" height="100" width="100"></td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a href="{{ route('customer_review.show', $customer_review->id) }}">
                                                        <button class="btn btn-primary btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Bax"><i
                                                                class="fa fa-eye"></i></button>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{ route('customer_review.edit', $customer_review->id) }}">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Yenilə"><i
                                                                class="fa fa-edit"></i></button>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form
                                                        action="{{ route('customer_review.destroy', $customer_review->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm rounded-0" type="submit"
                                                            data-toggle="tooltip" data-placement="top" title="Sil"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
