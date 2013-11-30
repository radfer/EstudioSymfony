<h1>Ingrese un nuevo Expediente</h1>
<br>
<h3>Seleccione un cliente para ser vinculado al expediente</h3>
	<form method = 'POST' action = '<?php echo url_for('expediente/new') ?>'>
		<select name = 'lista' class = 'form-control'>
			<?php foreach($Clientes as $valor){ ?>
			<option><?php echo $valor->getIdCliente().' '.$valor->getApellido().', '.$valor->getNombre();} ?></option>
		</select>
		<button type="submit" class="btn btn-info">Ingresar</button>
	</form>
<?php if($bandera == 1){include_partial('form', array('form' => $form)); } ?>
