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
        #tabel,
        #tr,
        #td, th {
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

<body style="font-size: 5pt;font-family:Arial, Helvetica, sans-serif;">

    <img src="assets/img/pertaminalogo.jpg" alt="Images">
    <p style="font-size: 11pt; font-family:Arial, Helvetica, sans-serif;"><b>HYDRANT DISPENSER / REFUELLER CHECK
            LIST</b><br>
        <p style="font-size: 7pt">Location : DDPU MINANGKABAU</p>

        <table style='width:100%; font-size:8pt;' id="table">
            <tr id="tr">
                <td id="td">&nbsp;Equipment ID : {{ $lap->unit }} </td>
                <td id="td">&nbsp;Date : {{ $lap->date }}</td>
                <td id="td" style='width:12%'>&nbsp;Group : {{ $lap->group }}</td>
                <td id="td">&nbsp;Shift : {{ $lap->shift }}</td>
            </tr>
        </table>

        <table style='width:100%; font-size:5pt;' border='1px' id="table">
            
            
            <tr id="tr">
                <th style="text-align: center" width="5%"> <b> NO</b></th>
                <th style="text-align: center" width="45%"> <b> CHECKS </b></th>
                <th style="text-align: center" width="10%"><b> S/C </b></th>
                <th style="text-align: center" width="40%"> <b> REMARKS </b></th>
            </tr>
           
            
            <tr id="tr">
                <td id="td" style="text-align: center"><b>I</b></td>
                <td id="td"><b>Cleanliness</b></td>
                <td id="td" style="text-align: center">{{ $lapPdf[0]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[0]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center"><b>II</b></td>
                <td id="td"><b>Truck conditions</b></td>
                <td id="td"></td>
                <td id="td"></td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">1</td>
                <td id="td">Fuel</td>
                <td id="td" style="text-align: center">{{ $lapPdf[1]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[1]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">2</td>
                <td id="td">Radiator Condition / Water</td>
                <td id="td" style="text-align: center">{{ $lapPdf[2]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[2]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">3</td>
                <td id="td">Lubricant</td>
                <td id="td" style="text-align: center">{{ $lapPdf[3]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[3]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">4</td>
                <td id="td">Battery Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[4]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[4]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">5</td>
                <td id="td">Brake</td>
                <td id="td" style="text-align: center">{{ $lapPdf[5]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[5]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">6</td>
                <td id="td">General Condition of Engine</td>
                <td id="td" style="text-align: center">{{ $lapPdf[6]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[6]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">7</td>
                <td id="td">Horn</td>
                <td id="td" style="text-align: center">{{ $lapPdf[7]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[7]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">8</td>
                <td id="td">Wiper</td>
                <td id="td" style="text-align: center">{{ $lapPdf[8]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[8]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">9</td>
                <td id="td">Head & Tail Lamps Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[9]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[9]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">10</td>
                <td id="td">Sign Lamps</td>
                <td id="td" style="text-align: center">{{ $lapPdf[10]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[10]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">11</td>
                <td id="td">Beacon Light</td>
                <td id="td" style="text-align: center">{{ $lapPdf[11]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[11]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">12</td>
                <td id="td">Fueling Lamps</td>
                <td id="td"></td>
                <td id="td"></td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">13</td>
                <td id="td">PTO / Hydraulic Pump</td>
                <td id="td"></td>
                <td id="td"></td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">14</td>
                <td id="td">Compressor</td>
                <td id="td" style="text-align: center">{{ $lapPdf[12]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[12]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">15</td>
                <td id="td">Mirrors</td>
                <td id="td" style="text-align: center">{{ $lapPdf[13]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[13]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">16</td>
                <td id="td">Tires</td>
                <td id="td" style="text-align: center">{{ $lapPdf[14]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[14]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">17</td>
                <td id="td">General Condition of Transmission</td>
                <td id="td" style="text-align: center">{{ $lapPdf[15]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[15]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">18</td>
                <td id="td">Hydraulic Ladder / Platform</td>
                <td id="td" style="text-align: center">{{ $lapPdf[16]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[16]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">19</td>
                <td id="td">Rearward Gear Warning</td>
                <td id="td" style="text-align: center">{{ $lapPdf[17]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[17]->remark }}</td>
            </tr>

            <tr id="tr">
                <td id="td" style="text-align: center"><b>III</b></td>
                <td id="td"><b>Tank Condition</b></td>
                <td id="td"></td>
                <td id="td"></td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">1</td>
                <td id="td">Step Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[18]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[18]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">2</td>
                <td id="td">Jet Level Sensor Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[19]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[19]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">3</td>
                <td id="td">Pressure Vacum Valve / Free Vent</td>
                <td id="td" style="text-align: center">{{ $lapPdf[20]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[20]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">4</td>
                <td id="td">Water Drain Line Tank (roof area water drain)</td>
                <td id="td" style="text-align: center">{{ $lapPdf[21]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[21]->remark }}</td>
            </tr>

            <tr id="tr">
                <td id="td" style="text-align: center"><b>IV</b></td>
                <td id="td"><b>Safety Equipments</b></td>
                <td id="td"></td>
                <td id="td"></td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">1</td>
                <td id="td">Flame trap condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[22]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[22]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">2</td>
                <td id="td">Grounding and/or Bonding Cable Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[23]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[23]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">3</td>
                <td id="td">Interlock System</td>
                <td id="td" style="text-align: center">{{ $lapPdf[24]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[24]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">4</td>
                <td id="td">Seal Override Interlock System</td>
                <td id="td" style="text-align: center">{{ $lapPdf[25]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[25]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">5</td>
                <td id="td">Seal Override Deadman</td>
                <td id="td" style="text-align: center">{{ $lapPdf[26]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[26]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">6</td>
                <td id="td">Fire Extinguishers(seal, number & date of last check)</td>
                <td id="td" style="text-align: center">{{ $lapPdf[27]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[27]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center"></td>
                <td id="td">: (pressure indicator)</td>
                <td id="td" style="text-align: center">{{ $lapPdf[28]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[28]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">7</td>
                <td id="td">"Product"-"No Smoking"-Safety Signs& Decals</td>
                <td id="td" style="text-align: center">{{ $lapPdf[29]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[29]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">8</td>
                <td id="td">Safety Cone ; 4-Direction Flag ; Landyard</td>
                <td id="td" style="text-align: center">{{ $lapPdf[30]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[30]->remark }}</td>
            </tr>

            <tr id="tr">
                <td id="td" style="text-align: center"><b>V</b></td>
                <td id="td"><b>Refueling Equipments</b></td>
                <td id="td"></td>
                <td id="td"></td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center"></td>
                <td id="td"><b>- Before Refueling</b></td>
                <td id="td"></td>
                <td id="td"></td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">1</td>
                <td id="td">Underwing Hoses Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[31]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[31]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center"></td>
                <td id="td">: RearHose & Reel conditions</td>
                <td id="td" style="text-align: center">{{ $lapPdf[32]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[32]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center"></td>
                <td id="td">: FrontHose & Reel conditions</td>
                <td id="td" style="text-align: center">{{ $lapPdf[33]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[33]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">2</td>
                <td id="td">Platform Hoses Condition: Left</td>
                <td id="td" style="text-align: center">{{ $lapPdf[34]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[34]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center"></td>
                <td id="td">: Right</td>
                <td id="td" style="text-align: center">{{ $lapPdf[35]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[35]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">3</td>
                <td id="td">Condition of Flowmeter: Sealing</td>
                <td id="td" style="text-align: center">{{ $lapPdf[36]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[36]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center"></td>
                <td id="td">: Calibration exp. Date</td>
                <td id="td" style="text-align: center">{{ $lapPdf[37]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[37]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">4</td>
                <td id="td">Deadman Control Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[38]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[38]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">5</td>
                <td id="td">Input Coupler Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[39]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[39]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">6</td>
                <td id="td">Date of Last Filter Change</td>
                <td id="td" style="text-align: center">{{ $lapPdf[40]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[40]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">7</td>
                <td id="td">PCV & Regulator</td>
                <td id="td" style="text-align: center">{{ $lapPdf[41]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[41]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">8</td>
                <td id="td">Nitrogen Pressure Indicator</td>
                <td id="td" style="text-align: center">{{ $lapPdf[42]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[42]->remark }} {{ $lapPdf[42]->satuan }} </td>
            </tr>

            <tr id="tr">
                <td id="td" style="text-align: center"></td>
                <td id="td"><b>- During Refueling</b></td>
                <td id="td"></td>
                <td id="td"></td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">1</td>
                <td id="td">Inlet Pessure Indicator</td>
                <td id="td" style="text-align: center">{{ $lapPdf[43]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[43]->remark }} {{ $lapPdf[43]->satuan }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">2</td>
                <td id="td">PCV Monitor Indicator</td>
                <td id="td" style="text-align: center">{{ $lapPdf[44]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[44]->remark }} {{ $lapPdf[44]->satuan }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">3</td>
                <td id="td">PCV Air Reference Indicator</td>
                <td id="td" style="text-align: center">{{ $lapPdf[45]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[45]->remark }} {{ $lapPdf[45]->satuan }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">4</td>
                <td id="td">PDG indicator</td>
                <td id="td" style="text-align: center">{{ $lapPdf[46]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[46]->remark }} {{ $lapPdf[46]->satuan }}</td>
            </tr>

            <tr id="tr">
                <td id="td" style="text-align: center"><b>VI</b></td>
                <td id="td"><b>Others</b></td>
                <td id="td"></td>
                <td id="td"></td>

            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">1</td>
                <td id="td">Operating Hours Record</td>
                <td id="td" style="text-align: center">{{ $lapPdf[47]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[47]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">2</td>
                <td id="td">Rubber Block</td>
                <td id="td" style="text-align: center">{{ $lapPdf[48]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[48]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">3</td>
                <td id="td">Oil Absorbent / Spill Kit</td>
                <td id="td" style="text-align: center">{{ $lapPdf[49]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[49]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">4</td>
                <td id="td">Sight Glass / Visijar Condition</td>
                <td id="td" style="text-align: center">{{ $lapPdf[50]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[50]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">5</td>
                <td id="td">Ladder Wellness</td>
                <td id="td" style="text-align: center">{{ $lapPdf[51]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[51]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">6</td>
                <td id="td">Fuel Leaks</td>
                <td id="td" style="text-align: center">{{ $lapPdf[52]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[52]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">7</td>
                <td id="td">Dust Cap Input Coupler and/or Underwing Coupling</td>
                <td id="td" style="text-align: center">{{ $lapPdf[53]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[53]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">8</td>
                <td id="td">Bucket with Bonding Wire</td>
                <td id="td" style="text-align: center">{{ $lapPdf[54]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[54]->remark }}</td>
            </tr>
            <tr id="tr">
                <td id="td" style="text-align: center">9</td>
                <td id="td">Filter Sumps and/or Tank Sumps Drain</td>
                <td id="td" style="text-align: center">{{ $lapPdf[55]->sc }}</td>
                <td id="td" style="text-align: center">{{ $lapPdf[55]->remark }}</td>
            </tr>

            <tr id="tr">
                <td id="td" colspan="3">Performed By</td>
                <td id="td" colspan="1" style="text-align: right"><i>(Name & Sign)</i></td>
            </tr>
            <tr id="tr">
                <td id="td" colspan="3">General Condition Summary by Supervisor</td>
                <td id="td" colspan="1" style="text-align: right"><i>(Select One)</i></td>
            </tr>
            <tr id="tr">
                <td id="td" colspan="3">Refueling Supervisor</td>
                <td id="td" colspan="1" style="text-align: right"><i>(Name & Sign)</td>
            </tr>
        </table>

        <div class="float-left" style="padding-left: 10pt; font-size:4pt; padding-top:0%;">

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
