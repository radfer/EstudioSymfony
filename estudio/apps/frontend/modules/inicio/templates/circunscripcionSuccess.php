<HTML>
    <HEAD>
	<TITLE>Home |Estudio Jurídico</TITLE>
            <meta charset="utf-8">
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
				<FORM METHOD = 'POST' ACTION = '<?php echo url_for('inicio/circunscripcion') ?>'>
					<INPUT CLASS='btn btn-info' TYPE = 'submit' NAME = 'circunscripcion' VALUE = 'Obtener'></INPUT>
				</FORM>
				Se enviará el listado con los juzgados pertenecientes a su circunscripción
			</div>
		</div>
	</div>
    </BODY>
</HTML>







