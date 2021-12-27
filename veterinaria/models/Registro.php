<?php
namespace models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registros';
    protected $fillable = ['usuario_id','ip'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}