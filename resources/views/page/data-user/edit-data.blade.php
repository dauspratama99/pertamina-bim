@extends('layout.index')

@section('content')

<div class="pagetitle">
    <h1>Edit Data User</h1>
  </div><!-- End Page Title -->

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></h5></h5>
            

            <form action="{{ route('update-data-user', $user->id_user) }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_user" class="form-control" id="nama_user" value="{{ $user->nama_user }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" value="{{ $user->username }}">
                        </div>

                    </div>
               
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="inputPassword4" class="form-label">Level</label>
                        <select class="form-control" name="level" id="level" required>
                            <option value="" selected disabled>- Pilih Level -</option>
                            <option value="" selected disabled>- Pilih Level -</option>
                            <option value="Operation Head">Operation Head</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Certified Reffueling Maintenance">Certified Reffueling Maintenance</option>
                            <option value="Maintenance">Maintenance</option>
                        </select>
                        <script>
                            document.getElementById('level').value = "{{ $user->level }}";
                        </script>
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
