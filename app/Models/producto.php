<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

     public $timestamp=false;
    protected $fillable = ['id','name_producto','idCategoria'];

    public function categoria(){
        return $this->belongsTo('categoria');
    }
}
