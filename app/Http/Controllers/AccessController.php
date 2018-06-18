<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\URL;

class AccessController extends Controller
{
    public function viewResultado()
    {
        $users = \App\Participantes::select('nome', 'segredo')
            ->where("owner_id",'=',Auth::id())    
            ->get()->toJson();
        return view('resultados')->with('participantes',$users);
        //$users = \App\Participantes::select('nome', 'segredo')->get();
        //return response()->json($users);
    }

    public function viewCadastro(){
        return view('cadastro');
    }
    public function viewSettings(){
        return view('settings');
    }
    public function doReset($id)
    {
      \App\Participantes::where('owner_id', '=', $id)->delete();
      return redirect()->back();
    }
}
