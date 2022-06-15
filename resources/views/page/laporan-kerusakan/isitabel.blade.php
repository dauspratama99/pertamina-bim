  @foreach ($kerusakan as $no => $data )
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->date }}</td>
        <td>{{ $data->unit }}. {{ $data->data_check }}</td>
        <td>{{ $data->tgl_perbaikan }}</td>
        <td>{{ $data->unit }}. {{ $data->pelaksanaan_kerusakan }}</td>
        <td></td>
    </tr>
  @endforeach