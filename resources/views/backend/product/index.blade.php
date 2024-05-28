@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- CONTENT -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="#" class="btn btn-sm btn-success">
                                <i class="fa fa-plus" aria-hidden="true"></i>Thêm
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash" aria-hidden="true">Thùng rác</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:30px;">#</th>
                                <th class="text-center" style="width:90px;">Hình</th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Thương hiệu</th>
                                <th class="text-center" style="width:190px;">Chức năng</th>
                                <th class="text-center" style="width:30px;">ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">
                                </td>
                                <td>Tên sản phẩm</td>
                                <td>Danh mục</td>
                                <td>Thương hiệu</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-success">
                                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td class="text-center">ID</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
        <!-- /.CONTENT -->
    </div>
@endsection

@section('header')
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
@endsection
@section('footer')
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
@endsection
