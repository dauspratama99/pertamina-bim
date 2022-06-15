<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Barryvdh\DomPDF\Facade\PDF;



class LaporanController extends Controller
{
    public function index()
    {
        $data['unit'] = DB::table('tb_unit')->get();
        return view ('page.laporan.view-data', $data);
    }

    public function isidataTabel($unit, $dari, $sampai)
    {

        $data['cekReffuler'] = DB::table('tb_klompok')
                ->join('tb_shift', 'tb_klompok.id_shift', '=', 'tb_shift.id_shift')
                ->join('tb_user', 'tb_klompok.id_user', '=', 'tb_user.id_user')
                ->join('tb_unit', 'tb_klompok.id_unit', '=', 'tb_unit.id_unit')
                ->select('tb_klompok.*', 'tb_shift.shift', 'tb_user.nama_user', 'tb_unit.unit')
                ->where('tb_unit.id_unit', $unit)
                ->whereBetween('tb_klompok.date', [$dari, $sampai])
                ->get();
        // dd($data['cekReffuler']);
        return view('page.laporan.isitabel',$data);
        
    }

    public function hapusCeklis($id)
    {
        $hapus = DB::table('tb_klompok')->where('id_klompok', $id)->delete();
        if($hapus == TRUE){
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/data-ceklis'
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/data-ceklis'
                </script>";
        }

    }

    public function cetakPDF($id)
    {
        
        $data['lap'] = DB::table('tb_checklist')
                ->join('tb_isi_checklist', 'tb_checklist.id_check', '=', 'tb_isi_checklist.id_checklist')
                ->join('tb_klompok', 'tb_isi_checklist.id_klompok', '=', 'tb_klompok.id_klompok')
                ->join('tb_shift', 'tb_klompok.id_shift', '=', 'tb_shift.id_shift')
                ->join('tb_unit', 'tb_klompok.id_unit', '=', 'tb_unit.id_unit')
                ->select('tb_checklist.*', 'tb_isi_checklist.sc', 'tb_isi_checklist.remark', 'tb_klompok.group', 'tb_klompok.date', 'tb_klompok.id_klompok', 'tb_shift.shift', 'tb_unit.unit')
                ->where('tb_isi_checklist.id_klompok',$id)
                ->orWhere(DB::raw("tb_checklist.id_check NOT IN (
                                    SELECT tb_isi_checklist.id_checklist FROM tb_isi_checklist WHERE tb_isi_checklist.id_klompok = $id
                        ) "))
                ->groupBy('tb_checklist.id_check')
                ->orderBy('tb_checklist.id_check')
                ->first();

        $data['lapPdf'] = DB::table('tb_checklist')
                ->join('tb_isi_checklist', 'tb_checklist.id_check', '=', 'tb_isi_checklist.id_checklist')
                // ->join('tb_klompok', 'tb_isi_checklist.id_klompok', '=', 'tb_klompok.id_klompok')
                // ->join('tb_shift', 'tb_klompok.id_shift', '=', 'tb_shift.id_shift')
                // ->select('tb_checklist.*', 'tb_isi_checklist.sc', 'tb_isi_checklist.remark', 'tb_klompok.group', 'tb_klompok.date','tb_shift.shift')
                // ->where('tb_isi_checklist.id_klompok',$id)
                // ->orWhere(DB::raw("tb_checklist.id_check NOT IN (
                //                     SELECT tb_isi_checklist.id_checklist FROM tb_isi_checklist WHERE tb_isi_checklist.id_klompok = $id
                //         ) "))
                ->groupBy('tb_checklist.id_check')
                ->orderBy('tb_checklist.id_check', 'ASC')
                ->get();

                // dd($data['lapPdf']);
               
                view()->share('page.laporan.lap-ceklis-reffuler', $data);
                $pdf = PDF::loadView('page.laporan.lap-ceklis-reffuler', $data);
                // download PDF atau stream PDF
                return $pdf->stream('dokumen_pertamina.pdf');

                // return view ('page.laporan.lap-ceklis-reffuler', $data);
                
    }

    public function lapKerusakan()
    {   
        $data['unit'] = DB::table('tb_unit')->get();
        $data['kerusakan'] = DB::table('tb_isi_checklist')
                            ->join('tb_checklist', 'tb_isi_checklist.id_checklist', '=', 'tb_checklist.id_check')   
                            ->join('tb_klompok', 'tb_isi_checklist.id_klompok', '=', 'tb_klompok.id_klompok')
                            ->join('tb_unit', 'tb_klompok.id_unit', '=', 'tb_unit.id_unit')
                            ->join('tb_kerusakan', 'tb_isi_checklist.id_isi', '=', 'tb_kerusakan.id_isi')
                            ->select('tb_klompok.date', 'tb_unit.unit', 'tb_checklist.data_check', 'tb_kerusakan.pelaksanaan_kerusakan', 'tb_kerusakan.tgl_perbaikan')
                            ->whereIn('tb_isi_checklist.sc', ['S','S/C'])
                            ->get();

        return view('page.laporan-kerusakan.view-data', $data);
    }

    public function cetak_Kerusakan()
    {
        $data['kerusakan'] = DB::table('tb_isi_checklist')
                            ->join('tb_checklist', 'tb_isi_checklist.id_checklist', '=', 'tb_checklist.id_check')   
                            ->join('tb_klompok', 'tb_isi_checklist.id_klompok', '=', 'tb_klompok.id_klompok')
                            ->join('tb_user', 'tb_klompok.id_user', '=', 'tb_user.id_user')
                            ->join('tb_unit', 'tb_klompok.id_unit', '=', 'tb_unit.id_unit')
                            ->join('tb_kerusakan', 'tb_isi_checklist.id_isi', '=', 'tb_kerusakan.id_isi')
                            ->select('tb_klompok.date', 'tb_unit.unit', 'tb_checklist.data_check', 'tb_kerusakan.pelaksanaan_kerusakan', 'tb_kerusakan.tgl_perbaikan', 'tb_user.nama_user')
                            ->whereIn('tb_isi_checklist.sc', ['S','S/C'])
                            ->get();
                            
        view()->share('page.laporan-kerusakan.pdf-data', $data);
        $pdf = PDF::loadView('page.laporan-kerusakan.pdf-data', $data);
        // download PDF atau stream PDF
        return $pdf->stream('dokumen_pertamina.pdf');
    }

    public function cariKerusakan($unit, $dari, $sampai)
    {
        $data['kerusakan'] = DB::table('tb_isi_checklist')
                            ->leftjoin('tb_checklist', 'tb_isi_checklist.id_checklist', '=', 'tb_checklist.id_check')   
                            ->leftjoin('tb_klompok', 'tb_isi_checklist.id_klompok', '=', 'tb_klompok.id_klompok')
                            ->leftjoin('tb_unit', 'tb_klompok.id_unit', '=', 'tb_unit.id_unit')
                            ->leftjoin('tb_kerusakan', 'tb_isi_checklist.id_isi', '=', 'tb_kerusakan.id_isi')
                            ->select('tb_klompok.date', 'tb_unit.unit', 'tb_checklist.data_check', 'tb_kerusakan.pelaksanaan_kerusakan', 'tb_kerusakan.tgl_perbaikan')
                            ->where('tb_unit.id_unit', $unit)
                            ->whereBetween('tb_klompok.date', [$dari, $sampai])
                            ->whereIn('tb_isi_checklist.sc', ['S','S/C'])
                            ->get();
        
        return view('page.laporan-kerusakan.isitabel', $data);
    }

    public function cetakKerusakan($unit, $dari, $sampai)
    {

        $data['kerusakan'] = DB::table('tb_isi_checklist')
                            ->leftjoin('tb_checklist', 'tb_isi_checklist.id_checklist', '=', 'tb_checklist.id_check')   
                            ->leftjoin('tb_klompok', 'tb_isi_checklist.id_klompok', '=', 'tb_klompok.id_klompok')
                            ->leftjoin('tb_user', 'tb_klompok.id_user', '=', 'tb_user.id_user')
                            ->leftjoin('tb_unit', 'tb_klompok.id_unit', '=', 'tb_unit.id_unit')
                            ->leftjoin('tb_kerusakan', 'tb_isi_checklist.id_isi', '=', 'tb_kerusakan.id_isi')
                            ->select('tb_klompok.date', 'tb_unit.unit', 'tb_checklist.data_check', 'tb_kerusakan.pelaksanaan_kerusakan', 'tb_kerusakan.tgl_perbaikan', 'tb_user.nama_user')
                            ->where('tb_unit.id_unit', $unit)
                            ->whereBetween('tb_klompok.date', [$dari, $sampai])
                            ->whereIn('tb_isi_checklist.sc', ['S','S/C'])
                            ->get();



        view()->share('page.laporan-kerusakan.pdf-data', $data);
        $pdf = PDF::loadView('page.laporan-kerusakan.pdf-data', $data);
        // download PDF atau stream PDF
        return $pdf->stream('dokumen_pertamina.pdf');
    }
}
