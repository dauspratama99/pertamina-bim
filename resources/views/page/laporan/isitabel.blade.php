@foreach ($cekReffuler as $no => $data )

    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama_user }}</td>
        <td>{{ $data->unit }}</td>
        <td>{{ $data->group }}</td>
        <td>{{ $data->shift }}</td>
        <td>
            <a href="{{ route('cetak-lap-ceklis', $data->id_klompok) }}" class="btn btn-sm btn-warning"> Print </a>
            <a href="{{ route('hapus-data-ceklis', $data->id_klompok) }}" class="btn btn-sm btn-danger">Hapus</a>

        </td>
    </tr>

@endforeach
