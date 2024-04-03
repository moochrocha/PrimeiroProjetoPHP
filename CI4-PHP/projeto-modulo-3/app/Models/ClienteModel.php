<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
        protected $table = 'clientes';
        protected $primarykey = 'id_cliente';
        protected $allowedFields = [
                'id_cliente',
                'nome',
                'data_de_nascimento',
                'telefone',
                'endereco',
                'limite_de_credito',
        ];
        protected $usetimestemps = true;
        protected $protectedFields = false;
        protected $createdField = 'created_at';
        protected $updateField = 'update_at';
        protected $deletedField = 'deleted_at';
}
?>