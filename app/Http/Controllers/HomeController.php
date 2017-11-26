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
        $usuarios = \App\User::all();
        return view('home', compact('usuarios'));
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
        return redirect()->route('home');
    }
/*
        public function updateCatastrofe(Request $request)
    {
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
             'latitud' =>$request->latitud,
            'longitud' => $request->longitud,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
        return redirect()->route('verCatastrofe');
    }
*/

    public function uploadCatastrofe(Request $request)
    {
        //
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
        ]);
        return view('verCatastrofe', compact('verCatastrofe'));
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
        return back()->with('flash','Catastrofe declarada correctamente');
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
        $organizaciones = DB::table('Organizacion')->get();
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

        public function viewVerOrganizaciones()
    {   
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $organizaciones = DB::table('Organizacion')->get();
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
        $organizaciones = DB::table('Organizacion')->get();
        $nombre = 'Teleton';

        return view('infoCatastrofe.infoCatastrofe', compact('organizaciones', 'datos', 'cat', 'nombre', 'catastrofe', 'longitud', 'latitud'));
    }

}
