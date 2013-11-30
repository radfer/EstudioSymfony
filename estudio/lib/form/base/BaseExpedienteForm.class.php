<?php

/**
 * Expediente form base class.
 *
 * @method Expediente getObject() Returns the current form's model object
 *
 * @package    estudio
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseExpedienteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_expediente'               => new sfWidgetFormInputHidden(),
      'caratula'                    => new sfWidgetFormInputText(),
      'num_expte'                   => new sfWidgetFormInputText(),
      'anio'                        => new sfWidgetFormInputText(),
      'juzgado'                     => new sfWidgetFormInputText(),
      'tipo_de_parte'               => new sfWidgetFormInputText(),
      'abogado_contraparte'         => new sfWidgetFormInputText(),
      'nombre_contraparte'          => new sfWidgetFormInputText(),
      'domicilio_const_contraparte' => new sfWidgetFormInputText(),
      'domicilio_real_contraparte'  => new sfWidgetFormInputText(),
      'circunscripcion'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_expediente'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdExpediente()), 'empty_value' => $this->getObject()->getIdExpediente(), 'required' => false)),
      'caratula'                    => new sfValidatorString(array('max_length' => 90), array('required'=>'Es obligatorio ingresar la carátula')),
      'num_expte'                   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647), array('required'=>'Es obligatorio ingresar el número del expediente')),
      'anio'                        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647), array('required'=>'Es obligatorio ingresar el año de la causa')),
      'juzgado'                     => new sfValidatorString(array('max_length' => 45), array('required'=>'Es obligatorio ingresar el año del expediente')),
      'tipo_de_parte'               => new sfValidatorString(array(), array('required'=>'Es obligatorio ingresar el rol de parte')),
      'abogado_contraparte'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre_contraparte'          => new sfValidatorString(array('max_length' => 45), array('required'=>'Es obligatorio ingresar el nombre de la contraparte')),
      'domicilio_const_contraparte' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'domicilio_real_contraparte'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'circunscripcion'             => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('expediente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Expediente';
  }


}
