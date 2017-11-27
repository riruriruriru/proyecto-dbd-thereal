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
        $catastrofes = \App\Catastrofe::all();
        $usuarios = \App\User::all();
        return view('home', compact('usuarios', 'catastrofes'));
    }
    public function viewPerfil()
    {   
        $usuario = Auth::user();
        #$usuario = \App\User::find($user->id);
        return view('perfil.perfil', compact('usuario'));
    }


    public function updatePerfil(Request $loQueLlega)
    {
        $usuario = Auth::user();
        #$usuario = \App\User::find($user->id);
        $usuario->name = $loQueLlega->name;
        $usuario->last_name = $loQueLlega->last_name;
        $usuario->email = $loQueLlega->email;
        $usuario->num_tarjeta = $loQueLlega->num_tarjeta;
        $usuario->save();
        return back()->with('flash','Datos modificados correctamente');
    }

        public function updateCatastrofe(Request $request)
    {       
            $usuario = Auth::id();
            $datos = User::find($usuario);
            $catastrofe = $request->id_catastrofe;
            //$cat = Catastrofe::find($id);
            
            $latitud =$request->latitud;
            $longitud = $request->longitud;
            $tipo = $request->tipo_catastrofe;
         echo $tipo;
        if($tipo=='1'){
             $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Incendio']);
            }
            else if($tipo=='2'){
                       $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Inundacion']);
            }
            else if($tipo=='3'){
           $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Terremoto']);
            }
            else if($tipo=='4'){
                      $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Tsunami']);
            }
            else if($tipo=='5'){
              $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Erupción Volcánica']);
            }
            else if($tipo=='6'){
                  $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Aluvión']);
            }
            else if($tipo=='7'){
         $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Sequía']);
            }
            else if($tipo=='8'){
                  $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Temporal de lluvia']);
            }
            else if($tipo=='9'){
                        $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Marejadas']);
            }
            else if($tipo=='10'){
                $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Tormentas de arena']);
            }
            else if($tipo=='11'){
                          $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Temperaturas extremas']);
            }
            else if($tipo=='12'){
              $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Heladas']);
            }
            else if($tipo=='13'){
                         $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Avalanchas de nieve']);
            }
            else if($tipo=='14'){
              $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Actividad Volcánica']);
            }
            else if($tipo=='15'){
                $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Brote de enfermedades']);
            }
            else if($tipo=='16'){
            $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> 'Pandemia']);
            
            }
            else{
                $cat = Catastrofe::updateOrCreate( ['id_catastrofe'=> $request->id_catastrofe],['nombre' => $request->nombre, 'tipo_catastrofe' => $request->tipo_catastrofe],
    ['lugar_catastrofe' => $request->lugar_catastrofe], ['latitud' => $request->latitud], ['longitud' => $request->longitud], ['fecha_inicio'=> date("m-d-Y", strtotime($request->fecha_inicio))], ['fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino))], ['descripcion'=>  $request->descripcion], ['nombre_tipo_catastrofe'=> $request->nombre_tipo_catastrofe]);

            }





   

        //return view('/infoCatastrofe', compact('cat', 'datos', 'longitud', 'latitud', 'usuario', 'catastrofe'));
        return back()->with('flash', 'Catastrofe Actualizada');
    }


    public function uploadCatastrofe(Request $request)
    {
        //
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

        return view('verCatastrofe', compact('verCatastrofe'))->with('flash','Catastrofe declarada correctamente');
    }

    public function uploadEvento(Request $request)
    {
        //
       
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
            'fecha_termino_evento' => date("m-d-Y", strtotime($request->fecha_termino_evento)),
            'descripcion' => $request->descripcion,



        ]);
        return back()->with('flash','Evento declarado correctamente');
    }


   public function uploadMedida(Request $request)
    {
        Medidas::create([
            'id_catastrofe_medidas'=> $request->id_catastrofe_medidas,
            'nombre_medida'=>$request->nombre_medida,
            'id_organizacion_medidas'=>$request->id_organizacion_medidas,
            'id_usuario' => auth()->id(),
            'fecha_inicio_medida'=>date("m-d-Y", strtotime($request->fecha_inicio_medida)),
            'fecha_termino_medida'=>date("m-d-Y", strtotime($request->fecha_termino_medida)),
            'descripcion' => $request->descripcion,
            ]);
            return back()->with('flash', 'Medida declarada correctamente');
    }

    public function uploadCentroAcopio(Request $request)
    {
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
            ]);
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
                ]);
                return back()->with('flash', 'Inscrito al RNV correctamente');

        }
        else{

                return back()->with('flash', 'Ya se encuentra inscrito en el RNV');

        }
    }

    public function viewCatastrofe()
    {   
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('catastrofe.catastrofe', compact('catastrofe'));
    }

      public function viewAgregarCentroAcopio($id)
    {   
        $id_medidas_acopio = $id;
        $medida = Medidas::find($id);
        $nombre = $medida->nombre_medida;

       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('CentroDeAcopio.centroDeAcopio', compact('id_medidas_acopio'));
    }

     public function viewAgregarEvento($id)
    {   
        $id_medidas_evento = $id;
        $medida = Medidas::find($id);
        $nombre = $medida->nombre_medida;

       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('Evento.evento', compact('id_medidas_evento'));
    }

    public function viewMedida($id)
    {   
        $catastrofe = $id;
        $cat = Catastrofe::find($id);
        $longitud= $cat->longitud;
        $latitud = $cat->latitud;
        //$organizaciones = DB::table('users')->get();
        $organizaciones =  DB::table('users')->where('id_tipo_usuario', '=', 3)->get();

        $nombre = 'Teleton';
        return view('medida.medida', compact('medida', 'organizaciones', 'nombre', 'catastrofe', 'longitud','latitud'));
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
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $medidas = DB::table('Medidas')->get();
        return view('verMedida.verMedida', compact('medidas'));
    }



    public function viewVerMedidasCatastrofe($id)
    {   
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $medidas = DB::table('Medidas')->where('id_catastrofe_medidas', '=', $id)->get();
        return view('verMedida.verMedida', compact('medidas'));
    }


     public function viewRNV()
        {   
           // $catastrofe = Catastrofe::catastrofe();
            #$usuario = \App\User::find($user->id);
            $id_usuario_activo = auth()->id();
            $id_u_r = DB::table('RNVUsers')->pluck('id_usuario');
            $usuarios = \App\User::find($id_u_r);
            return view('RNV.RNV', compact('id_usuario_activo', 'usuarios'));
        }

        public function viewVerOrganizaciones()
    {   
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $organizaciones =  DB::table('users')->where('id_tipo_usuario', '=', 3)->get();
        return view('verOrganizaciones.verOrganizaciones', compact('organizaciones'));
    }

        public function viewVerPerfil()
    {   
       $usuario = Auth::id();
       $datos = \App\User::find($usuario);

       return view('verPerfil.verPerfil', compact('datos'));
    }



    public function viewagregarCatastrofe()
    {   
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('agregarCatastrofe.agregarCatastrofe', compact('agregarCatastrofe'));
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
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $catastrofes = DB::table('Catastrofe')->get();
        $usuario = Auth::id();
       $datos = \App\User::find($usuario);
        return view('verCatastrofe.vercatastrofe', compact('catastrofes', 'datos'));
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
        $catastrofe = $id;
        $cat = Catastrofe::find($id);
        $longitud= $cat->longitud;
        $latitud = $cat->latitud;

        return view('infoCatastrofe.infoCatastrofe', compact('datos', 'cat', 'nombre', 'catastrofe', 'longitud', 'latitud'));
    }


    public function viewinfoMedida($id)
    {
        $usuario = Auth::id();
        $datos = \App\User::find($usuario);
        $medida = Medidas::find($id);
        $centroAcop =  DB::table('CentroDeAcopio')->where('id_medidas_acopio', '=', $id)->get();
        $eventos = DB::table('Evento')->where('id_medidas_evento', '=', $id)->get();
        $organizaciones = DB::table('users')->where('id_tipo_usuario', '=', 3)->get();
        $catastrofe = $medida->id_catastrofe_medidas;

        return view('infoMedida.infoMedida', compact('datos', 'medida', 'eventos', 'centroAcop', 'organizaciones', 'catastrofe'));
    }


}
