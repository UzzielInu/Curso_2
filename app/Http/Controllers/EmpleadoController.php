<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Turno;
use App\Departamento;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('empleados.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empleado = new Empleado;
        $sexos = array('HOMBRE' => 'HOMBRE',
                        'MUJER' => 'MUJER' );
        $turnos = Turno::all()->pluck('descripcion', 'id');
        $departamentos = Departamento::all()->pluck('descripcion', 'id');
        return view('empleados.create',['empleado' => $empleado,
                                        'sexos' => $sexos,
                                        'turnos' => $turnos,
                                        'departamentos' => $departamentos,
                                    ]);

        // return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       //dd($request->toArray());

        $validateData = $request->validate([
            'matricula' => 'required|unique:empleados|min:3|max:4',
            'paterno' => 'required',
            'materno' => 'required',
            'nombre' => 'required',
            'fecha_nacimiento' => 'required',
            ]);

       $empleado = new Empleado($request->all());
        
        // $empleado->matricula = $request->input['matricula'];
        // $empleado->paterno = $request->input['paterno'];
        // $empleado->materno = $request->input['materno']; 
        // $empleado->nombre = $request->input['name']; 
        // $empleado->fecha_nacimiento = $request->input['fecha'];
        // $empleado->sexo = $request->input['sexo'];
        // $empleado->id_departamento = $request->input['id_departamento'];
        // $empleado->id_turno = $request->input['id_turno'];  
        $empleado->save();   
         if ($empleado){
                        echo "Los datos han sido guardados";
                        }
            else{
                echo "AAAAAAAAAA PEEEEEEEEEEERRRRRRROOO traaaes el ooooooooocnitriiiiiix";
            }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
