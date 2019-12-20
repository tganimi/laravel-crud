<?php

namespace App\Repositories;

use App\Models\Funcionario;

class FuncionarioRepository implements FuncionarioRepositoryInterface
{
    /**
     * recupera um funcionário pelo seu ID
     *
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return Funcionario::find($id);
    }


    /**
     * recupera todos os funcionários
     *
     * @return mixed
     */
    public function all()
    {
        return Funcionario::all();
    }

    /**
     * insere um novo funcionário
     *
     * @param $data
     * @return mixed|void
     */
    public function insert($data)
    {
        $funcionario = new Funcionario();

        $funcionario->nome = $data['nome'];
        $funcionario->matricula = $data['matricula'];
        $funcionario->data_nascimento = $data['data_nascimento'];
        $funcionario->telefone = $data['telefone'];
        $funcionario->email = $data['email'];
        $funcionario->salario = $data['salario'];
        $funcionario->departamento_id = $data['departamento_id'];

        $funcionario->save();
    }

    /**
     * deleta um funcionário pelo seu ID
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        Funcionario::destroy($id);
    }

    /**
     * atualiza um funcionário pelo seu ID
     *
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data)
    {
        Funcionario::find($id)->update($data);
    }
}
