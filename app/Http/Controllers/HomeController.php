<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Medidas;
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

   public function uploadMedida(Request $request)
    {
                 Medidas::create([
                //'id_catastrofe_medidas'=> 
                'nombre_medida'=>$request->nombre_medida,
                //'id_organizacion_medidas'=>$request->id_organizacion,
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
    public function uploadCatastrofe(Request $loQueLlega)
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

    public function viewMedida()
    {   
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('medida.medida', compact('medida'));
    }
 

       public function viewVerCatastrofe()
    {   
       // $catastrofe = Catastrofe::catastrofe();
        #$usuario = \App\User::find($user->id);
        return view('verCatastrofe.vercatastrofe', compact('vercatastrofe'));
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
