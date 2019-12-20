<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\FuncionarioRepositoryInterface',
            'App\Repositories\FuncionarioRepository'
        );

        $this->app->bind(
            'App\Repositories\DepartamentoRepositoryInterface',
            'App\Repositories\DepartamentoRepository'
        );
    }
}
