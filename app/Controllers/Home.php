<?php namespace App\Controllers;
	use App\Models\Usuarios;
class Home extends BaseController
{
	public function index()
	{
		$mensaje = session('mensaje');
		return view('login',["mensaje" => $mensaje]);

				$Crud = new CrudModel();
		$datos = $Crud->listarNombres();

		$mensaje = session('mensaje');


		$data = [
					"datos" => $datos, 
					"mensaje" =>$mensaje

				];

		return view('listado', $data);
	}

	public function inicio(){
		return view('inicio');
	}
	
	public function login(){
		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');

		$Usuario = new Usuarios();
		$datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

		if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])) {

			$data =[
				"usuario" => $datosUsuario[0]['usuario'],
				"type" => $datosUsuario[0]['type']

			];

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/inicio'))->with('mensaje','1');

		}
		else{
			return redirect()->to(base_url('/'))->with('mensaje','0');
		}

	}
	public function salir(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'))->with('mensaje','0');
	}

	public function crear(){

      //print_r($_POST);
		$datos = [

					"nombre" => $_POST['nombre'],
					"paterno" => $_POST['paterno'],
					"materno" => $_POST['materno']
				 ];

		$Crud = new CrudModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url().'/')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}

	}
	public function actualizar(){
		$datos = [
					"nombre" => $_POST['nombre'],
					"paterno" => $_POST['paterno'],
					"materno" => $_POST['materno']
				 ];

		$idNombre = $_POST['idNombre'];
		$Crud = new CrudModel();
		$respuesta = $Crud->actualizar($datos, $idNombre);

		if ($respuesta) {
			return redirect()->to(base_url().'/')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}

	}


	public function obtenerNombre($idNombre){
		$data =["id_nombre" => $idNombre];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerNombre($data); 

		$datos = ["datos" => $respuesta];
		return view('actualizar', $datos);
		
	}
	public function eliminar($idNombre){
		$Crud = new CrudModel();
		$data = ["id_nombre" => $idNombre];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url().'/')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','5');
		}

	}

}
