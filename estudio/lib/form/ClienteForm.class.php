<?php

/**
 * Cliente form.
 *
 * @package    estudio
 * @subpackage form
 * @author     Your name here
 */
class ClienteForm extends BaseClienteForm
{
  public function configure()
  {
       $this->setValidators(array(
      'id_cliente'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdCliente()), 'empty_value' => $this->getObject()->getIdCliente(), 'required' => false)),
      'apellido'       => new sfValidatorString(array('max_length' => 50), array('required'=>'Es obligatorio ingresar el apellido')),
      'nombre'         => new sfValidatorString(array('max_length' => 50), array('required'=>'Es obligatorio ingresar el nombre')),
      'dni'            => new sfValidatorInteger(array('min' => 1000000, 'max' => 99999999), array('required'=>'Es obligatorio ingresar el dni','invalid'=>'Solo se pueden ingresar números')),
      'domicilio_real' => new sfValidatorString(array('max_length' => 45), array('required'=>'Es obligatorio ingresar el domicilio')),
      'telefono'       => new sfValidatorInteger(array('min'=> 7), array('required' => false), array('invalid'=>'Solo se deben ingresar números')),
      'mail'           => new sfValidatorEmail(array('max_length' => 100, 'required' => false), array('invalid'=>'El e-mail no es válido')),
    ));

  }
}
