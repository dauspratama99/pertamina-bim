@extends('layout.index')

@section('content')


  <div class="pagetitle">
    <h1>Data Reffuler</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <a href="{{ route('tambah-data-unit') }}" class="btn btn-sm btn-primary">Tambah</a>
            </h5>

            <!-- Table with stripped rows -->
            <table class="table datatable table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Reffuler</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($unit as $no => $data )
                    <tr>
                      <td>{{ $no+1 }}</td>
                      <td>{{ $data->unit }}</td>
                      <td>
                        <a href="{{ route('edit-data-unit', $data->id_unit) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('destroy-data-unit', $data->id_unit) }}" class="btn btn-sm btn-danger">Hapus</a>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection