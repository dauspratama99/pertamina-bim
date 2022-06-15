<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\UserModel;

class LoginController extends Controller
{
    public function index()
    {
        return view ('auth.login');
    }

    public function aksiLogin(Request $r)
    {
        $username = $r->username;
        $password = $r->password;

        $data_user = UserModel::ChekLoginUser($username, $password);

        if ($data_user == True) {

            Session::put('nama_user', $data_user->nama_user);
            Session::put('username', $data_user->username);
            Session::put('level', $data_user->level);
            Session::put('id_user', $data_user->id_user);

            echo '<script>
                    alert("Login Sukses")
                    window.location = "dashboard"
                </script>';

        } else {

            echo '<script>
                alert("Username / Password Salah !")
                window.location = "/"
                </script>';
        }
    }

   
    public function logout(Request $request)
    {
        $request->session()->forget('nama_user');
        $request->session()->forget('username');
        $request->session()->forget('email');
        $request->session()->forget('nohp');
        $request->session()->forget('level');
        $request->session()->forget('foto');
        $request->session()->forget('id');
        $request->session()->flush();
            
        echo '<script>
                alert("Logout Berhasil")
                window.location = "/"
              </script>';
    
           
    }
    
}
