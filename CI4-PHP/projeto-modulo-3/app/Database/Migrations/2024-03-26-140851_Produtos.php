<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'id_produto'     => [
                'type'           => 'INT',
                'constrains'     => 9,
                'usigned'        => true,
                'auto_increment' => true,
                ],

                'nome'           => [
                    'type'       => 'VARCHAR',
                    'constraint' => 128
                ],

                'descricao'           => [
                    'type'       => 'TEXT'
                ],

                'quantidade'   => [
                    'type'       => 'INT'
                ],

                'quantidade_minima'   => [
                    'type'       => 'INT'
                ],

                'valor_de_compra'     => [
                    'type'       => 'DOUBLE'
                ],

                'valor_de_venda'     => [
                    'type'       => 'DOUBLE'
                ],

                'margem_de_lucro'     => [
                    'type'       => 'DOUBLE'
                ],

                'validade'           => [
                    'type'       => 'DATE'
                ],

                'created_at' => [
                    'type'   => 'DATETIME'
                ],

                'update_at' => [
                    'type'  => 'DATETIME'
                ],

                'deleted_at' => [
                    'type'   => 'DATETIME'
                ]
            ]);
            $this->forge->addKey('id_produto', true);
            $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->droptable('produtos');
    }
}
