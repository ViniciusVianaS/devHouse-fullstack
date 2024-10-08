<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table = 'houses';
    protected $fillable = [
        'nome',
        'valor',
        'cidade',
        'descricao'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
