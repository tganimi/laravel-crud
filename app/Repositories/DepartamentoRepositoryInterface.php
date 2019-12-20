<?php

namespace App\Repositories;

interface DepartamentoRepositoryInterface
{

    /**
     * recupera um departamento pelo seu ID
     *
     * @param $id
     * @return mixed
     */
    public function get($id);


    /**
     * recupera todos os departamentos
     *
     * @return mixed
     */
    public function all();

    /**
     * insere um novo departamento
     *
     * @param $data
     * @return mixed
     */
    public function insert($data);

    /**
     * deleta um departamento pelo seu ID
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * atualiza um departamento pelo seu ID
     *
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);
}
