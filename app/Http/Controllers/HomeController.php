<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Medidas;
use App\Organizacion;
use App\Catastrofe;
use App\CentroDeAcopio;
use App\Evento;
use App\RNV;
use App\RNVUsers;
use App\User;
use App\Donacion;
use App\Donantes;
use App\Actividad;
use App\ActividadUsers;
use App\Voluntariado;
use App\VoluntariadoUser;
use App\Trabajo;
use App\HabilidadesUser;
use App\Habilidades;
use Twitter;






class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $catastrofes = \App\Catastrofe::orderBy('fecha_inicio', 'asc')->take(5)->get();
        $usuarios = \App\User::all();
        return view('home', compact('usuarios', 'catastrofes'));
    }
    public function viewPerfil()
    {   
        $usuario = Auth::user();
        if ($usuario->id_tipo_usuario == 5){
            return view('home');
        }
        #$usuario = \App\User::find($user->id);
        return view('perfil.perfil', compact('usuario'));
    }


    public function updatePerfil(Request $loQueLlega)
    {
        $usuario = Auth::user();
         if ($usuario->id_tipo_usuario == 5){
            return view('home');
        }
        $usuario->name = $loQueLlega->name;
        $usuario->last_name = $loQueLlega->last_name;
        $usuario->email = $loQueLlega->email;
        $usuario->num_tarjeta = $loQueLlega->num_tarjeta;
        $usuario->rut_pasaporte = $loQueLlega->rut_pasaporte;
        $usuario->save();
        return back()->with('flash','Datos modificados correctamente');
    }

        public function updateCatastrofe(Request $request)
    {       




            $usuario = Auth::id();
            $datos = User::find($usuario);
            $catastrofe = $request->id_catastrofe;
            


            $fechaInicio = strtotime($request->fecha_inicio);
            $fechaTermino = strtotime($request->fecha_termino);
            if($fechaInicio > $fechaTermino){
                    return back()->with('flash', 'La fecha termino no puede ser menor');
            }
           
            else{

                    $latitud =$request->latitud;
                    $longitud = $request->longitud;
                    $nombreTipo = $request->tipo_catastrofe;
                    $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre],
                    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> $nombreTipo]);
                    $cat->fecha_termino = $request->fecha_termino;
                    $cat->fecha_inicio = $request->fecha_inicio;
                    $cat->nombre_tipo_catastrofe = $request->tipo_catastrofe;
                    $cat->latitud = $request->latitud;
                    $cat->longitud = $request->longitud;

                    $cat->save();
                    return back()->with('flash', 'Catastrofe Actualizada');
            
            }
            

            //$cat = Catastrofe::find($id);
            
            
            
        //return view('/infoCatastrofe', compact('cat', 'datos', 'longitud', 'latitud', 'usuario', 'catastrofe'));
        
    }


    public function uploadCatastrofe(Request $request)
    {
        //
        $id = Auth::id();
        $usuario = \App\User::find($id);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario==2){
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
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Incendio',
             

        ]);
            }
            else if($tipo==2){
               Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Inundacion',
             

        ]);
            }
            else if($tipo==3){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Terremoto',
             

        ]);
            }
            else if($tipo==4){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Tsunami',
             

        ]);
            }
            else if($tipo==5){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Erupción Volcánica',
             

        ]);
            }
            else if($tipo==6){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Aluvión',
             

        ]);
            }
            else if($tipo==7){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' =>'Sequía',
             

        ]);
            }
            else if($tipo==8){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Temporal de lluvia',
             

        ]);
            }
            else if($tipo==9){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Marejadas',
             

        ]);
            }
            else if($tipo==10){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Tormentas de arena',
             

        ]);
            }
            else if($tipo==11){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Temperaturas extremas',
             

        ]);
            }
            else if($tipo==12){
                  Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Heladas',
             

        ]);
            }
            else if($tipo==13){
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Avalanchas de nieve',
             

        ]);
            }
            else if($tipo==14){
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Actividad volcanica',
             

        ]);
            }
            else if($tipo==15){
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => 'Brote de enfermedades',
             

        ]);
            }
            else if($tipo==16){
                            Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
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
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
            'nombre_tipo_catastrofe' => $request->nombre_tipo_catastrofe,
             

        ]);

            }

        return view('verCatastrofe', compact('verCatastrofe'))->with('flash','Catastrofe declarada correctamente');}
        else{

            return back()->with('flash', 'No posee permisos para crear catástrofes');
        }
         
    }

    public function uploadEvento(Request $request)
    {
        //
                $fechaActual = strtotime(date("d-m-Y",time()));
                $fechaInicio = strtotime($request->fecha_inicio_evento);
                $fechaTermino = strtotime($request->fecha_termino_evento);
                if($fechaInicio > $fechaTermino){
                        return back()->with('flash', 'La fecha termino no puede ser menor');
                }
                if($fechaInicio < $fechaActual){
                        return back()->with('flash', 'La fecha inicio no puede ser menor a la fecha actual');
                }
                else{
                  Evento::create([
                        'nombre'=> $request->nombre,
                        'id_medidas_evento' => $request->id_medidas_evento,
                        'direccion'=>$request->direccion,
                         'latitud' =>$request->latitud,
                        'longitud' => $request->longitud,
                        'cantidad_voluntarios'=> $request->cantidad_voluntarios,
                        'voluntarios_actuales' => '0',
                        'monto_recaudado' => '0',
                        'monto_objetivo' => $request->monto_objetivo,
                        'fecha_inicio_evento' => date("m-d-Y", strtotime($request->fecha_inicio_evento)),
                        'verificador' => 0,
                        'fecha_termino_evento' => date("m-d-Y", strtotime($request->fecha_termino_evento)),
                        'descripcion' => $request->descripcion,


                    ]);
                    return back()->with('flash','Evento declarado correctamente');
                }
    
      
    }

    public function uploadVoluntariado(Request $request)
    {
        //
        $id = Auth::id();
        $usuario = \App\User::find($id);

        if($usuario->id_tipo_usuario===1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3)
        {

            $fechaInicio = strtotime($request->fecha_inicio_voluntariado);
            $fechaTermino = strtotime($request->fecha_termino_voluntariado);
            if($fechaInicio > $fechaTermino){
                return back()->with('flash', 'La fecha termino no puede ser menor');
            }
            $fechaActual = strtotime(date("d-m-Y",time()));
            if($fechaInicio < $fechaActual){
                        return back()->with('flash', 'La fecha inicio no puede ser menor a la fecha actual');
            }
            else{
            Voluntariado::create([
                'nombre'=> $request->nombre,
                'id_medidas_voluntariado' => $request->id_medidas_voluntariado,
                'direccion'=>$request->direccion,
                 'latitud' =>$request->latitud,
                'longitud' => $request->longitud,
                'cantidad_voluntarios'=> $request->cantidad_voluntarios,
                'voluntarios_actuales' => '0',
                'fecha_inicio_voluntariado' => date("m-d-Y", strtotime($request->fecha_inicio_voluntariado)),
                'fecha_termino_voluntariado' => date("m-d-Y", strtotime($request->fecha_termino_voluntariado)),
                'descripcion' => $request->descripcion,
                'verificador' => 0,



            ]);
            return back()->with('flash','Voluntariado declarado correctamente');
            }
        }
        else{
            return back()->with('flash', 'No posee permisos para crear usuarios');   
        }
    }

     public function uploadDonacion(Request $request)
    {
        //
       

            $fechaInicio = strtotime($request->fecha_inicio);
            $fechaTermino = strtotime($request->fecha_termino);
            if($fechaInicio > $fechaTermino){
                return back()->with('flash', 'La fecha termino no puede ser menor');
            }
            $fechaActual = strtotime(date("d-m-Y",time()));
            if($fechaInicio < $fechaActual){
                        return back()->with('flash', 'La fecha inicio no puede ser menor a la fecha actual');
            }
            else{

                Donacion::create([
                'nombre'=> $request->nombre,
                'id_medidas_donacion' => $request->id_medidas_donacion,
                'objetivo'=> $request->objetivo,
                'monto_actual' => '0',
                'numero_cuenta' => $request->numero_cuenta,
                'objetivo' => $request->objetivo,
                'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
                'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
                'verificador' => 0,



                ]);
            return back()->with('flash','Donacion declarada correctamente');
        }
    }
        
    
      
    



   public function uploadMedida(Request $request)
    {
        

        $fechaInicio = strtotime($request->fecha_inicio_medida);
        $fechaTermino = strtotime($request->fecha_termino_medida);
        if($fechaInicio > $fechaTermino){
                return back()->with('flash', 'La fecha termino no puede ser menor');
        }
        $fechaActual = strtotime(date("d-m-Y",time()));
        if($fechaInicio < $fechaActual){
                        return back()->with('flash', 'La fecha inicio no puede ser menor a la fecha actual');
        }
        else{
            Medidas::create([
                'id_catastrofe_medidas'=> $request->id_catastrofe_medidas,
                'nombre_medida'=>$request->nombre_medida,
                'id_organizacion_medidas'=>$request->id_organizacion_medidas,
                'id_usuario' => auth()->id(),
                'fecha_inicio_medida'=>date("m-d-Y", strtotime($request->fecha_inicio_medida)),
                'fecha_termino_medida'=>date("m-d-Y", strtotime($request->fecha_termino_medida)),
                'verificador' =>0,
                'descripcion' => $request->descripcion,
                ]);
            return back()->with('flash', 'Medida declarada correctamente');
        }
            
    }

       public function updateMedida(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario != 1){

            return back()->with('flash', 'no posee permisos para realizar esta accion');
        }
        $id = $request->id_medida;
        $fechaInicio = strtotime($request->fecha_inicio_medida);
        $fechaTermino = strtotime($request->fecha_termino_medida);
        if($fechaInicio > $fechaTermino){
                return back()->with('flash', 'La fecha termino no puede ser menor');
        }
        $fechaActual = strtotime(date("d-m-Y",time()));
        if($fechaInicio < $fechaActual){
                        return back()->with('flash', 'La fecha inicio no puede ser menor a la fecha actual');
        }
        else{
            $medida  = Medidas::find($id);
            $medida->nombre_medida=$request->nombre_medida;
            $medida->fecha_inicio_medida=date("m-d-Y", strtotime($request->fecha_inicio_medida));
            $medida->fecha_termino_medida=date("m-d-Y", strtotime($request->fecha_termino_medida));
            $medida->descripcion = $request->descripcion;
            $medida->save();
            return back()->with('flash', 'Medida actualizada correctamente');
        }
    }


    public function uploadCentroAcopio(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){

            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }
        if($request->tipo_bien == 'Otros'){
            CentroDeAcopio::create([
            'nombre' => $request->nombre,
            'id_medidas_acopio'=> $request->id_medidas_acopio,
            'direccion'=>$request->direccion,
            'tipo_bien'=>$request->tipo_bien2,
            'cantidad_objetivo'=>$request->cantidad_objetivo,
            'descripcion' => $request->descripcion,
            'recibe' => 'true',
            'monto_actual' =>'0',
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'monto_total'=> $request->cantidad_objetivo,
            'situacion'=> 'true',
            'verificador' => 0,
            ]);

        }
        else{
        CentroDeAcopio::create([
            'nombre' => $request->nombre,
            'id_medidas_acopio'=> $request->id_medidas_acopio,
            'direccion'=>$request->direccion,
            'tipo_bien'=>$request->tipo_bien,
            'cantidad_objetivo'=>$request->cantidad_objetivo,
            'descripcion' => $request->descripcion,
            'recibe' => 'true',
            'monto_actual' =>'0',
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'monto_total'=> $request->cantidad_objetivo,
            'situacion'=> 'true',
            'verificador' => 0,
            ]);
    }
            return back()->with('flash', 'Centro declarado correctamente');
    }


     public function updateRNV(Request $request)
    {
        $i = auth()->id();
        $id_placeholder = RNVUsers::where('id_usuario', '=', $i)->get();
        if(count($id_placeholder)==0){
            RNVUsers::create([
                'id_usuario'=> $request->id_usuario_activo,
                'id_rnv' => '1',
                'verificador' => 0,
                ]);
                return back()->with('flash', 'Su solicitud fue enviada correctamente');

        }
        else{

                return back()->with('flash', 'Ya se encuentra inscrito en el RNV');

        }
    }

    public function viewCatastrofe()
    {   
        $id = Auth::id();
        $usuario = \App\User::find($id);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3){
            
        return view('catastrofe.catastrofe', compact('catastrofe'));}
        else{

            return back()->with('flash', 'No posee permisos para ingresar a esta página');
        }
    }
        

      public function viewAgregarCentroAcopio($id)
    {    
        $idU = Auth::id();
        $usuario = \App\User::find($idU);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3){ 
            $id_medidas_acopio = $id;
            $medida = Medidas::find($id);
            $nombre = $medida->nombre_medida;

       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('CentroDeAcopio.centroDeAcopio', compact('id_medidas_acopio'));
            
        }
        else{

            return back()->with('flash', 'No posee permisos para crear usuarios');
        }
       
    }

     public function viewAgregarEvento($id)
    {   
        $idU = Auth::id();
        $usuario = \App\User::find($idU);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario === 2 or $usuario->id_tipo_usuario === 3){
             $id_medidas_evento = $id;
        $medida = Medidas::find($id);
        $nombre = $medida->nombre_medida;

       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('Evento.evento', compact('id_medidas_evento'));
            
        }
        else{

            return back()->with('flash', 'No posee permisos para crear usuarios');
        }
       
    }

     public function viewAgregarVoluntariado($id)
    {   

        $idU = Auth::id();
        $usuario = \App\User::find($idU);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario === 2 or $usuario->id_tipo_usuario === 3){
            $id_medidas_voluntariado = $id;
            $medida = Medidas::find($id);
            $nombre = $medida->nombre_medida;

            // $catastrofe = Catastrofe::catastrofe();
            #$usuario = \App\User::find($user->id);
            return view('Voluntariado.viewVoluntariado', compact('id_medidas_voluntariado'));
        }
        else{
             return back()->with('flash', 'No posee los permisos para ingresar');
        }
    }


    

         public function viewAgregarDonacion($id)
    {   
        $idU = Auth::id();
        $usuario = \App\User::find($idU);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario ===2 or $usuario->id_tipo_usuario === 3){
             $id_medidas_donacion = $id;
        $medida = Medidas::find($id);
        $nombre = $medida->nombre_medida;

       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('Donaciones.donaciones', compact('id_medidas_donacion', 'nombre'));
            
        }
        else{

            return back()->with('flash', 'No posee permisos para realizar esta accion');
        }
       
    }
          public function viewModificarDonacion($id)
    {   
        $idU = Auth::id();
        $usuario = \App\User::find($idU);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario ===2 or $usuario->id_tipo_usuario === 3){
             $id_medidas_donacion = $id;
        $donacion = Donacion::find($id);

       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('Donaciones.modificarDonaciones', compact('donacion'));
            
        }
        else{

            return back()->with('flash', 'No posee permisos para crear usuarios');
        }
       
    }

    public function viewMedida($id)
    {   
        $idU = Auth::id();
        $usuario = \App\User::find($idU);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3){
             $catastrofe = $id;
            $cat = Catastrofe::find($id);
            $longitud= $cat->longitud;
            $latitud = $cat->latitud;
            //$organizaciones = DB::table('users')->get();
            $organizaciones =  DB::table('users')->where('id_tipo_usuario', '=', 3)->get();

            $nombre = 'Teleton';
            return view('medida.medida', compact('medida', 'organizaciones', 'nombre', 'catastrofe', 'longitud','latitud', 'cat'));
            
        }
        else{

            return back()->with('flash', 'No posee permisos para crear usuarios');
        }
        $catastrofe = $id;
        $cat = Catastrofe::find($id);
        $longitud= $cat->longitud;
        $latitud = $cat->latitud;
        //$organizaciones = DB::table('users')->get();
        $organizaciones =  DB::table('users')->where('id_tipo_usuario', '=', 3)->get();

        $nombre = 'Teleton';
        return view('medida.medida', compact('medida', 'organizaciones', 'nombre', 'catastrofe', 'longitud','latitud', 'cat'));
    }

     public function viewMedida2()

    {   

        //$catastrofe = Catastrofe::get();
        $organizaciones = DB::table('Organizacion')->get();
        $nombre = 'Teleton';

        return view('medida.medida', compact('medida', 'organizaciones', 'nombre'));
    }

    public function viewVerMedida()
    {   
        $id = Auth::id();
        $usuario = \App\User::find($id);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3 or $usuario->id_tipo_usuario==4){
                   // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);

        $medidas = DB::table('Medidas')->where('verificador', 1)->get();
        return view('verMedida.verMedida', compact('medidas', "usuario"));
        }
        else{
            return back()->with('flash', 'No posee permisos para crear usuarios');
        }

    }



    public function viewVerMedidasCatastrofe($id)
    {   
        $idU = Auth::id();
        $usuario = \App\User::find($idU);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3 or $usuario->id_tipo_usuario===4){
                   // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $medidas = DB::table('Medidas')->where('id_catastrofe_medidas', '=', $id)->get();
        return view('verMedida.verMedida', compact('medidas', 'usuario'));
        }
        else{

            return back()->with('flash', 'No posee permisos para acceder a esta página');
        }

    }


     public function viewRNV()
        {   
           // $catastrofe = Catastrofe::catastrofe();
            #$usuario = \App\User::find($user->id);
            $id_usuario_activo = auth()->id();
            $id_u_r = DB::table('RNVUsers')->where('verificador', 1)->pluck('id_usuario');
            $usuarios = \App\User::find($id_u_r);
            return view('RNV.RNV', compact('id_usuario_activo', 'usuarios'));
        }

      


        public function viewVerOrganizaciones()
    {   
        $id = Auth::id();
        $usuario = \App\User::find($id);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3 or $usuario->id_tipo_usuario===4){
                   // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $organizaciones =  DB::table('users')->where('id_tipo_usuario', '=', 3)->get();
        return view('verOrganizaciones.verOrganizaciones', compact('organizaciones'));
        }
        else{

            return back()->with('flash', 'No posee permisos para ingresar a esta página');
        }

    }

    public function viewVerPerfil()
    {   
       $usuario = Auth::user();
       if($usuario->id_tipo_usuario === 5)
       {
            return back()->with('flash', 'No posee permisos para ingresar a esta página');
       }
       $datos = $usuario;

       return view('verPerfil.verPerfil', compact('datos'));
    }



    public function viewagregarCatastrofe()
    {   
        $id = Auth::id();
        $usuario = \App\User::find($id);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3 or $usuario->id_tipo_usuario===4){
                   // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('agregarCatastrofe.agregarCatastrofe', compact('agregarCatastrofe'));
        }
        else{

            return back()->with('flash', 'No posee permisos para ingresar a esta página');
        }

    }

    public function uploadagregarCatastrofe(Request $loQueLlega)
    {
        $usuario = Auth::user();
        #$usuario = \App\User::find($user->id);
        $usuario->name = $loQueLlega->name;
        $usuario->last_name = $loQueLlega->last_name;
        $usuario->email = $loQueLlega->email;
        $usuario->num_tarjeta = $loQueLlega->num_tarjeta;
        $usuario->save();
        return redirect()->route('home');
    }


       public function viewVerCatastrofe()
    {   
        $id = Auth::id();
        $usuario = \App\User::find($id);
        if($usuario->id_tipo_usuario==1 or $usuario->id_tipo_usuario===2 or $usuario->id_tipo_usuario===3 or $usuario->id_tipo_usuario===4){
                   // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $catastrofes = DB::table('Catastrofe')->get();
        $usuario = Auth::id();
       $datos = \App\User::find($usuario);
        return view('verCatastrofe.vercatastrofe', compact('catastrofes', 'datos'));
        }
        else{


            return back()->with('flash', 'No posee permisos para ingresar a esta página');
        }

    }


    public function uploadVerCatastrofe(Request $loQueLlega)
    {
        $usuario = Auth::user();
        #$usuario = \App\User::find($user->id);
        //$usuario->name = $loQueLlega->name;
        //$usuario->last_name = $loQueLlega->last_name;
        //$usuario->email = $loQueLlega->email;
        //$usuario->num_tarjeta = $loQueLlega->num_tarjeta;
        //$usuario->save();
        return redirect()->route('home');
    }



    public function viewContacto()
    {   

        return view('Contacto.contacto', compact('contacto'));
    }

    public function viewHome2()
    {   
        return view('Home.home2', compact('home2'));
    }

      public function viewPrueba()
    {   
        return view('prueba', compact('contacto'));
    }


    public function viewQuienesSomos()
    {   
        return view('Contacto.quienessomos', compact('quienessomos'));
    }

    public function viewinfoCatastrofe($id)
    {
        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        if($datos->id_tipo_usuario==1 or $datos->id_tipo_usuario===2 or $datos->id_tipo_usuario===3 or $datos->id_tipo_usuario===4){
            $catastrofe = $id;
            $cat = Catastrofe::find($id);
            $longitud= $cat->longitud;
            $latitud = $cat->latitud;

        return view('infoCatastrofe.infoCatastrofe', compact('datos', 'cat', 'nombre', 'catastrofe', 'longitud', 'latitud'));
        }
        else{

            return back()->with('flash', 'No posee permisos para ingresar a esta página');
        }

    }
    

    public function updateEvento2(Request $request)
    {
        $usuario = Auth::id();
        $id_placeholder = RNVUsers::where('id_usuario', '=', $usuario)->get();
        $datos = \App\User::find($usuario);
        $evento = Evento::find($request->id_evento);
        $actividad = DB::table('Actividad')->where('id_actividad', '=', $request->id_actividad)->get();
        $actUser = DB::table('ActividadUsers')->where('id_evento', '=', $request->id_evento)->where('id_user','=',$usuario)->get();
        if(count($id_placeholder)>0 and count($actUser)==0){
                $evento->voluntarios_actuales = $evento->voluntarios_actuales +1;
                $evento->save();
                ActividadUsers::create([
            'id_actividad' => $request->id_actividad,
            'id_user' => $usuario,
            'id_evento' => $request->id_evento,
            ]);  
                return back()->with('flash', 'Inscrito al evento correctamente');

        }
        else if((count($id_placeholder)==0)){

                return back()->with('flash', 'Debe inscribirse previamente al RNV');

        }
        //$donacion = \App\Donacion::find($usuario);
        return back()->with('flash', 'ya se encuentra participando en este evento');
    }

    public function updateVoluntariado2(Request $request)
    {
        $usuario = Auth::id();
        $id_placeholder = RNVUsers::where('id_usuario', '=', $usuario)->get();
        $datos = \App\User::find($usuario);
        $habilidades_user = HabilidadesUser::where('id_user', $usuario)->pluck('tipo_habilidad')->toArray();
        $voluntariado = Voluntariado::find($request->id_voluntariado);
        $trabajo = DB::table('Trabajo')->where('id_trabajo', '=', $request->id_trabajo)->where('trabajo_id_voluntariado', $request->id_voluntariado)->pluck('nombre_trabajo')->first();
        $actUser = DB::table('VoluntariadoUser')->where('id_voluntariado', '=', $request->id_voluntariado)->where('id_user','=',$usuario)->get();
        if(count($id_placeholder)<1){
            return back()->with('flash','debe inscribirse previamente al RNV');
        }
        else{


        }
        if(count($id_placeholder)>0 and count($actUser)==0){
            if(in_array((string)$trabajo, $habilidades_user)){
                  $voluntariado->voluntarios_actuales = $voluntariado->voluntarios_actuales +1;
                $voluntariado->save();
                VoluntariadoUser::create([
            'id_trabajo' => $request->id_trabajo,
            'id_user' => $usuario,
            'id_voluntariado' => $request->id_voluntariado,
            ]);  
            }
            else{
                return back()->with('flash', 'no posee las calificaciones necesarias');


            }
              
                return back()->with('flash', 'Inscrito al voluntariado correctamente');

        }
        //$donacion = \App\Donacion::find($usuario);
        return back()->with('flash', 'ya se encuentra participando en este voluntariado');
    }

