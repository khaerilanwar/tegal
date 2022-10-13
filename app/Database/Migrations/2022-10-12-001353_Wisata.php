<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wisata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nama_wisata' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'link maps' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);

        $this->forge->addKey('id');
    }

    public function down()
    { }
}
