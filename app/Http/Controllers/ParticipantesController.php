<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Participantes;

class ParticipantesController extends Controller
{
  private function validaparticipante(Request $dados){

    $messages = [
        'nome.unique' => 'O participante :input ja existe',
    ];

    Validator::make($dados->all(), [
        'nome' => 'required|unique:participantes|max:100',
    ],$messages)->validate();

  }
  public function storeparticipante(Request $req){
        $data = $req->all();  
	  	$valida = Validator::make($req->all(), [
            'nome' => 'required|unique:participantes|max:100',
        ]);
        
        if($valida->fails()){
            return redirect()->back()->withErrors($valida)->withInput();
        }
        $dados = Participantes::create($data);
        return redirect()->back()->with('usuarios',$dados->toJson());
  }


  public function dosort(Request $req){
      $sorteou = $req->nome;
      $sorteado = Participantes::where('sorteado', 0)
                ->where('nome','!=',$sorteou)
                ->inRandomOrder()
                ->first();
      $this->setSorteado($sorteado->nome);
      $this->setSorteou($sorteou);
      $this->setSegredo($sorteou,$sorteado->nome);

      $retorno =json_encode([
        ["sorteou"=>ucfirst($sorteou),
        "sorteado"=>ucfirst($sorteado->nome)]
        ]);

      return redirect()->back()->with(compact('retorno'));
  }

  public function setSorteado($nome){
      $temp = Participantes::where('nome','=',$nome)->first();
      $temp->sorteado = '1';
      $temp->save();
  }
  public function setSorteou($nome){
      $temp = Participantes::where('nome','=',$nome)->first();
      $temp->sorteou = '1';
      $temp->save();
  }

  public function setSegredo($nome,$segredo){
      $temp = Participantes::where('nome',$nome)->first();
      $temp->segredo = "$segredo";
      $temp->save();
  }

}
