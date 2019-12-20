<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'matricula',
        'nome',
        'data_nascimento',
        'telefone',
        'email',
        'salario',
        'departamento_id'
    ];

    protected $dates = ['deleted_at'];

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento');
    }

    public function setDataNascimentoAttribute($value)
    {
        $format_value = Carbon::createFromFormat('d/m/Y', $value);
        $this->attributes['data_nascimento'] = $format_value;

    }

    public function getDataNascimentoAttribute($value)
    {
        $format_value = Carbon::createFromFormat('Y-m-d', $value);
        return $format_value->format('d/m/Y');
    }

    public function setSalarioAttribute($value)
    {
        $format_value = str_replace('.', '', $value);
        $format_value2 = str_replace(',', '.', $format_value);
        $this->attributes['salario'] = $format_value2;
    }

    public function setTelefoneAttribute($value)
    {
        $format_value = str_replace(['-', '(', ')', ' '], ['', '', '', ''], $value);
        $this->attributes['telefone'] = trim($format_value);
    }

}
