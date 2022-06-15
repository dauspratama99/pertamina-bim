@extends('layout.index')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <!-- Multi Columns Form -->
                    <form id="form" class="row g-3" method="post" action="" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="col-md-3">
                            <label for="inputEmail5" class="form-label">Pilih Unit</label>
                            <select name="unit" id="unit" class="form-control">
                                <option value="" selected disabled>- Pilih -</option>
                                @foreach($unit as $u)
                                <option value="{{ $u->id_unit }}">{{ $u->unit }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="inputEmail5" class="form-label">Tanggal Awal</label>
                            <input type="date" name="dari" id="dari" required class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label for="inputEmail5" class="form-label">Tanggal Akhir</label>
                            <input type="date" name="sampai" id="sampai" required class="form-control">
                        </div>

                        <div class="col-md-3">
                            <button type="button" onclick="cari()" class="btn btn-info"
                                style="margin-top:32px; color:white;">
                                <i class="bi bi-search"></i> Cari
                            </button>

                            <button type="button" onclick="cetakData()" class="btn btn-secondary ml-3"
                                style="margin-top:32px; color:white;">
                                <i class="bi bi-printer"></i> Print
                            </button>

                        </div>
                </div>
            </div>

        </div>

    </div>
    </div>
</section>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title">
                        <div class="float-right">
                            <a href="{{ route('cetak_lap_kerusakan') }}" class="btn btn-sm btn-secondary">  <i class="bi bi-printer"></i> Print Data</a>
                        </div>
                    </h5> --}}
                    <div class="tab-content pt-2" id="borderedTabContent">
                        <div class="tab-pane fade show active" id="bordered-harian" role="tabpanel"
                            aria-labelledby="harian-tab">
                            <table class="table table-striped datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal Kerusakan</th>
                                        <th scope="col">Kerusakan</th>
                                        <th scope="col">Tanggal Perbaikan</th>
                                        <th scope="col">Perbaikan</th>
                                    </tr>
                                </thead>
                                <tbody id="isiTabel">
                                  
                                </tbody>
                            </table>
                        </div>
                        </form>
                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>

</section>

@push('js')

<script>
    function cari() {
        var d = $('#dari').val()
        var s = $('#sampai').val()
        var u = $('#unit').val()

        if ( u == null && d == '' && s == '') {
            alert('Pilih Inputan Terlebih Dahulu !')
        } else if ( u == null && d != '' && s != '') {
            alert('Lengkapi Unit Terlebih Dahulu !')
        } else if ( u != null && d == '' && s == '') {
            alert('Lengkapi Tanggal Terlebih Dahulu !')
        } else {
            var unit = u;
            var dari = d;
            var sampai = s;
        }

        $('#isiTabel').load("/cari-lap-kerusakan/" + unit + "/" + dari + "/" + sampai)
    }

    function cetakData() {
           
        var d = $('#dari').val()
        var s = $('#sampai').val()
        var u = $('#unit').val()

           
        if ( u == null && d == '' && s == '') {
            alert('Pilih Inputan Terlebih Dahulu !')
        } else if ( u == null && d != '' && s != '') {
            alert('Lengkapi Unit Terlebih Dahulu !')
        } else if ( u != null && d == '' && s == '') {
            alert('Lengkapi Tanggal Terlebih Dahulu !')
        } else {
            var unit = u;
            var dari = d;
            var sampai = s;
        }

        window.open(`{{ url('tampil_cetak_kerusakan_pdf') }}/`  + unit + "/" + dari + "/" + sampai, '_blank')
    }


</script>

@endpush

@endsection
