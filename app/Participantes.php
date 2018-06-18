<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    protected $fillable = ['nome','owner_id'];
    protected $guarded = ['id','created_at','updated_at','segredo','sorteado','sorteou'];
    protected $table = 'participantes';


}