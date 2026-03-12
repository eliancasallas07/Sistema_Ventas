<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    public function index()
    {
        $idUsuario = Auth::user()->id_usuario;
        $datos = DB::select("select * from usuario where id_usuario = $idUsuario");
        return view("vistas.perfil", compact("datos"));
    }

    public function actualizarIMG(Request $request)
    {
        $request->validate([
            "foto"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);

        $file=$request->file("foto");
        $idUsuario=Auth::user()->id_usuario;
        $nombreArchivo=$idUsuario."." . strtolower($file->getClientOriginalExtension());
        $ruta=storage_path("app/public/FOTOS-PERFIL-USUARIO/".$nombreArchivo);

        $res=move_uploaded_file($file, $ruta);

       try{
        $actualizarFoto=DB::update("update usuario set foto='$nombreArchivo' where id_usuario=$idUsuario");
        if($actualizarFoto==0) {
            $actualizarFoto=1;
        }
       }catch (\Throwable $th){
        $actualizarFoto = 0;
       }

        if ($res and $actualizarFoto){
            return back()->with("mensaje", "imagen actualizada corrrectamente");
        }else{
            return back()->with("error", "error al actualizar la imagen");
        }
    }
}
