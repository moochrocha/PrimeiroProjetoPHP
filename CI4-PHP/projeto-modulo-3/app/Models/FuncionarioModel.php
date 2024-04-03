<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
        protected $table = 'funcionarios';
        protected $primarykey = 'id_funcionario';
        protected $allowedFields = [
        'id_funcionario',
        'nome',
        'data_de_nascimento',
        'rg',
        'cpf',
        'telefone',
        'endereco',
        'data_de_contratacao',
        'cargo',
        'salario',
        'dia_de_pagamento',  
        ];
        protected $usetimestemps = true;
        protected $protectedFields = false;
        protected $createdField = 'created_at';
        protected $updateField = 'update_at';
        protected $deletedField = 'deleted_at';
}
?>