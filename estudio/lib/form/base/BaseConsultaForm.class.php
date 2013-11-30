<?php

/**
 * Consulta form base class.
 *
 * @method Consulta getObject() Returns the current form's model object
 *
 * @package    estudio
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseConsultaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_consulta' => new sfWidgetFormInputHidden(),
      'fecha'       => new sfWidgetFormDateTime(),
      'abogado_id'  => new sfWidgetFormPropelChoice(array('model' => 'Abogado', 'add_empty' => false)),
      'cliente_id'  => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => false)),
      'descripcion' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_consulta' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdConsulta()), 'empty_value' => $this->getObject()->getIdConsulta(), 'required' => false)),
      'fecha'       => new sfValidatorDateTime(),
      'abogado_id'  => new sfValidatorPropelChoice(array('model' => 'Abogado', 'column' => 'id_abogado')),
      'cliente_id'  => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id_cliente')),
      'descripcion' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('consulta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Consulta';
  }


}
