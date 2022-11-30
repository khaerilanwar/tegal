<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KulinerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $query = \Config\Database::connect()->table('user')->select('email, no_telp')->where('role_id', 2)->get()->getResultArray();
        $email = [];
        $nomor = [];
        foreach ($query as $q) {
            array_push($email, $q['email']);
            array_push($nomor, $q['no_telp']);
        }

        // $jenis = $faker->randomElement(['Makanan', 'Minuman', 'Camilan']);
        // if($jenis == 'Makanan') {
        // }
        $nameFood = [
            'Xi BoBa',
            'Milkmax',
            'Es Teh Indonesia',
            'Mixue',
            'Starbucks',
            'Kopi Kenangan',
            'Menantea',
            'Kopi Janji Jiwa',
            'Teh Poci',
            'Milk Tea',
            'Milk Beng Beng',
            'Oreo Milk',
            'Beli Kopi'
        ];

        $harga = [
            5000,
            5000,
            10000,
            8000,
            5000,
            5000,
            5000,
            7000,
            10000,
            10000,
            8000,
            7000,
            18000
        ];

        for ($i = 0; $i < 12; $i++) {
            $emailUser = $faker->randomElement($email);
            $data = [
                'nama_kuliner' => $nameFood[$i],
                'slug' => url_title($nameFood[$i], '-', true),
                'jenis_kuliner' => 'Minuman',
                'user_email' => $emailUser,
                'nomor_user' => \Config\Database::connect()->table('user')->select('no_telp')->where('email', $emailUser)->get()->getRowArray(),
                'harga' => $harga[$i],
                'deskripsi' => $faker->text(500),
                'gambar' => 'minuman.jpeg',
                'alamat' => $faker->address(),
                'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.830445426334!2d108.99871203955077!3d-6.865706700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb1a8cf239bc3%3A0x705c765bb0278920!2sNasi%20Goreng%20BangCep!5e0!3m2!1sid!2sid!4v1669570219760!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
            ];

            \Config\Database::connect()->table('kuliner')->insert($data);
        }
    }
}
