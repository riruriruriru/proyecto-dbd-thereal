<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Medidas;
use App\Organizacion;

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
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


    public function uploadCatastrofe(Request $request)
    {
        //
      Catastrofe::create([
            'id_user'=> auth()->id(),
            'nombre'=> $request->nombre,
            'tipo_catastrofe' => $request->tipo_catastrofe,
            'lugar_catastrofe' =>$request->lugar_catastrofe,
            'fecha_inicio' => date("m-d-Y", strtotime($request->fecha_inicio)),
            'fecha_termino' => date("m-d-Y", strtotime($request->fecha_termino)),
            'descripcion' => $request->descripcion,
        ]);
        return back()->with('flash','Catastrofe declarada correctamente');
    }


   public function uploadMedida(Request $request)
    {
                 Medidas::create([
                //'id_catastrofe_medidas'=> 
                'nombre_medida'=>$request->nombre_medida,
                'id_organizacion_medidas'=>$request->id_organizacion_medidas,
                'id_usuario' => auth()->id(),
                'fecha_inicio_medida'=>date("m-d-Y", strtotime($request->fecha_inicio_medida)),
                'fecha_termino_medida'=>date("m-d-Y", strtotime($request->fecha_termino_medida)),
                'descripcion' => $request->descripcion,
            ]);
            return back() ->with('flash', 'Medida declarada correctamente');
    }


    public function viewCatastrofe()
    {   
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('catastrofe.catastrofe', compact('catastrofe'));
    }
   

    public function viewMedida()
    {   
<<<<<<< Updated upstream
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        $nombre = 'Teleton';
        $resutlado = DB::select('select id_organizacion from Organizacion where tipo_beneficencia = Teleton');
        return view('medida.medida', compact('medida', $nombre, $resutlado));
        $organizacion = DB::table('Organizacion')->where('Teleton');
        $nombre = 'Teleton';
        return view('medida.medida', compact('medida', 'organizacion', 'nombre'));

=======

        $organizaciones = DB::table('Organizacion')->get();
        $nombre = 'Teleton';
        return view('medida.medida', compact('medida', 'organizaciones', 'nombre'));
>>>>>>> Stashed changes
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
        return view('verCatastrofe.vercatastrofe', compact('vercatastrofe', 'catastrofes'));
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

}
