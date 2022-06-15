<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illminate\Support\Facades\Auth;
use Illminate\Support\Facades\DB;
use Illminate\Support\Facades\Validator;

class DashboardController extends Controller
{
   public function index()
   {
       return view ('page.dashboard.view-data');
   }
}
