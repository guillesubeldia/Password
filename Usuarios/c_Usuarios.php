<?php

class C_usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Usuarios/M_usuarios');

        $Is_logged_in = $this->session->userdata('Is_logged_in');
        if (!isset($Is_logged_in) || $Is_logged_in != true) {
           echo redirect(base_url());
        } else {
            return true;
        }
    }
    public function AltaUsuario() {
        $datos['perfiles']      = $this->M_usuarios->LeerPerfiles();
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Usuarios/v_CargaUsuario',$datos);
        $this->load->view('Plantilla/v_Pie');
    }
    public function MostrarUsuario() {
        $datos = array(
            'nombre'         => $this->input->post('nombres'),
            'apellido'       => $this->input->post('apellidos'),
            'numeroDocumento' => $this->input->post('numeroDocumento'),
            'perfil'          => $this->input->post('perfil')
        );
        $data['usuarios']=$this->M_usuarios->CargarTablas($datos);
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Usuarios/v_TablaUsuarios',$data);
        $this->load->view('Plantilla/v_Pie');
    }
    public function BuscarUsuario(){
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Usuarios/v_BuscarUsuario');
        $this->load->view('Plantilla/v_Pie');
    }
    public function CargarTabla(){
        $datos = array(
            'nombre'         => $this->input->post('nombres'),
            'apellido'       => $this->input->post('apellidos'),
            'numeroDocumento' => $this->input->post('numeroDocumento'),
            'perfil' => ''
        );
        $data['usuarios']=$this->M_usuarios->CargarTablas($datos);
        
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Usuarios/v_TablaUsuarios',$data);
        $this->load->view('Plantilla/v_Pie');
    }
    public function AltaDatos($id_persona){
        $datos['perfiles']      = $this->M_usuarios->LeerPerfiles();
        $datos['personas']      = $this->M_usuarios->ObtenerPersona($id_persona);
        $datos['dependencias']  = $this->M_usuarios->LeerDependencias();
        
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Usuarios/v_AltaUsuario',$datos);
        $this->load->view('Plantilla/v_Pie');
    }
    
    public function NuevoUsuario(){
        $datos = array(
            'nombreUsuario'  => $this->input->post('nombreUsuario'),
            'claveUsuario'   => sha1($this->input->post('claveUsuario')),
            'id_persona'     => 1,
            'id_dependencia' => 1,
            'id_perfil'      => $this->input->post('id_perfil'),
            'activo'         => 1    
        );
        $this->M_usuarios->CargarDatos($datos);        
        $dato['texto'] = "<div class= 'alert alert-success'> ¡Exito!";
        $dato['metodo'] = "Usuarios/c_Usuarios/AltaUsuario";        
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Plantilla/v_Exito',$dato);
        $this->load->view('Plantilla/v_Pie');
    }
    
    public function Restablecer($id_persona){
        $this->M_usuarios->Restablecer($id_persona);
        $dato['texto']  = "<div class= 'alert alert-success'> ¡Exito!";
        $dato['metodo'] = "Usuarios/c_Usuarios/AltaUsuario";
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Plantilla/v_Exito',$dato);
        $this->load->view('Plantilla/v_Pie');
    }
    
    public function Editar($id_persona){
        $datos['usuario']      = $this->M_usuarios->leerUsuario($id_persona);
        $datos['dependencias'] = $this->M_usuarios->LeerDependencias();
        $datos['perfiles']     = $this->M_usuarios->LeerPerfiles();
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Usuarios/v_EditarUsuario',$datos);
        $this->load->view('Plantilla/v_Pie');
    }
    
    public function EditarDatos(){
        $datos = array(
            'nombreUsuario'  => $this->input->post('nombreUsuario'),
            'claveUsuario'   => sha1($this->input->post('claveUsuario')),
            'id_persona'     => $this->input->post('id_persona'),
            'id_dependencia' => $this->input->post('id_dependencia'),
            'id_perfil'      => $this->input->post('id_perfil'),   
        );
        $id = $this->input->post('id_persona');
        $this->M_usuarios->EditarUsuario($datos,$id);
        $dato['texto']  = "<div class= 'alert alert-success'> ¡Exito!";
        $dato['metodo'] = "Usuarios/c_Usuarios/AltaUsuario";
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Plantilla/v_Exito',$dato);
        $this->load->view('Plantilla/v_Pie');
    }
    public function Perfil(){
        $datos['perfil'] = $this->M_usuarios->LeerPerfil();
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Usuarios/v_Perfil',$datos);
        $this->load->view('Plantilla/v_Pie');
    }
    
    public function CambiarPassword(){
     
      
      $contraseña = sha1($this->input->post('contraseniaActual'));
      $id_usuario= $this->input->post('id_usuario');
      $consulta = $this->M_usuarios->CompararPassword($contraseña,$id_usuario);
      
       if ($consulta==TRUE ){
           echo "si esiste";
            $data = array(
            'claveUsuario'   => sha1($this->input->post('contraseniaActual')),
            'claveNueva'     => sha1($this->input->post('password')),
            'nombreUsuario'  => $this->input->post('nombreUsuario')
        );
        $this->M_usuarios->CambiarPassword($data);
        $this->session->sess_destroy();
        
        $nombreUsuario = $this->input->post('nombreUsuario');
     $error="mo";
    $datosUsuario['datos'] = $this->M_usuarios->RecuperarDatos($nombreUsuario); 
    $datosUsuario["error"] = $error;
        $this->load->view('Login/v_CabeceraLogin');
        $this->load->view('Login/v_Login',$datosUsuario);
        $this->load->view('Login/v_PieLogin');
       }else{
        $dato['texto']  = "<div class= 'alert alert-success'> ¡Contraseña Erronea!";
        $dato['metodo'] = "Usuarios/c_Usuarios/Perfil";
        $this->load->view('Plantilla/v_Cabecera');
        $this->load->view('Plantilla/V_Menu');
        $this->load->view('Plantilla/v_Error',$dato);
        $this->load->view('Plantilla/v_Pie');
       }
    }
        
    
    public function prueba(){
        $this->load->view('Login/v_CabeceraLogin');
        $this->load->view('Login/v_ContraseniaNueva');
        $this->load->view('Login/v_PieLogin');
    }
}


