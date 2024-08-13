<?php 
namespace App\Controllers; 
Use App\Models\usuario_model; 
Use CodeIgniter\Controller; 

class login_controller extends BaseController 
{ 

	public function index()
	{ 
			helper(['form', 'url']);

			$data['titulo']='Login';
        	echo view('front/head_view',$data);
        	echo view('front/navbar_view');
        	echo view('back/usuario/login');
        	echo view('front/footer_view');
    }

    public function auth()
    {
    	$session = session();
    	$model = new usuario_model();

    	//traemos los datos del formulario
    	$email=$this->request->getVar('email');
    	$password=$this->request->getVar('pass');

    	$data = $model->where('email', $email)->first();
    	if($data) {
    		$pass = $data['pass'];
    		$ba = $data['baja'];
    		if ($ba == 'SI') {
    			$session->setFlashdata('msg', 'usuario dado de baja');
    			return redirect()->to('/login');
    		}

			//se verifican los datos ingresados para iniciar, si cumple la verificación inicia la sesión
    		$verify_pass = password_verify($password, $pass);
    		//password_verify determina los requisitos de configuración de la contraseña
    		if ($verify_pass) {
    			$ses_data = [
    				'id_usuario' => $data['id_usuario'],
    				'nombre' => $data['nombre'],
    				'apellido' => $data['apellido'],
    				'email' => $data['email'],
    				'usuario' => $data['usuario'],
    				'perfil_id' => $data['perfil_id'],
    				'logged_in' => TRUE 
    			];
    			//SI SE CUMPLE LA VERIFICACIÓN INICIA LA SESIÓN
    			$session->set($ses_data);

    			session()->setFlashdata('msg', '¡Bienvenido!');
    			return redirect()-> to('/panel');
    		}
    		else {
    			$session->setFlashdata('msg', 'Contraseña incorrecta');
    			return redirect()->to('/login');
    		}
    	}
    		else {
    			$session->setFlashdata('msg', 'No existe el email o es incorrecto');
    			return redirect()->to('/login');
    		}
    }

    public function logout()
    {
    	$session = session();
    	$session->destroy();
    	return redirect()->to('/');
    }
}

