<HTML>
	<HEAD>
	
	</HEAD>
	<BODY>
		
		<BR>
		<BR>
		<BR>
		<BR>
		<div class="row-fluid">
			<div class="span6">
				<ul class="nav nav-list">
					<li class="nav-header">
					<LI><a href="<?php echo url_for('@homepage') ?>">Inicio</a></LI>
					<LI><a href="<?php echo url_for('@quienesSomos') ?>">Quiénes somos</a></LI>
					<LI><a href="<?php echo url_for('@abogadosAsoc') ?>">Abogados Asociados</a></LI>
					<LI><a href="<?php echo url_for('@circunscripcion') ?>">Conozca su Circunscripción</a></LI>
				</ul>
			</div>
			<div class="span6">
				<form class="form-horizontal" METHOD = "POST" ACTION = <?php url_for('@homepage') ?>>
					<LEGEND STYLE="color: black text">Ingreso de profesionales</LEGEND>
					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<input type="text" name='usuario' id="inputEmail" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Contraseña</label>
						<div class="controls">
							<input type="password" name='contrasenia' id="inputPassword" />
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-info">Ingresar</button>
						</div>
                                            <br>
                                            <?php echo $mensaje_error; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</BODY>
</HTML>	
	
	
	
