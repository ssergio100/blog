<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PainelController extends Controller
{
   public function getUsers(){
       /* Uma forma */
      // $users = DB::select('Select * from user');

       /* Outra forma*/
       $users = DB::table('user')->get()->where('id','>',1);

       return view(('users'),['users'=>$users]);

   }
}
