<?php

/**
 * Cliente form base class.
 *
 * @method Cliente getObject() Returns the current form's model object
 *
 * @package    estudio
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseClienteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_cliente'     => new sfWidgetFormInputHidden(),
      'apellido'       => new sfWidgetFormInputText(),
      'nombre'         => new sfWidgetFormInputText(),
      'dni'            => new sfWidgetFormInputText(),
      'domicilio_real' => new sfWidgetFormInputText(),
      'telefono'       => new sfWidgetFormInputText(),
      'mail'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_cliente'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdCliente()), 'empty_value' => $this->getObject()->getIdCliente(), 'required' => false)),
      'apellido'       => new sfValidatorString(array('max_length' => 50)),
      'nombre'         => new sfValidatorString(array('max_length' => 50)),
      'dni'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'domicilio_real' => new sfValidatorString(array('max_length' => 45)),
      'telefono'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'mail'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Cliente', 'column' => array('dni')))
    );

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }


}
