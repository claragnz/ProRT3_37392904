<?php 
namespace App\Controllers; 
Use App\Models\usuario_model; 
Use CodeIgniter\Controller; 

class usuario_controller extends Controller { 

	public function __construct(){ 
			helper(['form', 'url']); 

	} 

    public function create()
    {
        $data['titulo']='Registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation() {

    	$input = $this->validate([
    		'nombre' => 'required|min_length[3]',
    		'apellido' => 'required|min_length[3]|max_length[25]',
    		'usuario' => 'required|min_length[3]',
    		'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
    		'pass' => 'required|min_length[3]|max_length[10]'
    	],
    );
    	$formModel = new usuario_model();

        if (!$input) {
            $data['titulo']='Registro';
            echo view('front/head_view',$data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this-> validator]);
            echo view('front/footer_view');
        } 

        else {
            $formModel-> save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
                //password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
            ]);

            //Flashdata: funciona solo  en redirigir la funcion del controlador en la vista de carga. Para mostrar mensajes de error o éxito. Redirige a otra página 
            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return $this->response->redirect('/login');

        }
    }
}