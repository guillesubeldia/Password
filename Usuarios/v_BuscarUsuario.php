<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content"><!-- BEGIN PAGE HEADER-->
        <h3 class="page-title"> </h3>
        <div class="page-head">
            <div class="page-title">
                <h1>Busqueda de Usuarios</h1>
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
                <a href="#">Buscar</a>
            </li>
        </ul>
        <!-- END PAGE HEADER-->
        <div class="row"><!-- BEGIN PAGE CONTENT-->
            <div class="col-md-12">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                              <i class="fa fa-search"></i> B&uacute;squeda de Usuario
                        </div>
                    </div>
                    <div class="portlet-body form">                        <!-- BEGIN FORM-->
                        <div class="form-body">
                            <form method="post" action="<?php echo base_url() . 'Usuarios/c_usuarios/CargarTabla'; ?>" class="form-horizontal form-row-sepe">  
                                <!--<h4 class="form-section"></h4>-->
                                <div class="form-group">
                                    <label class="control-label col-md-3">Nombre</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-large select2me" name="nombres" id="nombres" data-placeholder="Select...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Apellido</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-large select2me" name="apellidos" id="apellidos" data-placeholder="Select...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Documento</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-large select2me" name="numeroDocumento" id="numeroDocumento" data-placeholder="Select...">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-6 col-md-9">
                                            <button type="submit" class="btn purple"><i class="fa fa-search"></i> Buscar </button>
                                        </div>
                                    </div>
                                </div>
                            </form>                                                       
                        </div>
                    </div>
                </div>
            </div><!-- END PAGE CONTENT-->
        </div>
    </div>
	<!-- END CONTENT -->