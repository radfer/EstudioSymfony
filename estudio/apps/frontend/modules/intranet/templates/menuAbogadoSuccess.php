<html>
	<head>
	</head>
	<body>
	<br>
	<br>
	<br>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<div class="list-group">
                            <H4>SELECCIONE LA OPCION DESEADA</H4>
				<br>
				<br>
				<a href="<?php echo url_for('cliente/new') ?>">Nuevo cliente</a>
				<br>
				<br>
				<a href="<?php echo url_for('cliente/index') ?>">Modificar datos del cliente</a>
				<br>
				<br>
				<a href="<?php echo url_for('cliente/borrarIndex') ?>">Eliminar cliente</a>
				<br>
				<br>
				<a href="<?php echo url_for('expediente/new') ?>">Cargar nuevo expediente</a>
                <br>
				<br>
				<a href="<?php echo url_for('expediente/index') ?>">Modificar datos de un expediente</a>
                                <br>
				<br>
				<a href="<?php echo url_for('expediente/borrarIndex') ?>">Eliminar expediente</a>
                                <br>
				<br>
				
                        </div>
		</div>
		<div class="col-md-6 column">
		</div>
            <BR>
            <div align = 'center'>
                <a href ="<?php echo url_for('@homepage') ?>">Home</a>
            </div>
	</div>
</div>
</body>
</html>
