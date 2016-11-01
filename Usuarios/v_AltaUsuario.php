<script>
function EsLetra(e){
        key = e.keyCode || e.which;
        tecla= String.fromCharCode(key).toLowerCase();
        letras ="áéíóúabcdefghijklmnñopqrstuvwxyz";
        //"ÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ"
        especiales = "8-37-39-46";
        
        tecla_especial = false
        for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial=true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
<?php foreach ($personas->result() as $row):
    $id_persona = $row->id_persona;
    $nombrePers = $row->apellidos.', '.$row->nombres;
    endforeach;
?>
<div class="page-content-wrapper">	<!-- BEGIN CONTENT -->
    <div class="page-content">	
        <h3 class="page-title"> </h3><!-- BEGIN PAGE HEADER-->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="">INICIO</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">USUARIOS</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Carga de Nuevo Usuario </a>
                </li>
            </ul>
        </div>	<!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box purple-plum">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-asterisk"></i> Nuevo Usuario para <?php echo $nombrePers;?>
                        </div>                                           
                    </div>
                    <div class="portlet-body form">
                        <form method="POST" action="<?php echo base_url() . 'Usuarios/c_usuarios/NuevoUsuario'; ?>" name ="form_sample_2" id="form_sample_2" class="form-horizontal"   >
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    <center>Tienes algunos errores. Por favor chequea.</center>
                                </div>
                                <div class="alert alert-success display-hide">          
                                    <button class="close" data-close="alert"></button>
                                    <center>Los datos fueron ingresados Correctamente!</center>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="id_persona" value="<?php echo $id_persona; ?>">                                
                                    <div class="col-md-9 col-sm-9 col-xs-9"> 
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_6_1">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nombre Usuario <span class="required"> * </span></label>
                                                    <div class="col-md-6">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input type="text" class="form-control" name="nombreUsuario" onkeypress="return EsLetra(event)" id="nombreUsuario" onkeyup="javascript:this.value = this.value.toLowerCase();"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contraseña <span class="required"> * </span></label>
                                                    <div class="col-md-6">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input type="password" class="form-control" name="claveUsuario" id="claveUsuario"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Dependencia<span class="required"> * </span></label>
                                                    <div class="col-md-6">                                        
                                                        <select name="id_dependencia" id="id_dependencia" class="form-control select2me" onchange="sin_documento();" >
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <option>  </option>                                  
                                                                <?php
                                                                foreach ($dependencias->result() as $row) {
                                                                    echo '<option value="' . $row->id_dependencia . '">' . $row->descripcion . '</option>';
                                                                }
                                                                ?>
                                                            </div>
                                                        </select>                                        
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Perfil <span class="required"> * </span></label>
                                                    <div class="col-md-6">                                        
                                                        <select name="id_perfil" id="id_perfil" class="form-control select2me" >
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <option>  </option>                                  
                                                                <?php
                                                                foreach ($perfiles->result() as $row) {
                                                                    echo '<option value="' . $row->id_perfil . '">' . $row->descripcion . '</option>';
                                                                }
                                                                ?>
                                                            </div>
                                                        </select>                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- tab content-->   
                                    </div><!-- class col md 9-->                                    
                                </div>                                
                            </div>     
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-5 col-md-9">
                                        <button type="submit" class="btn green-meadow button-submit" name="grabarPersona" id="grabarPersona" value="grabarPersona" onclick="" >   Guardar Datos   </button>                                        
                                    </div>
                                </div>
                            </div>
                        </form>                            <!-- END FORM-->
                    </div>
                </div> 
            </div>                      <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>