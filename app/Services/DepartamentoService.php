<?php

namespace App\Services;

use App\Repositories\DepartamentoRepositoryInterface;

class DepartamentoService
{
    protected $departamento;

    public function __construct(DepartamentoRepositoryInterface $departamento)
    {
        $this->departamento = $departamento;
    }

    public function getDepartamentosToSelect()
    {
        return $this->departamento
            ->all()
            ->pluck('nome', 'id');
    }
}
