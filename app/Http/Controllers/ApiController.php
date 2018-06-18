<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participantes;
class ApiController extends Controller
{
    public function viewParticipantes($id)
    {
        return Participantes::where("owner_id",'=',$id)
                            ->get()->toJson();
    }
    public function viewResultado($id){
        return Participantes::select('nome', 'segredo')
                            ->where("owner_id",'=',$id)                
                            ->get()->toJson();
    }
}