public function updateEvento(Request $request)
    {
        //$donacion = \App\Donacion::find($usuario);
        $evento = Evento::find($request->id_evento);
        if($request->cantidad_participantes>=$evento->cantidad_voluntarios){
            return back()->with('flash', 'cantidad mayor de voluntarios');

        }
        if($request->tipo_actividad == 'Otros'){
             $actividad_placeholder = Actividad::where('nombre_actividad', $request->nombre_actividad)->where('actividad_id_evento', $request->id_evento)->get();
            if(count($actividad_placeholder)>0){
                return back()->with('flash', 'actividad ya se encuentra inscrita');
            }
         Actividad::create([
            'nombre_actividad' => $request->nombre_actividad,
            'tipo' => $request->nombre_actividad,
            'participantes_actividad' => $request->cantidad_participantes,
            'actividad_id_evento' =>$request->id_evento,
            ]);   
        }
        else{
             $actividad_placeholder = Actividad::where('nombre_actividad', $request->tipo_actividad)->where('actividad_id_evento', $request->id_evento)->get();
            if(count($actividad_placeholder)>0){
                return back()->with('flash', 'actividad ya se encuentra inscrita');
            }
            Actividad::create([
            'nombre_actividad' => $request->tipo_actividad,
            'tipo' => $request->tipo_actividad,
            'participantes_actividad' => $request->cantidad_participantes,
            'actividad_id_evento' =>$request->id_evento,
            ]);
        }
        return back()->with('flash', 'actividad actualizada correctamente');
    }
