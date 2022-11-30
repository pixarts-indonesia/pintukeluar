<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterLanguage extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'code_language' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'name_language' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'img' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'status' => [
                'type' => 'SMALLINT',
                'constraint' => '6',
                'default' => 0,
                'null' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'SMALLINT',
                'constraint' => 6,
                'default' => 0,
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('master_language');
    }

    public function down()
    {
        $this->forge->dropTable('master_language');
    }
}
