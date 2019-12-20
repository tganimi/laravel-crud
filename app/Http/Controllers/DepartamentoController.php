<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartamentoRequest;
use App\Repositories\DepartamentoRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class DepartamentoController extends Controller
{
    protected $departamento;

    public function __construct(DepartamentoRepositoryInterface $departamento)
    {
        $this->departamento = $departamento;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $departamentos = $this->departamento->all();

        return view('departamento.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
       return view('departamento.create');
    }

    /**
     * @param DepartamentoRequest $request
     * @return RedirectResponse|Redirector
     */
    public function store(DepartamentoRequest $request)
    {
        $data = $request->all();
        $this->departamento->insert($data);

        return redirect('/departamentos')->with('status', 'Inserido com sucesso!');
    }

    public function edit($id)
    {
        $departamento = $this->departamento->get($id);

        return view('departamento.edit', compact('departamento'));
    }

    /**
     * @param DepartamentoRequest $request
     * @param $id
     * @return RedirectResponse|Redirector
     */
    public function update(DepartamentoRequest $request, $id)
    {
        $data = $request->all();
        $this->departamento->update($id, $data);

        return redirect('/departamentos')->with('status', 'Editado com sucesso!');
    }

    public function destroy($id)
    {
        $this->departamento->delete($id);

        return redirect('/departamentos')->with('status', 'Removido com sucesso!');
    }
}
