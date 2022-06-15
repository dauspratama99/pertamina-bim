@extends('layout.index')

@section('content')

<div class="pagetitle">
    <h1>Tambah Data Reffuler</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    </h5>


                    <form action="{{ route('simpan-data-unit') }}" method="post" enctype="multipart/form-data"
                        class="row g-3">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="inputEmail4" class="form-label">Nama Reffuler</label>
                                    <input type="text" name="unit" class="form-control" id="unit" required>
                                </div>

                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="reset" class="btn btn-secondary btn-sm">Batal</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
