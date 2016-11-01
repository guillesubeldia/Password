

<?php
foreach ($perfil->result() as $row):
    $nombre = $row->nombre;
    $apellido = $row->apellido;
    $nombreUsuario = $row->nombreUsuario;
    $dependencia = $row->depDescripcion;
    $perfil = $row->perDescripcion;
    $id_usuario = $row->id_usuario;
endforeach;
?>

<div class="page-content-wrapper">	
    <!-- BEGIN CONTENT -->
    <div class="page-content">	
        <div class="page-head">
            <div class="page-title">
                <h1>Modificar datos <small>del usuario.</small></h1>
            </div>
        </div>
        <!-- BEGIN PAGE HEADER-->
        <div class="page-bar">
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="<?php echo base_url(); ?>">Inicio</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Perfil</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Modificar Perfil</a>
                </li>
            </ul>
        </div>	<!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Datos del Usuario
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form method="post" name="contraseniaNueva" action="<?php echo base_url() . 'Usuarios/c_usuarios/CambiarPassword'; ?>" class="form-horizontal" >
                            <input type="hidden" class="form-control" name="id_usuario" readonly="" value="<?php echo $id_usuario; ?>"/>
                            <div class="form-body">
                                <h3 class="form-section">Datos Basicos</h3>
                                <div class="form-group has-success">
                                    <label class="control-label col-md-3">Nombre de Usuario</label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa fa-check tooltips" data-original-title="success input!"></i>
                                            <input type="text" class="form-control" name="nombreUsuario" readonly="" value="<?php echo $nombreUsuario; ?>"/>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label col-md-3">Nombre y Apellido</label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa fa-check tooltips" data-original-title="success input!"></i>
                                            <input type="text" class="form-control" name="nombreCompleto" readonly="" value="<?php echo $apellido . ", " . $nombre; ?>"/>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label col-md-3">Dependencia</label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa fa-check tooltips" data-original-title="success input!"></i>
                                            <input type="text" class="form-control" readonly="" value="<?php echo $dependencia; ?>"/>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label col-md-3">Tipo de Perfil</label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa fa-check tooltips" data-original-title="success input!"></i>
                                            <input type="text" class="form-control" readonly="" value="<?php echo $perfil; ?>"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-actions">



                                <h3 class="form-section">Cambiar Contraseña</h3>
                                <div class="alert alert-danger">
                                    <strong>Atencion!!</strong> Si olvida la contraseña, pida restablecimiento al administrador.
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Contraseña Actual</label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <input type="password" name="contraseniaActual" required="" class="form-control"  value=""/>
                                        </div>
                                    </div>
                                </div>
                                <fieldset>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Ingrese Contraseña Nueva</label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <input class="form-control" name="password" type="password" placeholder="Password" id="password" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Repita Contraseña</label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <input class="form-control" type="password" placeholder="Confirm Password" id="confirm_password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn blue">Enviar</button>
                                        </div>
                                    </div>
                                </fieldset>

                                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                                <script>
                                    var password = document.getElementById("password")
                                            , confirm_password = document.getElementById("confirm_password");

                                    function validatePassword() {
                                        if (password.value != confirm_password.value) {
                                            confirm_password.setCustomValidity("Las contraseñas no son iguales");
                                        } else {
                                            confirm_password.setCustomValidity('');
                                        }
                                    }

                                    password.onchange = validatePassword;
                                    confirm_password.onkeyup = validatePassword;
                                </script>
                            </div>
                            </body>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
</div>


