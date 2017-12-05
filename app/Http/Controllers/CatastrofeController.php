<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrofe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Twitter;


class CatastrofeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        return view('catastrofe/catastrofe');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $usuario = Auth::user();
      if ($usuario->id_tipo_usuario == 5){
            return view('home');
      }
      $placeholder='abc';
         $tipo = $request->tipo_catastrofe;
        if($tipo=='1'){
                 Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("Y-m-d", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Incendio',
             

        ]);
            }
            else if($tipo=='2'){
               Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Inundacion',
             

        ]);
            }
            else if($tipo=='3'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Terremoto',
             

        ]);
            }
            else if($tipo=='4'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Tsunami',
             

        ]);
            }
            else if($tipo=='5'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Erupción Volcánica',
             

        ]);
            }
            else if($tipo=='6'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Aluvión',
             

        ]);
            }
            else if($tipo=='7'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' =>'Sequía',
             

        ]);
            }
            else if($tipo=='8'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Temporal de lluvia',
             

        ]);
            }
            else if($tipo=='9'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Marejadas',
             

        ]);
            }
            else if($tipo=='10'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Tormentas de arena',
             

        ]);
            }
            else if($tipo=='11'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Temperaturas extremas',
             

        ]);
            }
            else if($tipo=='12'){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Heladas',
             

        ]);
            }
            else if($tipo=='13'){
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Avalanchas de nieve',
             

        ]);
            }
            else if($tipo=='14'){
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Actividad volcanica',
             

        ]);
            }
            else if($tipo=='15'){
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Brote de enfermedades',
             

        ]);
            }
            else if($tipo=='16'){
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Pandemia',
             

        ]);
            }
            else{
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            //'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => $request->nombre_tipo_catastrofe,
             

        ]);
        
            }
        $texto = '#Catastrofe_Chile_' . $request->nombre . ' ' . $request->nombre_tipo_catastrofe . ' ';
        $texto2 = $texto . ' '. $request->fecha_inicio;
        $texto3 = $texto2 . ' '. $request->descripcion;
        $texto4 = $texto3 . ' '. $request->lugar_catastrofe;    
        Twitter::postTweet(array('status' => $texto4, 'format' => 'json'));
        return back()->with('flash','Catastrofe ingresada correctamente');
    }

      public function get(Request $request, $id){
        $catastrofe = DB::select('select * from catastroves where id = ?', $id);
        $declarador = DB::select('select name from users where id = ?', $catastrofe->id_user);
        return view('catastrofe/catastrofeDetails', $catastrofe, $declarador);
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
