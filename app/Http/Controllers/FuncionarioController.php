<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Repositories\FuncionarioRepositoryInterface;
use App\Services\DepartamentoService;
use Illuminate\Http\Response;

class FuncionarioController extends Controller
{
    protected $funcionario;
    protected $departamento;

    public function __construct(FuncionarioRepositoryInterface $funcionario, DepartamentoService $departamento)
    {
        $this->funcionario = $funcionario;
        $this->departamento = $departamento;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = [
            'funcionarios' => $this->funcionario->all(),
        ];

        return view('funcionario.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $departamentos = $this->departamento->getDepartamentosToSelect();

        return view('funcionario.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FuncionarioRequest $request
     * @return void
     */
    public function store(FuncionarioRequest $request)
    {
        $data = $request->all();

        $this->funcionario->insert($data);

        return redirect('/funcionarios')->with('status', 'Inserido com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $funcionario = $this->funcionario->get($id);
        $departamentos = $this->departamento->getDepartamentosToSelect();

        return view('funcionario.edit', compact('departamentos', 'funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FuncionarioRequest $request
     * @param int $id
     * @return Response
     */
    public function update(FuncionarioRequest $request, $id)
    {
        $data = $request->all();
        $this->funcionario->update($id, $data);

        return redirect('/funcionarios')->with('status', 'Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->funcionario->delete($id);

        return redirect('/funcionarios')->with('status', 'Removido com sucesso!');
    }
}
