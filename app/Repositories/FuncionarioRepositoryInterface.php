<?php

namespace App\Repositories;

interface  FuncionarioRepositoryInterface
{

    /**
     * recupera um funcionário pelo seu ID
     *
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * recupera todos os funcionários
     *
     * @return mixed
     */
    public function all();


    /**
     * insere um novo funcionário
     *
     * @param $data
     * @return mixed
     */
    public function insert($data);

    /**
     * deleta um funcionário pelo seu ID
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * atualiza um funcionário pelo seu ID
     *
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);
}
