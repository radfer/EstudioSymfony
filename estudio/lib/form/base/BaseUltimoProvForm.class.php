<?php

/**
 * UltimoProv form base class.
 *
 * @method UltimoProv getObject() Returns the current form's model object
 *
 * @package    estudio
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUltimoProvForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_prov'           => new sfWidgetFormInputHidden(),
      'id_expediente'     => new sfWidgetFormPropelChoice(array('model' => 'Expediente', 'add_empty' => false)),
      'ultimo_movimiento' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_prov'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdProv()), 'empty_value' => $this->getObject()->getIdProv(), 'required' => false)),
      'id_expediente'     => new sfValidatorPropelChoice(array('model' => 'Expediente', 'column' => 'id_expediente')),
      'ultimo_movimiento' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('ultimo_prov[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UltimoProv';
  }


}
