<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;


class PersonasController extends Controller
{

    public function index()
    {
        //trae los datos de MD persona -- 
        $personas = Persona::select('nombres','edad','tp_persona')
        ->where('edad','>','17')->where('tp_persona','=','1')
        ->orderBy('nombres','asc')->paginate();
        return[
            'datos'=>$personas
        ];
    }
    public function trabajo1(){     
     $personas = Persona::where('genero','=','masculino')->get();
       return[
            'datos'=>$personas
        ];
    }
    public function punto2(){
        $personas = Persona::where('genero','=','femenino')->get();
        return[
            'date'=>$personas
        ];
    }

  public function punto3(){
        $personas = Persona::where('genero','=','masculino')->where('edad','>=','18')->where('tp_persona','=','1')->get();
        return[
            'date'=>$personas
        ];
    }
     public function punto4(){
        $personas = Persona::select('nombres','apellidos','telefono','direccion')->get();
        return[
            'date'=>$personas
        ];
    }

     public function punto5(){
        $personas = Persona::get();
        return[
            'date'=>$personas
        ];
    }

    public function store(Request $request)
    {
        // guarda ---
    }

    public function update(Request $request, $id)
    {
        // actualiza ----- 
    }

    public function destroy($id)
    {
        // elimina--------
    }
}
