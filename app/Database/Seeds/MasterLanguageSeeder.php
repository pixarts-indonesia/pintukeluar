<?php

namespace App\Database\Seeds;

class MasterLanguageSeeder extends \CodeIgniter\Database\Seeder
{
    private $time;

    public function run()
    {
        helper('date');
        $this->time = date('Y-m-d H:i:s', now());
        $this->db->table('master_language')->insertBatch($this->data());
    }

    public function data(): array
    {
        return [
            [
                'code_language' => 'id',
                'name_language' => 'indonesia',
                'img' => 'id.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'name_language' => 'inggris',
                'status' => 10,
                'img' => 'en.png',
                'created_at' => $this->time,
                'updated_at' => $this->time
            ]
        ];
    }
}
