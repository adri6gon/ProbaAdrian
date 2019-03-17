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

    function getRow(Request $request){
        $id = $request->input('id');
        $data['incidence'] = DB::table('incidences')->where('id', $id)->first();
        
        if($data != null)
            return view('/edit', $data);
        else    
            return view('/home');
    }

    function edit(Request $request){
        $id = $request->input('id');
        $incidence = Incidence::find($id);

        $incidence->name = $request->input('name');
        $incidence->lastname = $request->input('lastname');
        $incidence->phone = $request->input('phone');
        $incidence->email = $request->input('email');
        $incidence->image = $request->input('image');
        $incidence->category = $request->input('category');
        $incidence->description = $request->input('description');
        $incidence->location = $request->input('location');
        $incidence->state = $request->input('state');

        $incidence->save();
        //Faltan redirecciones a vista de OK
        return redirect()->to('/');
    }
}
