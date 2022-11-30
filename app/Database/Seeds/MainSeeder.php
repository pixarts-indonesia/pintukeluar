<?php

namespace App\Database\Seeds;

class MainSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('AboutIndonesiaSeeder');
        $this->call('AboutInggrisSeeder');
        $this->call('IndonesiaSeeder');
        $this->call('InggrisSeeder');
        $this->call('MasterLanguageSeeder');
    }
}
