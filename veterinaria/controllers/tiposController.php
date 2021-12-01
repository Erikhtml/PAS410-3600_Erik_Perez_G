<?php

use models\Tipo;

class tiposController extends Controller
{
    private $_tipos;

    public function __construct()
    {
        parent::__construct();
        $this->_tipos = $this->loadModel('Tipo');
    }

    public function index()
    {
        $this->verificarMensajes();

        $this->_view->assign('titulo','Tipos de Servicios');
        $this->_view->assign('title','Tipos de Servicios');
        $this->_view->assign('tipos', $this->_tipos->getTipos());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarTipo($id);
        $this->verificarMensajes();

        $this->_view->assign('titulo','Tipos de Servicios');
        $this->_view->assign('title','Tipos de Servicios');
        $this->_view->assign('tipo', $this->_tipos->getTipoId($this->filtrarInt($id)));
        $this->_view->renderizar('view');
    }



    public function edit($id = null)
    {
        $this->verificarTipo($id);

        $this->_view->assign('titulo', 'Editar Tipos de Servicios');
        $this->_view->assign('title', 'Editar Tipos de Servicios');
        $this->_view->assign('button','Editar');
        $this->_view->assign('ruta','tipos/view/' . $this->filtrarInt($id));
        $this->_view->assign('tipo', $this->_tipos->getTipoId($this->filtrarInt($id)));
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) 
        {

            if (!$this->getSql('nombre') || strlen($this->getSql('nombre')) < 5) {
                $this->_view->assign('_error','Ingrese un servicio de al menos 5 caracteres');
                $this->_view->renderizar('edit');
                exit;
            }

            $tipo = $this->_tipos->editTipo($this->filtrarInt($id), $this->getSql('nombre'));

            if ($tipo) {
                Session::set('msg_success','El servicio se ha modificado correctamente');
            }

            $this->redireccionar('tipos/view/' . $this->filtrarInt($id));
        }

        $this->_view->renderizar('edit');
    }

    public function delete($id = null)
    {
        $this->verificarTipo($id);

        $this->_view->assign('titulo', 'Eliminar Tipo de Servicio');
        $this->_view->assign('title', 'Eliminar Tipo de Servicio');
        $this->_view->assign('button','Eliminar');
        $this->_view->assign('ruta','tipos/view/' . $this->filtrarInt($id));
        $this->_view->assign('tipo', $this->_tipos->getTipoId($this->filtrarInt($id)));
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {

            $tipo = $this->_tipos->deleteTipo($this->filtrarInt($id));

            if ($tipo) {
                Session::set('msg_success','El servicio se ha eliminado correctamente');
            }

            $this->redireccionar('tipos'). $this->filtrarInt($id);
        }

        $this->_view->renderizar('delete');
    }

    public function add()
    {
        $this->_view->assign('titulo', 'Nuevo Tipo de Servicio');
        $this->_view->assign('title', 'Nuevo Tipo de Servicio');
        $this->_view->assign('button','Guardar');
        $this->_view->assign('ruta','tipos/');
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('tipo', $_POST);

            if (!$this->getSql('nombre') || strlen($this->getSql('nombre')) < 5) {
                $this->_view->assign('_error','Ingrese un servicio de al menos 5 caracteres');
                $this->_view->renderizar('add');
                exit;
            }

            $tipo = $this->_tipos->getTipoNombre($this->getSql('nombre'));

            if ($tipo) {
                $this->_view->assign('_error', 'El tipo de servicio ingresado ya existe... intente con otro');
                $this->_view->renderizar('add');
                exit;
            }

            $tipo = $this->_tipos->addTipo($this->getSql('nombre'));

            if ($tipo) {
                Session::set('msg_success','El tipo de servicio se ha registrado correctamente');
            }

            $this->redireccionar('tipos');
        }

        $this->_view->renderizar('add');
    }

    ##################################################################
    /*
    * metodo que comprueba el id de un tipo
    * @param int $id
    * redirecciona tipos/index
    */

    private function verificarTipo($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('tipos');
        }

        if (!$this->_tipos->getTipoId($this->filtrarInt($id))) {
            $this->redireccionar('tipos');
        }
    }
}