public function updateVoluntariado(Request $request)
    {
        //$donacion = \App\Donacion::find($usuario);
        $voluntariado = Voluntariado::find($request->id_voluntariado);
        if($request->cantidad_participantes>=$voluntariado->cantidad_voluntarios){
            return back()->with('flash', 'cantidad mayor de voluntarios');

        }
        if($request->tipo_trabajo == 'Otros'){
         Trabajo::create([
            'nombre_trabajo' => $request->nombre_trabajo,
            'tipo' => $request->nombre_trabajo,
            'participantes_trabajo' => $request->cantidad_participantes,
            'trabajo_id_voluntariado' =>$request->id_voluntariado,
            ]);   
        }
        else{
            Trabajo::create([
            'nombre_trabajo' => $request->tipo_trabajo,
            'tipo' => $request->tipo_trabajo,
            'participantes_trabajo' => $request->cantidad_participantes,
            'trabajo_id_voluntariado' =>$request->id_voluntariado,
            ]);
        }
        return back()->with('flash', 'Trabajo actualizado correctamente');
    }

public function donar(Request $request)
    {
        $id = Auth::id();
        $usuario = \App\User::find($id);
        $id_d = $request->id_donacion;
        $donacion = \App\Donacion::find($id_d);
        //$donacion = \App\Donacion::find($usuario);
        $donacion->monto_actual = $donacion->monto_actual + $request->monto;
        $donacion->save();
          Donantes::create([
            'id_usuario' => Auth::id(),
            'id_donacion_donante'=> $request->id_donacion,
            'monto'=>$request->monto,
            ]);
        return back()->with('flash', 'Donacion realizada correctamente');
    }



  public function viewVerDonaciones($id)
    {
        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        if($datos->id_tipo_usuario === 1 or $datos->id_tipo_usuario===2 or $datos->id_tipo_usuario===3 or $datos->id_tipo_usuario===4)
        {
            $donacion = \App\Donacion::find($id);

        return view('verDonaciones.verDonaciones', compact('donacion', 'datos'));
        }
        else
        {
            return back()->with('flash', 'Donacion realizada correctamente');
        }
    }

    public function viewDonarAcopio($id)
    {

        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        if($datos->id_tipo_usuario==1 or $datos->id_tipo_usuario===2 or $datos->id_tipo_usuario===3 or $datos->id_tipo_usuario===4){
            $acopio = \App\CentroDeAcopio::find($id);
        $latitud = $acopio->latitud;
        $longitud = $acopio->longitud;
        return view('DonarCentroAcopio.donarAcopio', compact('acopio', 'datos', 'latitud', 'longitud'));
        }
        else{

            return back()->with('flash', 'No posee permisos para ingresar a esta página');
        }
        
    }

    public function viewInscribirseEvento($id)
    {
        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        if($datos->id_tipo_usuario===5)
        {
            return back()->with('flash', 'No posee permisos para ingresar a esta página');
        }
        $evento = \App\Evento::find($id);
        $latitud = $evento->latitud;
        $longitud = $evento->longitud;
        $actividades = DB::table('Actividad')->where('actividad_id_evento', '=', $id)->get();

        return view('Evento.inscribirseEvento', compact('evento', 'datos', 'latitud', 'longitud', 'actividades'));
    }

      public function viewInscribirseVoluntariado($id)
    {
        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        $voluntariado = \App\Voluntariado::find($id);
        $latitud = $voluntariado->latitud;
        $longitud = $voluntariado->longitud;
        $trabajos = DB::table('Trabajo')->where('trabajo_id_voluntariado', '=', $id)->get();

        return view('Voluntariado.inscribirseVoluntariado', compact('voluntariado', 'datos', 'latitud', 'longitud', 'trabajos'));
    }

      public function viewUpdateVoluntariado($id)
    {
        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        $voluntariado = \App\Voluntariado::find($id);
        $latitud = $voluntariado->latitud;
        $longitud = $voluntariado->longitud;
        $trabajos = DB::table('Trabajo')->where('trabajo_id_voluntariado', '=', $id)->get();
        return view('Voluntariado.verVoluntariado', compact('voluntariado', 'datos', 'latitud', 'longitud', 'trabajos'));
    }

      public function viewAgregarActividadEvento($id)
    {

        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        if($datos->id_tipo_usuario===1 or $datos->id_tipo_usuario===2 or $datos->id_tipo_usuario===3)
        {
            $evento = \App\Evento::find($id);
            $latitud = $evento->latitud;
            $longitud = $evento->longitud;
            $actividades = DB::table('Actividad')->where('actividad_id_evento', '=', $id)->get();
            return view('Evento.agregarActividadEvento', compact('evento', 'datos', 'latitud', 'longitud', 'actividades'));
        }
        else
        {
            return back()->with('No posee permisos para ingresar a esta página');
        }
        
    }

        public function viewAgregarTrabajoVoluntariado($id)
    {
        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        $voluntariado = \App\Voluntariado::find($id);
        $latitud = $voluntariado->latitud;
        $longitud = $voluntariado->longitud;
        $trabajos = DB::table('Trabajo')->where('trabajo_id_voluntariado', '=', $id)->get();
        return view('Voluntariado.agregarTrabajoVoluntariado', compact('voluntariado', 'datos', 'latitud', 'longitud', 'trabajos'));
    }
      public function DonarAcopio(Request $request)
    {
        $id = $request->id_acopio;
        $acopio = \App\CentroDeAcopio::find($id);
        $acopio->monto_actual = $acopio->monto_actual + $request->monto_donacion;
        if($acopio->monto_actual >= $acopio->cantidad_objetivo){
            $acopio->recibe = 'false';
        }
        $acopio->save();
        return back()->with('flash', 'Donacion exitosa!');
    }


    public function viewinfoMedida($id)
    {
        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        if($datos->id_tipo_usuario===5)
        {
            return back()->with('No posee permisos para ingresar a esta página');
        }
        $medida = Medidas::find($id);
        $centroAcop =  DB::table('CentroDeAcopio')->where('id_medidas_acopio', '=', $id)->where('recibe', '=', 'true')->where('verificador', 1)->get();
        $eventos = DB::table('Evento')->where('id_medidas_evento', '=', $id)->whereRaw('voluntarios_actuales < cantidad_voluntarios')->where('verificador', 1)->get();
        $org = DB::table('users')->where('id', '=', $medida->id_organizacion_medidas)->get();
        $organizaciones = DB::table('users')->where('id_tipo_usuario', '=', 3)->get();
        $catastrofe = $medida->id_catastrofe_medidas;
        $voluntariados = DB::table('Voluntariado')->where('id_medidas_voluntariado', '=', $id)->whereRaw('voluntarios_actuales < cantidad_voluntarios')->where('verificador', 1)->get();
        $donaciones = DB::table('Donacion')->where('id_medidas_donacion', '=', $id)->whereRaw('monto_actual < objetivo')->where('verificador', 1)->get();

        return view('infoMedida.infoMedida', compact('datos', 'medida', 'eventos', 'centroAcop', 'organizaciones', 'catastrofe', 'donaciones', 'org', 'voluntariados'));
    }

     public function createUser(Request $data)
    {
        User::create([
            'name' => $data->name,
           'last_name'=>$data->last_name,
            'email' => $data->email,
            'password' => bcrypt($data->password),
            'id_tipo_usuario' => $data->id_tipo_usuario,
            'rut_pasaporte' => $data->rut_pasaporte,
            
        ]);
        return back()->with('flash', 'Se creo un usuario correctamente');
    }

    public function viewcreateUser()
    {
        $id = Auth::id();
        $usuario = \App\User::find($id);
        if($usuario->id_tipo_usuario==1){
        return view('crearUsuarios', compact('usuario'));}
        else{

            return back()->with('flash', 'No posee permisos para crear usuarios');
        }
    }

     public function viewRegistroRNV()
    {
        $id = Auth::id();
        $usuario = \App\User::find($id);
        $habilidades_user = DB::table('HabilidadesUser')->where('id_user', '=', $id)->pluck('tipo_habilidad');
        return view('RNV.registroRNV', compact('usuario','habilidades_user'));
    }


     public function viewInscribirseRNV()
    {
        $id = Auth::id();
        $usuario = \App\User::find($id);
        $rnv = \App\RNV::all();
        return view('registroRNV', compact('usuario', 'rnv'));

    }

        public function viewAgregarHabilidad()
    {
        $id = Auth::id();
        $usuario = \App\User::find($id);
        $habilidades_user = DB::table('HabilidadesUser')->where('id_user', $id)->pluck('tipo_habilidad')->toArray();
        $habilidades = Habilidades::all();
        return view('agregarHabilidad', compact('usuario', 'habilidades_user', 'habilidades'));

    }
           public function updateHabilidad(Request $request)
    {
            $id = Auth::id();
            HabilidadesUser::Create([
            'id_user' => $id,
            'tipo_habilidad' => $request->tipo_habilidad,
            ]);

        return back()->with('flash', 'uwu');

    }

          public function viewSolicitudes()
        {   


                       // $catastrofe = Catastrofe::catastrofe();
            #$usuario = \App\User::find($user->id);
            $id_usuario_activo = auth()->id();
            $u = User::find($id_usuario_activo);
            if($u->id_tipo_usuario == 4 or $u->id_tipo_usuario == 5 or $u->id_tipo_usuario == 3){
                return back()->with('flash', 'no posee permisos para acceder a esta vista');

            }


            $RNVS = DB::table('RNVUsers')->where('verificador', 0)->get();
            $rnvs2 = DB::table('RNVUsers')->where('verificador', 0)->pluck('id_usuario');
            $usuarios_rnv = User::find($rnvs2);
            $eventos = DB::table('Evento')->where('verificador', 0)->get();
            $medidas = DB::table('Medidas')->where('verificador', 0)->get();
            $donaciones = DB::table('Donacion')->where('verificador', 0)->get();
            $centros = DB::table('CentroDeAcopio')->where('verificador', 0)->get();
            $voluntariados = DB::table('Voluntariado')->where('verificador', 0)->get();
            return view('Solicitudes.aceptarSolicitudes', compact('id_usuario_activo', 'usuarios_rnv', 'centros', 'voluntariados', 'eventos', 'medidas', 'donaciones', 'RNVS'));
        }

    public function solicitudRNV(Request $request)
        {
            $u = Auth::user();
            if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
                return back()->with('flash', 'no posee los permisos para realizar esta accion');

            }
            $id = $request->id_usuario;
            $rnvuser = RNVUsers::where('id_usuario', $id)->first();
            $rnvuser->verificador = $request->verificador;
            $rnvuser->id_usuario = $request->id_usuario;
            $rnvuser->save();

        return back()->with('flash', 'Solicitud aprobada');

        }

      public function solicitudMedida(Request $request)
        {
            $u = Auth::user();
            if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
                return back()->with('flash', 'no posee los permisos para realizar esta accion');

            }
            $id = $request->id_medidas;
            $medida = Medidas::where('id_medidas', $id)->first();
            $medida->verificador = $request->verificador;
            $medida->save();

        return back()->with('flash', 'Solicitud aprobada');

        }


      public function solicitudAcopio(Request $request)
        {
            $u = Auth::user();
            if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
                return back()->with('flash', 'no posee los permisos para realizar esta accion');

            }
            $id = $request->id_acopio;
            $acopio = CentroDeAcopio::where('id_acopio', $id)->first();
            $acopio->verificador = $request->verificador;
            $texto = '#Centro_de_acopio_' . $acopio->nombre . ' ';
            $texto3 = $texto . ' '. $acopio->descripcion;
            $texto4 = $texto3 . ' '. $acopio->direccion;
            $texto5 = $texto4 . ' Tipo de bien requerido: '. $acopio->tipo_bien;  
            $texto6 = $texto5 . ' Cantidad objetivo: '. $acopio->cantidad_objetivo;
            Twitter::postTweet(array('status' => $texto6, 'format' => 'json'));
            $acopio->save();

        return back()->with('flash', 'Solicitud aprobada');

        }

          public function solicitudVoluntariado(Request $request)
        {
            $u = Auth::user();
            if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
                return back()->with('flash', 'no posee los permisos para realizar esta accion');

            }
            $id = $request->id_voluntariado;
            $voluntariado = Voluntariado::where('id_voluntariado', $id)->first();
            $voluntariado->verificador = $request->verificador;
            $voluntariado->save();

        return back()->with('flash', 'Solicitud aprobada');

        }
     public function solicitudEventos(Request $request)
        {
            $u = Auth::user();
            if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
                return back()->with('flash', 'no posee los permisos para realizar esta accion');

            }
            $id = $request->id_evento;
            $evento = Evento::where('id_evento', $id)->first();
            $evento->verificador = $request->verificador;
            $evento->save();

        return back()->with('flash', 'Solicitud aprobada');

        }

    public function solicitudDonacion(Request $request)
        {
            $u = Auth::user();
            if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
                return back()->with('flash', 'no posee los permisos para realizar esta accion');

            }
            $id = $request->id_donacion;
            $donacion = Donacion::where('id_donacion', $id)->first();
            $donacion->verificador = $request->verificador;
            $donacion->save();

        return back()->with('flash', 'Solicitud aprobada');

        }

         public function viewverSolicitud($id)
    {
        $usuario = \App\User::find($id);
        $rnv = \App\RNV::all();
         $habilidades_user = DB::table('HabilidadesUser')->where('id_user', '=', $id)->pluck('tipo_habilidad');
        return view('Solicitudes.verSolicitud', compact('usuario', 'rnv', 'habilidades_user'));

    }
        public function viewverEvento($id)
    {
        $datos = Auth::user();
        $evento = \App\Evento::find($id);
        $latitud = $evento->latitud;
        $longitud = $evento->longitud;
        return view('Evento.verEvento', compact('evento', 'latitud', 'longitud', 'datos'));

    }
          public function viewverAcopio($id)
    {
        $datos = Auth::user();
        $acopio = \App\CentroDeAcopio::find($id);
        $latitud = $acopio->latitud;
        $longitud = $acopio->longitud;
        return view('CentroDeAcopio.verCentroAcopio', compact('acopio', 'latitud', 'longitud', 'datos'));

    }

    public function updateEventoFinal(Request $request)
    {

        $u = Auth::user();
            if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
                return back()->with('flash', 'no posee los permisos para realizar esta accion');

            }
        $fechaActual = strtotime(date("d-m-Y",time()));
                $fechaInicio = strtotime($request->fecha_inicio_evento);
                $fechaTermino = strtotime($request->fecha_termino_evento);
                if($fechaInicio > $fechaTermino){
                        return back()->with('flash', 'La fecha termino no puede ser menor');
                }
                if($fechaInicio < $fechaActual){
                        return back()->with('flash', 'La fecha inicio no puede ser menor a la fecha actual');
                }
        //$donacion = \App\Donacion::find($usuario);
        $evento = Evento::find($request->id_evento);
        $evento->nombre = $request->nombre;
        $evento->cantidad_voluntarios = $request->voluntarios_restantes;
        $evento->monto_recaudado = $request->monto_recaudado;
        $evento->monto_objetivo = $request->monto_objetivo;
        $evento->fecha_inicio_evento = date("m-d-Y", strtotime($request->fecha_inicio_evento));
        $evento->fecha_termino_evento = date("m-d-Y", strtotime($request->fecha_inicio_evento));
        $evento->save();
        if($request->cantidad_participantes>=$evento->cantidad_voluntarios){
            return back()->with('flash', 'cantidad mayor de voluntarios');

        }
        if($request->tipo_actividad == 'Otros'){
            $actividad_placeholder = Actividad::where('nombre_actividad', $request->nombre_actividad)->where('actividad_id_evento', $request->id_evento)->get();
            if(count($actividad_placeholder)>0){
                return back()->with('flash', 'actividad ya se encuentra inscrita');
            }
         Actividad::create([
            'nombre_actividad' => $request->nombre_actividad,
            'tipo' => $request->nombre_actividad,
            'participantes_actividad' => $request->cantidad_participantes,
            'actividad_id_evento' =>$request->id_evento,
            ]);   
        }
        else{
               $actividad_placeholder = Actividad::where('nombre_actividad', $request->tipo_actividad)->where('actividad_id_evento', $request->id_evento)->get();
            if(count($actividad_placeholder)>0){
                return back()->with('flash', 'actividad ya se encuentra inscrita');
            }
            Actividad::create([
            'nombre_actividad' => $request->tipo_actividad,
            'tipo' => $request->tipo_actividad,
            'participantes_actividad' => $request->cantidad_participantes,
            'actividad_id_evento' =>$request->id_evento,
            ]);
        }
        return back()->with('flash', 'Evento modificado correctamente');
    }

    public function updateCentroAcopio(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){

            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }
        $acopio = CentroDeAcopio::find($request->id_acopio);
        if($request->tipo_bien == 'Otros'){
            $acopio->nombre = $request->nombre;
            $acopio->direccion=$request->direccion;
            $acopio->tipo_bien=$request->tipo_bien2;
            $acopio->cantidad_objetivo=$request->cantidad_objetivo;
             $acopio->latitud =$request->latitud;
            $acopio->longitud = $request->longitud;
            $acopio->monto_total= $request->cantidad_objetivo;
            $acopio->save();

        }
        else{
         $acopio->nombre = $request->nombre;
            $acopio->direccion=$request->direccion;
            $acopio->tipo_bien=$request->tipo_bien;
            $acopio->cantidad_objetivo=$request->cantidad_objetivo;
             $acopio->latitud =$request->latitud;
            $acopio->longitud = $request->longitud;
            $acopio->monto_total= $request->cantidad_objetivo;
            $acopio->save();
    }
            return back()->with('flash', 'Centro actualizado correctamente');
    }

    public function updateVoluntariadoFINAL(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario ==4 or $u->id_tipo_usuario ==5){

            return back()->with('flash', 'no posee los permisos necesarios para realizar esta accion');
        }
        //$donacion = \App\Donacion::find($usuario);
        $voluntariado = Voluntariado::find($request->id_voluntariado);
        $voluntariado->descripcion = $request->descripcion;
        $voluntariado->cantidad_voluntarios = $request->cantidad_voluntarios;
        $voluntariado->nombre = $request->nombre;
        if($request->cantidad_participantes>=$voluntariado->cantidad_voluntarios){
            return back()->with('flash', 'cantidad mayor de voluntarios');

        }

        if($request->tipo_trabajo == 'Otros'){
        $trabajos_validos = Trabajo::where('trabajo_id_voluntariado', $request->id_voluntariado)->where('nombre_trabajo', $request->nombre_trabajo)->get();
        if(count($trabajos_validos )>0){
            return back()->with('flash', 'trabajo ya se encuentra en voluntariado');
        }
         Trabajo::create([
            'nombre_trabajo' => $request->nombre_trabajo,
            'tipo' => $request->nombre_trabajo,
            'participantes_trabajo' => $request->cantidad_participantes,
            'trabajo_id_voluntariado' =>$request->id_voluntariado,
            ]);   
        }
        else{
            $trabajos_validos = Trabajo::where('trabajo_id_voluntariado', $request->id_voluntariado)->where('nombre_trabajo', $request->tipo_trabajo)->get();
            if(count($trabajos_validos )>0){
                return back()->with('flash', 'trabajo ya se encuentra en voluntariado');
            }
            Trabajo::create([
            'nombre_trabajo' => $request->tipo_trabajo,
            'tipo' => $request->tipo_trabajo,
            'participantes_trabajo' => $request->cantidad_participantes,
            'trabajo_id_voluntariado' =>$request->id_voluntariado,
            ]);
        }
        $voluntariado->save();
        return back()->with('flash', 'Voluntariado actualizado correctamente');
    }


    public function updateDonacion(Request $request)
    {
        //
            $fechaInicio = strtotime($request->fecha_inicio);
            $fechaTermino = strtotime($request->fecha_termino);
            if($fechaInicio > $fechaTermino){
                return back()->with('flash', 'La fecha termino no puede ser menor');
            }
            $fechaActual = strtotime(date("d-m-Y",time()));
            if($fechaInicio < $fechaActual){
                        return back()->with('flash', 'La fecha inicio no puede ser menor a la fecha actual');
            }
            else{
                $donacion = Donacion::find($request->id_donacion);
                
                $donacion->nombre= $request->nombre;
                $donacion->objetivo= $request->objetivo;
                $donacion->monto_actual = '0';
                $donacion->numero_cuenta = $request->numero_cuenta;
                $donacion->objetivo = $request->objetivo;
                $donacion->fecha_inicio = date("m-d-Y", strtotime($request->fecha_inicio));
                $donacion->fecha_termino = date("m-d-Y", strtotime($request->fecha_termino));
                $donacion->save();



            return back()->with('flash','Donacion modificada correctamente');
        }
    }


    //metodos borrar

    public function borrarEvento(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }
        $id = $request->id_evento;
        $evento = Evento::find($id);
        $evento->delete();
        return back()->with('flash', 'Evento eliminado correctamente');
    }

    public function borrarCentroAcopio(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }
        $id = $request->id_acopio;
        $centroAcopio = CentroDeAcopio::find($id);
        $centroAcopio->delete();
        return back()->with('flash', 'Centro de acopio eliminado correctametne');
    }

    public function borrarVoluntariado(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }
        $id = $request->id_voluntariado;
        $voluntariado = Voluntariado::find($id);
        $voluntariado->delete();
        return back()->with('flash', 'Voluntariado eliminado correctametne');
    }

    public function borrarDonacion(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }
        $id = $request->id_donacion;
        $donacion = Donacion::find($id);
        $donacion->delete();
        return back()->with('flash', 'Donacion eliminado correctametne');
    }

    public function borrarMedida(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }

        $id = $request->id_medidas;
        $medida = Medidas::find($id);
        $ids_evento = Evento::where('id_medidas_evento', '=', $id)->get();
        $ids_acopios = CentroDeAcopio::where('id_medidas_acopio', '=', $id)->get();
        $ids_donaciones = Donacion::where('id_medidas_donacion', '=', $id)->get();
        $ids_voluntariados = Voluntariado::where('id_medidas_voluntariado', '=', $id)->get();
        foreach ($ids_evento as $evento) {
            $e = $evento->id_evento;
            $ev = Evento::find($e);
            $ev->delete();
        }
        foreach ($ids_acopios as $acopio) {
            $a = $acopio->id_acopio;
            $ce = CentroDeAcopio::find($a);
            $ce->delete();
        }
        foreach ($ids_donaciones as $donacion) {
            $d = $donacion->id_donacion;
            $do = Donacion::find($d);
            $do->delete();
        }
        foreach ($ids_voluntariados as $voluntariado) {
            $v = $voluntariado->id_voluntariado;
            $vo = Voluntariado::find($v);
            $vo->delete();
        }
        $medida->delete();
        return back()->with('flash', 'Medida eliminada correctametne');
    }

    public function borrarCatastrofe(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }

        $idC = $request->id_catastrofe;
        $catastrofe = Catastrofe::find($idC);
        $medidas = Medidas::where('id_catastrofe_medidas', '=', $idC);
        foreach ($medidas as $medida) {
            $id = $medida->id_medidas;
            $ids_evento = Evento::where('id_medidas_evento', '=', $id)->get();
            $ids_acopios = CentroDeAcopio::where('id_medidas_acopio', '=', $id)->get();
            $ids_donaciones = Donacion::where('id_medidas_donacion', '=', $id)->get();
            $ids_voluntariados = Voluntariado::where('id_medidas_voluntariado', '=', $id)->get();
            foreach ($ids_evento as $evento) {
                $e = $evento->id_evento;
                $ev = Evento::find($e);
                $ev->delete();
            }
            foreach ($ids_acopios as $acopio) {
                $a = $acopio->id_acopio;
                $ce = CentroDeAcopio::find($a);
                $ce->delete();
            }
            foreach ($ids_donaciones as $donacion) {
                $d = $donacion->id_donacion;
                $do = Donacion::find($d);
                $do->delete();
            }
            foreach ($ids_voluntariados as $voluntariado) {
                $v = $voluntariado->id_voluntariado;
                $vo = Voluntariado::find($v);
                $vo->delete();
            }
        }
        $catastrofe->delete();
        return back()->with('flash', 'Catastrofe eliminada correctametne');
    }


    public function bloquearUsuario(Request $request)
    {
        $u = Auth::user();
        if($u->id_tipo_usuario==2 or $u->id_tipo_usuario==3 or $u->id_tipo_usuario==4 or $u->id_tipo_usuario==5){
            return back()->with('flash', 'no posee los permisos para realizar esta accion');
        }
        $idUB = $request->id_user;
        $us = user::find($idUB);
        $us->id_tipo_usuario = '5';
        $us->save();
        return back()->with('flash','Usuario bloqueado correctamente');
    }

    public function viewUsuariosB()
    {   
        $id_usuario_activo = auth()->id();
        $usuarios = user::all();
        return view('bloquearUsuario', compact('id_usuario_activo', 'usuarios'));
    }



}

