<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mibase;
use Illuminate\Support\Facades\Storage;

class MibaseController extends Controller
{
    public function index(){
     return mibase::all();
    }

    public function show($id){
        return mibase::find($id);
       }

    public function create(Request $request){
      // $imagenes=$request->file("imagen")->store("public");
      // $url=Storage::url($imagenes);
      
      // $registro = new mibase();  
      // $registro->imagen=$url;
      // $registro->nombre=$request->input('nombre');
      // $registro->descripcion=$request->input('descripcion');
      // $registro->save();
      // return redirect("http://localhost:5173/");
      
      $imagenes=$request->file("imagen")->store("public");
      $url=Storage::url($imagenes);
      
      $registro = new mibase();  
      $registro->imagen=$url;
      $registro->nombre=$request->input('nombre');
      $registro->descripcion=$request->input('descripcion');
      $registro->save();
      return mibase::all();
      // return redirect("http://localhost:5173/");
      
      
      // return $request;
      // return json_encode(["msg"=>"removed"]);
    }

    public function edit(Request $request, $id){
      
      if($request->file("imagen")==null){
      $nombre=$request->input('nombre');
      $descripcion=$request->input('descripcion');
      mibase::where('id',$id)->update([
      'nombre'=>$nombre,
      'descripcion'=>$descripcion]);
      return mibase::all();
        // return redirect("http://localhost:5173/");
      }
      else{

      $imagenes=$request->file("imagen")->store("public");
      $url=Storage::url($imagenes);
      
      $imagen=$url;
      $nombre=$request->input('nombre');
      $descripcion=$request->input('descripcion');
      mibase::where('id',$id)->update([
      'imagen'=>$imagen,
      'nombre'=>$nombre,
      'descripcion'=>$descripcion]);
      return mibase::all();
        // return redirect("http://localhost:5173/");
      }
     
    }

    public function destroy($id){
        mibase::destroy($id);
    //  return mibase::json_encode(['msg'=>'registro eliminado']);
    return mibase::all();
    }
      
    
}


