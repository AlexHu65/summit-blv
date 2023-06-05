<?php

namespace App\Http\Controllers;

// Modelos
use App\Models\Comentario;
use App\Models\Banner;
use App\Models\Ciudad;
use App\Models\Estado;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


// request
use App\Http\Requests\ComentarioRequest;
use App\Mail\MensajeMail;
use Illuminate\Http\Request;


class HomeController extends Controller
{

  public function index()
  {
    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners
    ];
    // regresamos la vista compilada
    return view('home.index' , $parametros);
  }

  public function paquetes()
  {
    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'paquetes' => true
    ];
    // regresamos la vista compilada
    return view('paquetes.index' , $parametros);
  }

  public function export(){
    return Excel::download(new UsersExport, 'users.xlsx');
  }

  // wikipedia
  public function wiki(){
    return view('wiki.index');
  }

  function ciudades(Request $request){
    $id = $request->input('id');
    $ciudades = Ciudad::where('provincia' , $id)->get();
    return view('home.secciones.ciudad', compact('ciudades'))->render();
  }

  public function sendComentario(ComentarioRequest $request){
    $comentario = new Comentario;
    $comentario->nombre = $request->input('txtNombre');
    $comentario->apellidos = $request->input('txtApellido');
    $comentario->email = $request->input('txtEmail');
    $comentario->telefono = $request->input('txtTelefono');
    $comentario->web = $request->input('txtWeb');
    $comentario->empresa = $request->input('txtEmpresa');
    $comentario->comentario = $request->input('txtComentario');

    if($comentario->save()){
      // enviamos notificacion de email utilizando la clase
      // Mail::to(setting('site.correo'))->send(new MensajeMail($comentario));
      // enviamos respuesta al cliente
      return response(['msg'=>'Tu comentario ha sido enviado.']);
    }
    return response(['error'=>'Error al enviar tu mensaje']);
  }

}
