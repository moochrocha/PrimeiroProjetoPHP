<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
        protected $table = 'logins';
        protected $primarykey = 'id_login';
        protected $allowedFields = [
        'id_login',
        'usuario',
        'senha',
        'primeiro_nome',
        ];
        protected $usetimestemps = true;
        protected $createdField = 'created_at';
        protected $updateField = 'update_at';
        protected $deletedField = 'deleted_at';
}
?>