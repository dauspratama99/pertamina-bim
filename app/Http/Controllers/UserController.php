<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = DB::table('tb_user')->get();
        return view('page.data-user.view-data', $data);
    }

    public function add()
    {
        return view ('page.data-user.add-data');
    }

    public function store(Request $r)
    {
         $simpan = DB::table('tb_user')->insert([
             'nama_user' => $r->nama_user,
             'username' => $r->username,
             'password' => Hash::make($r->password),
             'level' => $r->level,
         ]);
 
         if($simpan == TRUE){
             echo "<script>
                     alert('Data Berhasil Disimpan');
                     window.location='data-user'
                 </script>";
         } else {
             echo "<script>
                     alert('Data Gagal Disimpan');
                     window.location='data-user'
                 </script>";
         }
    }

    public function edit($id)
    {
        $data['user'] = DB::table('tb_user')->where('id_user', $id)->first();
        return view ('page.data-user.edit-data', $data);
    }

    public function update (Request $r, $id)
    {
        $update = DB::table('tb_user')->where('id_user', $id)->update([
                'nama_user' => $r->nama_user,
                'username' => $r->username,
                'level' => $r->level,
            ]);

        if($update == TRUE){
            echo "<script>
                    alert('Data Berhasil Diupdate');
                    window.location='/data-user'
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diupdate');
                    window.location='/data-user'
                </script>";
        }
    }

    public function destroy($id)
    {
        $delete = DB::table('tb_user')->where('id_user', $id)->delete();
       
        if($delete == TRUE){
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='/data-user'
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    window.location='/data-user'
                </script>";
        }
    }
}
