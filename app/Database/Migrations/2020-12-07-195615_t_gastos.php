<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TGastos extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_gasto'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'concepto'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'monto'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'fecha'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                ]);
                $this->forge->addKey('id_gasto', true);
                $this->forge->createTable('t_gasto');
        }

        public function down()
        {
                $this->forge->dropTable('t_gasto');
        }
}
