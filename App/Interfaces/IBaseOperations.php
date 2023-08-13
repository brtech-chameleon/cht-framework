<?php

/**
 * Classe responsável por compor metodo básicos de operações no banco de dados
 * métodos esses que devem ser implementados pela classe dao
 */

namespace ChtFramework\Interfaces;

interface IBaseOperations
{
    public function create();
    public function destroy();
    public function update();
    public function listAll();
    public function listOne($id);
}