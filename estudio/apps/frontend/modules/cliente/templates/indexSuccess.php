<h1>Lista de Clientes</h1>

<table class = 'table table-striped'>
  <thead>
    <tr>
      <th></th>
      <th>Apellido</th>
      <th>Nombre</th>
      <th>Dni</th>
      <th>Domicilio real</th>
      <th>Telefono</th>
      <th>Mail</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Clientes as $Cliente): ?>
    <tr>
      <td><a href="<?php echo url_for('cliente/edit?id_cliente='.$Cliente->getIdCliente()) ?>"><?php echo 'Editar' ?></a></td>
      <td><?php echo $Cliente->getApellido() ?></td>
      <td><?php echo $Cliente->getNombre() ?></td>
      <td><?php echo $Cliente->getDni() ?></td>
      <td><?php echo $Cliente->getDomicilioReal() ?></td>
      <td><?php echo $Cliente->getTelefono() ?></td>
      <td><?php echo $Cliente->getMail() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('intranet/menuAbogado') ?>">Menú</a>
