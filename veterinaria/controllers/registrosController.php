<?php
use models\Registro;
use models\Funcionario;
use models\Usuario;

class resgistrosController extends Controller
{
   public function __construct()
    {
        parent::__construct();
        $this->verificarSession();
    }

    /*public function index()
    {
        $this->verificarMensajes();

        $this->_view->assign('titulo','Registro de Usuarios');
        $this->_view->assign('title','Registro de Usuarios');
        $this->_view->assign('registrios', Registro::select('id','funcionario_nombre','in_at')->orderBy('in_at')->get());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarRegistro($id);
        $this->verificarMensajes();

        $this->_view->assign('titulo','Registro');
        $this->_view->assign('title','Registro');
        $this->_view->assign('registro', Registro::find($this->filtrarInt($id)));
        $this->_view->renderizar('view');
    }
    */

    /*public function session($id = null)
    {
            $ip = $_SERVER['REMOTE_ADDR'];

            Session::set('usuario_id', $usuario->id);
            Session::set('usuario_nombre', $usuario->funcionario->nombre);
            Session::set('usuario_ip', $ip);
            Session::set('tiempo', time());

    
    }
    */
    
    public function add($id)
    {
        
            $ip = $_SERVER['REMOTE_ADDR'];

            $registro = new Registro;
            
            $registro->usuario_id = usuario.filtrarInt($id);
            $registro->ip = $ip;
            $registro->save();

            Session::set('msg_success','Se ha registrado su Ingreso al Sistema');

            
    }

    public function update($id)
    {
        
            $registro = Registro::select('id')->where('usuario_id', $usuario->id)->last();
            
            
            /*$ip = $_SERVER['REMOTE_ADDR'];

            $registro = new Registro;
            
            $registro->usuario_id = usuario.filtrarInt($id);
            $registro->ip = $ip;
            */
            
            $registro->save();

            Session::set('msg_success','Gracias');

            
    }

        
    

    ##################################################################
    /*
    
    */
}
