<?php

/**
 * Abogado form base class.
 *
 * @method Abogado getObject() Returns the current form's model object
 *
 * @package    estudio
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAbogadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_abogado'  => new sfWidgetFormInputHidden(),
      'apellido'    => new sfWidgetFormInputText(),
      'nombre'      => new sfWidgetFormInputText(),
      'dni'         => new sfWidgetFormInputText(),
      'matricula'   => new sfWidgetFormInputText(),
      'telefono'    => new sfWidgetFormInputText(),
      'mail'        => new sfWidgetFormInputText(),
      'contrasenia' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_abogado'  => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAbogado()), 'empty_value' => $this->getObject()->getIdAbogado(), 'required' => false)),
      'apellido'    => new sfValidatorString(array('max_length' => 45)),
      'nombre'      => new sfValidatorString(array('max_length' => 45)),
      'dni'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'matricula'   => new sfValidatorString(array('max_length' => 45)),
      'telefono'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'mail'        => new sfValidatorString(array('max_length' => 45)),
      'contrasenia' => new sfValidatorString(array('max_length' => 8)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Abogado', 'column' => array('dni'))),
        new sfValidatorPropelUnique(array('model' => 'Abogado', 'column' => array('matricula'))),
        new sfValidatorPropelUnique(array('model' => 'Abogado', 'column' => array('contrasenia'))),
        new sfValidatorPropelUnique(array('model' => 'Abogado', 'column' => array('mail'))),
      ))
    );

    $this->widgetSchema->setNameFormat('abogado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Abogado';
  }


}
