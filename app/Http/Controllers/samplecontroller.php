<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class samplecontroller extends Controller
{
    public function sample(Request $request)
    {
       
         $data=$request->all();
         $user= new User($data);
        return response()->json($user);
    }
}
