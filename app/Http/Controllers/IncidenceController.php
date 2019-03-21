<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Incidence;
use Illuminate\Http\File;
use Storage;

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
        $this->uploadFile($request);
        return redirect()->to('/added');
    }
    public function getData(){
        $data['data'] = DB::table("incidences")->get();
        if($data != null)
            return view('/home', $data);
        else{
            return false;
        }
    }
    public function uploadFile(Request $request){
        $path = Storage::disk('local')->put($request->input('image'),$request->file('image'));
        //var_dump($path);
        //exit(); 
        return $path; 
    }
    public function deleteOldImage($image){
        Storage::delete($image);
    }

    public function getRow(Request $request){
        $id = $request->input('id');
        $path = $request->path();
        $data['incidence'] = DB::table('incidences')->where('id', $id)->first();

        if($data != null){
            if($path == "edit-incidence")
                return view('/edit', $data);
            else
                return view('/show', $data);
        }else{    
            return view('/message',"Error en la petición");
        }
    }

    public function edit(Request $request){
        $id = $request->input('id');
        $incidence = Incidence::find($id);
        $this->deleteOldImage($incidence->image);

        $incidence->name = $request->input('name');
        $incidence->lastname = $request->input('lastname');
        $incidence->phone = $request->input('phone');
        $incidence->email = $request->input('email');
        $incidence->image = $request->input('image');
        $incidence->category = $request->input('category');
        $incidence->description = $request->input('description');
        $incidence->location = $request->input('location');
        $incidence->state = $request->input('state');
        $this->uploadFile($request);


        $incidence->save();
        return redirect()->to('/edited');
    }
}
