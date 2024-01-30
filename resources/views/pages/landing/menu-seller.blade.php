@php
    $html_tag_data = [];
    $title = 'Dashboard Seller';
    $description = 'Halaman dashboard Seller';
       $breadcrumbs = ['/dashboard/seller' => 'Home'];
@endphp
@extends('layout-topbar', ['html_tag_data' => $html_tag_data, 'title' => $title, 'description' => $description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container w-lg-50">
        @include('_layout/breadcrumb')
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pt-2 pb-2">
                        <div class="row justify-content-center text-center">
                            <div class="col">
                                <h2 class="mb-0 pb-0">
                                    <span class="fw-bold">{{ $greeting }}</span><br />
                                    <small class="text-muted">{{ session('name') }}</small>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 text-center justify-content-center">
                            <ul class="nav justify-content-start row">
                                {{-- @foreach ($modules as $module) --}}
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <li class="nav-item col text-center">
                                        <a class="nav-link d-flex flex-column align-items-center" href="{{ url("administration/seller") }}">
                                            <span class="d-inline-block bg-primary rounded p-2">
                                                <i class="fa fa-2x  fa-bullhorn  order-1 text-white"></i>
                                            </span>
                                            <span class="order-2 my-2">
                                                <span class="fw-bold d-block">Pasang Iklan</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item col text-center">
                                        <a class="nav-link d-flex flex-column align-items-center" href="">
                                            <span class="d-inline-block bg-primary rounded p-2">
                                                <i class="fa fa-2x fas fa-shopping-cart  order-1 text-white"></i>
                                            </span>
                                            <span class="order-2 my-2">
                                                <span class="fw-bold d-block">Cari Orderan</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item col text-center">
                                        <a href="{{ url("administration/order-in") }}" class="nav-link d-flex flex-column align-items-center">
                                            <span class="position-relative d-inline-block bg-primary rounded p-2">
                                                <i class="fa fa-2x fas fa-boxes order-1 text-white"></i>
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-full bg-danger">
                                                    {{ $order_in }}
                                                </span>
                                            </span>
                                            <span class="order-2 my-2">
                                                <span class="fw-bold d-block">Orderan Masuk</span>
                                            </span>
                                        </a>
                                    </li>
                                </div>
                                   
                                {{-- @endforeach --}}
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer pt-2 pb-2">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @include('_layout/footer-seller') --}}
