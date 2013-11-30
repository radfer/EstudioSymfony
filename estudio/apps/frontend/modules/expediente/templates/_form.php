<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('expediente/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_expediente='.$form->getObject()->getIdExpediente() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('intranet/menuAbogado') ?>">Menú</a>
          <button type="submit" class = 'btn btn-info'>Guardar</button>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['caratula']->renderLabel() ?></th>
        <td>
          <?php echo $form['caratula']->renderError() ?>
          <?php echo $form['caratula'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['num_expte']->renderLabel() ?></th>
        <td>
          <?php echo $form['num_expte']->renderError() ?>
          <?php echo $form['num_expte'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['anio']->renderLabel() ?></th>
        <td>
          <?php echo $form['anio']->renderError() ?>
          <?php echo $form['anio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['juzgado']->renderLabel() ?></th>
        <td>
          <?php echo $form['juzgado']->renderError() ?>
          <?php echo $form['juzgado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tipo_de_parte']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipo_de_parte']->renderError() ?>
          <?php echo $form['tipo_de_parte'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['abogado_contraparte']->renderLabel() ?></th>
        <td>
          <?php echo $form['abogado_contraparte']->renderError() ?>
          <?php echo $form['abogado_contraparte'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nombre_contraparte']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre_contraparte']->renderError() ?>
          <?php echo $form['nombre_contraparte'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['domicilio_const_contraparte']->renderLabel() ?></th>
        <td>
          <?php echo $form['domicilio_const_contraparte']->renderError() ?>
          <?php echo $form['domicilio_const_contraparte'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['domicilio_real_contraparte']->renderLabel() ?></th>
        <td>
          <?php echo $form['domicilio_real_contraparte']->renderError() ?>
          <?php echo $form['domicilio_real_contraparte'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['circunscripcion']->renderLabel() ?></th>
        <td>
          <?php echo $form['circunscripcion']->renderError() ?>
          <?php echo $form['circunscripcion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
