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
     
        #tabel,#tr,#td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .logo {

            right: 0;
            top: 0;
            width: 100px;
        }

    </style>

</head>

<body style="font-size: 5pt;">
    <p style="font-size: 15pt"><b>HYDRANT DISPENSER / REFUELLER CHECK LIST</b></p>

    <p style="font-size: 9pt">Location : DDPU MINANGKABAU</p>

    <img class="logo" src="assets/img/pertaminalogo.jpg" alt="Images" width="100px" style="margin-left: 85%; top:330%">

    <table style='width:100%; font-size:8pt;' id="table">
        <tr id="tr">
            <td id="td">Equipment ID : {{ $lap->unit }} </td>
            <td id="td">Date : {{ $lap->date }}</td>
            <td id="td">Group : {{ $lap->group }}</td>
            <td id="td">Shift : {{ $lap->shift }}</td>
        </tr>
    </table>
    <table style='width:100%; font-size:5pt;' border='1px' id="table">
        <tr id="tr">
            <th style="text-align: left" width="5%"> <b> NO</b></th>
            <th style="text-align: center" width="45%"> <b> CHECKS </b></th>
            <th style="text-align: center" width="10%"><b> S/C </b></th>
            <th style="text-align: center" width="40%"> <b> REMARKS </b></th>
        </tr>
        @foreach ($lapPDF as $no => $data )
        <tr id="tr">
            <td id="td">{{ $no+1 }}</td>
            <td id="td">{{ $data->data_check }}</td>
            <td id="td" style="text-align: center">{{ $data->sc }}</td>
            <td id="td" style="text-align: center">{{ $data->remark }} {{ $data->satuan }}</td>
        </tr>
        @endforeach
        <tr id="tr">
            <td id="td" colspan="3">Performed By</td>
            <td  id="td" colspan="1" style="text-align: right"><i>(Name & Sign)</i></td>
        </tr>
        <tr id="tr">
            <td  id="td" colspan="3">General Condition Summary by Supervisor</td>
            <td id="td" colspan="1" style="text-align: right"><i>(Select One)</i></td>
        </tr>
        <tr id="tr">
            <td id="td" colspan="3">Refueling Supervisor</td>
            <td  id="td" colspan="1" style="text-align: right"><i>(Name & Sign)</td>
        </tr>
    </table>

    <div class="float-left" style="padding-left: 10pt; padding-top:0%; font-size:8pt">

        <table style="border-color: white" border="">
            <tr>
                <td>Notes : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>S : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Satisfactory &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>01 : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Can be Operated &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>- This record shall be maintained and retained at least 1 year &nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>

            <tr>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>C : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Comment &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>02 : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Can be Operated with Repairs&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>

            <tr>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>N/A : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Not Available &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>03 : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Can not be Operated&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>

        </table>

    </div>

    <script>
        window.print();

    </script>
</body>

</html>
