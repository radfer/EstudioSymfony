<h1>Lista de expedientes</h1>

<table class = 'table table-striped'>
  <thead>
    <tr>
      <th></th>
      <th>Caratula</th>
      <th>Num expte</th>
      <th>Anio</th>
      <th>Juzgado</th>
      <th>Tipo de parte</th>
      <th>Abogado contraparte</th>
      <th>Nombre contraparte</th>
      <th>Domicilio const contraparte</th>
      <th>Domicilio real contraparte</th>
      <th>Circunscripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Expedientes as $Expediente): ?>
    <tr>
      <td><a href="<?php echo url_for('expediente/edit?id_expediente='.$Expediente->getIdExpediente()) ?>"><?php echo 'Editar' ?></a></td>
      <td><?php echo $Expediente->getCaratula() ?></td>
      <td><?php echo $Expediente->getNumExpte() ?></td>
      <td><?php echo $Expediente->getAnio() ?></td>
      <td><?php echo $Expediente->getJuzgado() ?></td>
      <td><?php echo $Expediente->getTipoDeParte() ?></td>
      <td><?php echo $Expediente->getAbogadoContraparte() ?></td>
      <td><?php echo $Expediente->getNombreContraparte() ?></td>
      <td><?php echo $Expediente->getDomicilioConstContraparte() ?></td>
      <td><?php echo $Expediente->getDomicilioRealContraparte() ?></td>
      <td><?php echo $Expediente->getCircunscripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('intranet/menuAbogado') ?>">Menú</a>
