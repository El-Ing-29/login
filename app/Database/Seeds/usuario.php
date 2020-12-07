<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
	public function run()
	{
		$nombre = "Ruben";
		$a_paterno = "Macias";
		$email = "krostyeaa@gmail.com";
		$usuario = "admin";
		$password = password_hash("123", PASSWORD_DEFAULT);
		$type = "admin";

		$data = [
						'nombre' => $nombre,
						'a_paterno' =>$a_paterno,
						'email' => $email,
                        'usuario' => $usuario,
                        'password'    => $password,
                        'type' => $type
                ];


                // Using Query Builder
         $this->db->table('t_usuario')->insert($data);
	}
}
