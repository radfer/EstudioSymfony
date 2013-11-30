<?php

/**
 * Expediente form.
 *
 * @package    estudio
 * @subpackage form
 * @author     Your name here
 */
class ExpedienteForm extends BaseExpedienteForm
{
  public function configure()
  {
	   $this->setValidators(array(
      'id_expediente'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdExpediente()), 'empty_value' => $this->getObject()->getIdExpediente(), 'required' => false)),
      'caratula'                    => new sfValidatorString(array('max_length' => 90), array('required'=>'Es obligatorio ingresar la caratula del expediente')),
      'num_expte'                   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'anio'                        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'juzgado'                     => new sfValidatorString(array('max_length' => 45)),
      'tipo_de_parte'               => new sfValidatorString(),
      'abogado_contraparte'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre_contraparte'          => new sfValidatorString(array('max_length' => 45)),
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
 


