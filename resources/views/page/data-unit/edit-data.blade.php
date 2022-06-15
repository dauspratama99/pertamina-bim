@extends('layout.index')

@section('content')

<div class="pagetitle">
    <h1>Edit Data Reffuler</h1>
  </div><!-- End Page Title -->

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></h5></h5>
            

            <form action="{{ route('update-data-unit', $unit->id_unit) }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Nama Reffuler</label>
                            <input type="text" name="unit" class="form-control" id="unit" value="{{ $unit->unit }}">
                        </div>
                      
                    </div>

            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                <button type="reset" class="btn btn-secondary btn-sm">Batal</button>
            </div>
                
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
