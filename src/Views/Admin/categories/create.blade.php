@extends('layouts.master')

@section('title')
Thêm mới danh mục
@endsection

@section('content')
@if (!empty($_SESSION['errors']))
    <div class="alert alert-warning">
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @php
        unset($_SESSION['errors']);
    @endphp
@endif

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Thêm mới danh mục</h1>
                    </div>
                </div>
            </div>
            <div class="white_card_body">

                <form action="{{ url('admin/categories/store') }}" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection