<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class UnitController extends Controller
{
    public function index()
    {
        $data['unit'] = DB::table('tb_unit')->get();
        return view('page.data-unit.view-data', $data);
    }

    public function add()
    {
        return view ('page.data-unit.add-data');
    }

    public function store(Request $r)
    {
         $simpan = DB::table('tb_unit')->insert([
             'unit' => $r->unit,
         ]);
 
         if($simpan == TRUE){
             echo "<script>
                     alert('Data Berhasil Disimpan');
                     window.location='data-unit'
                 </script>";
         } else {
             echo "<script>
                     alert('Data Gagal Disimpan');
                     window.location='data-unit'
                 </script>";
         }
    }

    public function edit($id)
    {
        $data['unit'] = DB::table('tb_unit')->where('id_unit', $id)->first();
        return view ('page.data-unit.edit-data', $data);
    }

    public function update (Request $r, $id)
    {
        $update = DB::table('tb_unit')->where('id_unit', $id)->update([
                'unit' => $r->unit,
            ]);

        if($update == TRUE){
            echo "<script>
                    alert('Data Berhasil Diupdate');
                    window.location='/data-unit'
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diupdate');
                    window.location='/data-unit'
                </script>";
        }
    }

    public function destroy($id)
    {
        $delete = DB::table('tb_unit')->where('id_unit', $id)->delete();
       
        if($delete == TRUE){
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/data-unit'
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/data-unit'
                </script>";
        }
    }

}
