<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RatingSeeder extends Seeder
{
    public function run()
    {
        // $id_user = \Config\Database::connect()->table('user')->select('email, no_telp')->where('role_id', 2)->get()->getResultArray();
        $id_user_query = \Config\Database::connect()->table('user')->select('id')->get()->getResultArray();
        $id_users = [];
        foreach ($id_user_query as $id) {
            array_push($id_users, $id['id']);
        }

        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            $data = [
                'tanggal' => $faker->date(),
                'rate' => $faker->randomElement([3, 4, 5]),
                'review' => $faker->paragraph(3, false),
                'jenis_produk' => 'kuliner',
                'id_user' => $faker->randomElement($id_users),
                'id_produk' => $faker->randomElement([1, 3, 4, 5, 6])
            ];

            \Config\Database::connect()->table('rating_wisata')->insert($data);
        }
    }
}
