<?php

/**
 * ExpedienteClienteAbogado form base class.
 *
 * @method ExpedienteClienteAbogado getObject() Returns the current form's model object
 *
 * @package    estudio
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseExpedienteClienteAbogadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cliente_id'    => new sfWidgetFormInputHidden(),
      'abogado_id'    => new sfWidgetFormInputHidden(),
      'expediente_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cliente_id'    => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id_cliente', 'required' => false)),
      'abogado_id'    => new sfValidatorPropelChoice(array('model' => 'Abogado', 'column' => 'id_abogado', 'required' => false)),
      'expediente_id' => new sfValidatorPropelChoice(array('model' => 'Expediente', 'column' => 'id_expediente', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('expediente_cliente_abogado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExpedienteClienteAbogado';
  }


}
