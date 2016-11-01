<?php foreach ($usuario->result() as $row):
    $id_usuario = $row->id_usuario;
    $nombreUsuario = $row->nombreUsuario;
    $claveUsuario = $row->claveUsuario;
    $id_persona = $row->id_persona;
    $id_dependencia = $row->id_dependencia;
    $id_perfil = $row->id_perfil;
    $descripcion_dependencia = $row->descripcion_dependencia;
    $descripcion_perfil = $row->descripcion_perfil;
    
    endforeach;
?>
<div class="page-content-wrapper">	<!-- BEGIN CONTENT -->
    <div class="page-content">	
        <h3 class="page-title"> </h3><!-- BEGIN PAGE HEADER-->
        <div class="page-head">
            <div class="page-title">
                <h1>Editar Usuarios</h1>
            </div>
        </div>
         <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo base_url(); ?>">Inicio</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Usuarios</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Editar Usuarios</a>
            </li>
        </ul>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box purple-plum">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-asterisk"></i> Edicion de Datos de Usuario
                        </div>                   
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form method="POST" action="<?php echo base_url() . 'Usuarios/c_usuarios/EditarDatos'; ?>" name ="form_sample_2" id="form_sample_2" class="form-horizontal"   >
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
                                                            <input type="text" class="form-control" value="<?php echo $nombreUsuario; ?>" name="nombreUsuario" id="nombreUsuario" onkeyup="javascript:this.value = this.value.toLowerCase();"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contraseña <span class="required"> * </span></label>
                                                    <div class="col-md-6">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input type="password" value="<?php echo $claveUsuario; ?>" class="form-control" name="claveUsuario" id="claveUsuario"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Dependencia<span class="required"> * </span></label>
                                                    <div class="col-md-6">                                        
                                                        <select name="id_dependencia" id="id_dependencia" class="form-control select2me" onchange="sin_documento();" >
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <option value="<?php echo $id_dependencia;?>"> <?php echo $descripcion_dependencia;?> </option>                                  
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
                                                                <option value="<?php echo $id_perfil;?>"><?php echo $descripcion_perfil;?>  </option>                                  
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