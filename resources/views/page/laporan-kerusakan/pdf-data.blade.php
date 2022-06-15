<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
    
    <style>
     
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
         img {
             width: 100px;
             position: absolute;
             float: right;
            
         }

    </style>

</head>

<body style="font-size: 5pt;">
    <img class="logo" src="assets/img/pertaminalogo.jpg" alt="Images">
    <p style="font-size: 12pt; text-align:center; padding-left:100px"><b><u>LAPORAN KERUSAKAN DAN PERBAIKAN</u></b></p>
    <p style="font-size: 8pt; text-align:left; margin-left:300px">Bagian/Fungsi :  <br>
                                                 Bulan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ date('F') }} <br>
                                                 Tahun &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ date('Y') }}</p>


    <table style='width:100%; font-size:9pt;' >
        <tr>
            <th style="text-align: left" width="2%"> <b> NO</b></th>
            <th style="text-align: center" width="10%"> <b> TGL </b></th>
            <th style="text-align: center" width="24%"><b> LAPORAN KERUSAKAN </b></th>
            <th style="text-align: center" width="10%"> <b> NAMA </b></th>
            <th style="text-align: center" width="10%"> <b> TGL </b></th>
            <th style="text-align: center" width="24%"> <b> PELAKSANAAN PERBAIKAN </b></th>
            <th style="text-align: center" width="10%"> <b> NAMA </b></th>
        </tr>
        @foreach ($kerusakan as $no => $data )
            <tr>
                <td style="text-align: center">{{ $no+1 }}</td>
                <td style="text-align: center">{{ $data->date }}</td>
                <td>{{ $data->unit }}. {{ $data->data_check }}</td>
                <td style="text-align: center">{{ $data->nama_user }}</td>
                <td style="text-align: center">{{ $data->tgl_perbaikan }}</td>
                @if ($data->tgl_perbaikan == null)
                    <td></td>
                @endif

                @if ($data->tgl_perbaikan != null)
                    <td>{{ $data->unit }}. {{ $data->pelaksanaan_kerusakan }}</td>
                @endif

                @if ($data->pelaksanaan_kerusakan == null)
                    <td style="text-align: center"></td>
                @endif
                @if ($data->pelaksanaan_kerusakan != null)
                    <td style="text-align: center">{{ $data->nama_user }}</td>
                @endif
            </tr>
        @endforeach
    </table>

    <script>
        window.print();

    </script>
</body>

</html>
