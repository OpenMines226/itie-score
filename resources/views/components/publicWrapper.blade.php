@extends('layouts.app')

@section('bodyClasses', 'hold-transition text-sm layout-top-nav')

@section('content')
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container-fluid">
            <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ asset('img/avatar.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
            <span class="brand-text font-weight-light">ITIE-Score</span>
            </a>
            
            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    
                </ul>
            </div>

            @include('partials._userWidget')
        </div>
    </nav>
    <!-- /.navbar -->

    {{ $header }}

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials._header')

        <!-- Main content -->
        <div class="content">
            <div class="container">
            {{ $slot }}
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('partials._footer')
@endsection

@push('styles')
<style>
    .carousel-item {
    height: 92vh;
    min-height: 350px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
</style>
@endpush