<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Review extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'         => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'user_id'	=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'tempat_kuliner_id'	=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'review' 	=> [
				'type' 			=> 'VARCHAR',
				'constraint' 	=> '100',
			],
			'created_at' => [
				'type' 			=> 'DATETIME',
				'null' 			=> true,
			],
			'updated_at' => [
				'type' 			=> 'DATETIME',
				'null' 			=> true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('review');
	}

	public function down()
	{
		$this->forge->dropTable('review');
	}
}
