<?php

namespace App\Repositories;

use App\Models\Departamento;

class DepartamentoRepository implements DepartamentoRepositoryInterface
{

    /**
     * recupera um departamento pelo seu ID
     *
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return Departamento::find($id);
    }

    /**
     * recupera todos os departamentos
     *
     * @return mixed
     */
    public function all()
    {
        return Departamento::all();
    }

    /**
     * insere um novo departamento
     *
     * @param $data
     * @return mixed|void
     */
    public function insert($data)
    {
        $departamento = new Departamento();

        $departamento->nome = $data['nome'];
        $departamento->save();
    }

    /**
     * deleta um departamento pelo seu ID
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        Departamento::destroy($id);
    }

    /**
     * atualiza um departamento pelo seu ID
     *
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data)
    {
        Departamento::find($id)->update($data);
    }
}
