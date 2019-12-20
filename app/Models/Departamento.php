<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome'];

    protected $dates = ['deleted_at'];

    public function funcionarios()
    {
        return $this->hasMany('App\Models\Funcionario');
    }
}
