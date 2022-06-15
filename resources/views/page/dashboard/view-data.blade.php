@extends('layout.index')

@section('content')

@if (session('level') == "Operation Head")
<div class="pagetitle">
    <h1>
        <marquee>Selamat Data Di Halaman Dashboard... </marquee>
    </h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card" style="background-color:darkgrey">

                        <div class="card-body">
                            <h5 class="card-title" style="color:white">Total User <span></span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="ps-3">
                                    @php
                                    $user = DB::table('tb_user')->count();
                                    @endphp
                                    <h6 style="color:white">{{ $user }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card" style="background-color:cadetblue">

                        <div class="card-body">
                            <h5 class="card-title" style="color:white">Total Reffuler</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-list-stars"></i>
                                </div>
                                <div class="ps-3">
                                    @php
                                    $unit = DB::table('tb_unit')->count();
                                    @endphp
                                    <h6 style="color:white">{{ $unit }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card" style="background-color:lightsteelblue">

                        <div class="card-body">
                            <h5 class="card-title" style="color:white">Total Shift Kerja</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-alarm"></i>
                                </div>
                                <div class="ps-3">
                                    @php
                                    $jam = DB::table('tb_shift')->count();
                                    @endphp
                                    <h6 style="color:white">{{ $jam }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif

@if (session('level') == "Supervisor")
<div class="pagetitle">
    <h1>
        <marquee>Selamat Data Di Halaman Dashboard... </marquee>
    </h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card" style="background-color:darkgrey">

                        <div class="card-body">
                            <h5 class="card-title" style="color:white">Total User <span></span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="ps-3">
                                    @php
                                    $user = DB::table('tb_user')->count();
                                    @endphp
                                    <h6 style="color:white">{{ $user }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card" style="background-color:cadetblue">

                        <div class="card-body">
                            <h5 class="card-title" style="color:white">Total Reffuler</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-list-stars"></i>
                                </div>
                                <div class="ps-3">
                                    @php
                                    $unit = DB::table('tb_unit')->count();
                                    @endphp
                                    <h6 style="color:white">{{ $unit }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card" style="background-color:lightsteelblue">

                        <div class="card-body">
                            <h5 class="card-title" style="color:white">Total Shift Kerja</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-alarm"></i>
                                </div>
                                <div class="ps-3">
                                    @php
                                    $jam = DB::table('tb_shift')->count();
                                    @endphp
                                    <h6 style="color:white">{{ $jam }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif

@endsection
