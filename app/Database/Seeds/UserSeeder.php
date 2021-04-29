<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {

        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama' => $faker->name(),
                'email'    => $faker->email(),
                'password' => $faker->password(),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('user')->insert($data);
        }



        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        // $this->db->table('users')->insert($data);
    }
}
