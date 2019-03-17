<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Incidence;

class IncidenceController extends Controller
{

    public function create(Request $request)
    {
        $incidence =  Incidence::create([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'image' => $request->input('image'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'state' => $request->input('state')
        ]);
            //Tiene que redirigir a otra vista
        return redirect()->to('/login');
    }
    function getData(){
        $data['data'] = DB::table("incidences")->get();

        if($data != null)
            return view('/home', $data);
        else{
            return view("/home");
        }
    }
}
