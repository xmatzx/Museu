<?php

/**
 * Evento form base class.
 *
 * @method Evento getObject() Returns the current form's model object
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'title'      => new sfWidgetFormInputText(),
      'overview'   => new sfWidgetFormTextarea(),
      'start_date' => new sfWidgetFormDate(),
      'end_date'   => new sfWidgetFormDate(),
      'local_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255)),
      'overview'   => new sfValidatorString(array('required' => false)),
      'start_date' => new sfValidatorDate(),
      'end_date'   => new sfValidatorDate(),
      'local_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Local'))),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evento';
  }

}
