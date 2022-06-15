@extends('layout.index')

@section('content')


  <div class="pagetitle">
    <h1>Data User</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <a href="{{ route('tambah-data-user') }}" class="btn btn-sm btn-primary">Tambah</a>
            </h5>

            <!-- Table with stripped rows -->
            <table class="table datatable table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Username</th>
                  <th scope="col">Level</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $no => $data )
                <tr>
                  <td>{{ $no+1 }}</td>
                  <td>{{ $data->nama_user }}</td>
                  <td>{{ $data->username }}</td>
                  <td>{{ $data->level }}</td>
                  <td>
                    <a href="{{ route('edit-data-user', $data->id_user) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('destroy-data-user', $data->id_user) }}" class="btn btn-sm btn-danger">Hapus</a>
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