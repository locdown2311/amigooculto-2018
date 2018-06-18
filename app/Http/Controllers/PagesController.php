<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participantes;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    public function index(){
        $dados = Participantes::orderBy('nome','asc')
              ->where("owner_id",'=',Auth::id())
              ->get();
        return view('inicio')->with('usuarios',$dados);
    }
    
    public function viewSorteio(){
      $dados = Participantes::where('sorteou', 0)
              ->where("owner_id",'=',Auth::id())
              ->orderBy('nome','asc')
              ->get();

      return view('sorteio')->with('nomes',$dados);
    }
    public function viewSorteioID($id)
    {
        $dados = Participantes::where('sorteou', 0)
              ->where("owner_id",'=',$id)
              ->orderBy('nome','asc')
              ->get();
        return view('sorteio')->with('nomes',$dados);
    }
    
    


}