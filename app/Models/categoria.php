<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    public $timestamp=false;
    protected $fillable = ['id','name'];

    public function producto()
    {
        return $this->hasMany('producto');
    }
}
